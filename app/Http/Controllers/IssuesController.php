<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Kordy\Ticketit\Controllers\TicketsController;
use Kordy\Ticketit\Helpers\LaravelVersion;
use Kordy\Ticketit\Models\Ticket;

class IssuesController extends TicketsController
{
    protected $collection;

    public function indexIssues() {
        $complete = false;
        $collection = self::data($complete);
        return view('ticketit::index', compact('complete'));
    }

    public function data($complete = false) {
        if (LaravelVersion::min('5.4')) {
            $datatables = app(\Yajra\DataTables\DataTables::class);
        } else {
            $datatables = app(\Yajra\Datatables\Datatables::class);
        }
        $user = $this->agent->find(auth()->user()->id);
        if ($user->isAdmin()) {
            if ($complete) {
                $collection = Ticket::complete();
            } else {
                $collection = Ticket::active();
            }
        } elseif ($user->isAgent()) {
            if ($complete) {
                $collection = Ticket::complete()->agentUserTickets($user->id);
            } else {
                $collection = Ticket::active()->agentUserTickets($user->id);
            }
        } else {
            if ($complete) {
                $collection = Ticket::userTickets($user->id)->complete();
            } else {
                $collection = Ticket::userTickets($user->id)->active();
            }
        }
        $collection
            ->join('users', 'users.id', '=', 'ticketit.user_id')
            ->join('ticketit_statuses', 'ticketit_statuses.id', '=', 'ticketit.status_id')
            ->join('ticketit_priorities', 'ticketit_priorities.id', '=', 'ticketit.priority_id')
            ->join('ticketit_categories', 'ticketit_categories.id', '=', 'ticketit.category_id')
            ->select([
                'ticketit.id',
                'ticketit.subject AS subject',
                'ticketit_statuses.name AS status',
                'ticketit_statuses.color AS color_status',
                'ticketit_priorities.color AS color_priority',
                'ticketit_categories.color AS color_category',
                'ticketit.id AS agent',
                'ticketit.updated_at AS updated_at',
                'ticketit_priorities.name AS priority',
                'users.name AS owner',
                'ticketit.agent_id',
                'ticketit_categories.name AS category',
            ])->where('ticketit_categories.name', 'Issues');

        $collection = $datatables->of($collection);
        printf($collection->toJson());
        $this->renderTicketTable($collection);
        $collection->editColumn('updated_at', '{!! \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $updated_at)->diffForHumans() !!}');
        $collection->rawColumns(['subject', 'status', 'priority', 'category', 'agent']);
        return $collection->make(true);
    }
}
