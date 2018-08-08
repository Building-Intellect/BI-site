<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kordy\Ticketit\Controllers\TicketsController;

class IssuesController extends TicketsController
{
    public function indexIssues() {
        $complete = false;
        return view('ticketit::index', compact('complete'));
    }
}
