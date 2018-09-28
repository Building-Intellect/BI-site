<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('clients', 'ClientController@getClients');

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@send');

Route::get('products', 'ProductsController@index');

Route::get('email-test', function() {
    sendEmail('chikn42@gmail.com', 'Building Intellect Test Email', 'test', 'Name');
});

// Clear all cache values:
Route::get('clear-cache', function() {
    $exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('route:clear');
    $exitCode3 = Artisan::call('view:clear');
    $exitCode4 = Artisan::call('config:cache');
    return '<h1>Facade, Routes, Views, and Config cache values cleared</h1>';
});

// Seed work-order and issues ticket settings
Route::get('/seed-work-orders', function () {
    $work_orders_seeder = new \Kordy\Ticketit\Seeds\TicketitTableSeeder;
    $work_orders_seeder->email_domain = '@example.com'; // the email domain name for demo accounts. Ex. user1@example.com
    $work_orders_seeder->agents_qty = 8; // number of demo agents accounts
    $work_orders_seeder->agents_per_category = 2; // number of demo agents per category (must be lower than $agents_qty)
    $work_orders_seeder->users_qty = 10; // number of demo users accounts
    $work_orders_seeder->tickets_per_user_min = 1; // Minimum number of generated tickets per user
    $work_orders_seeder->tickets_per_user_max = 5; // Maximum number of generated tickets per user
    $work_orders_seeder->comments_per_ticket_min = 0; // Minimum number of generated comments per ticket
    $work_orders_seeder->comments_per_ticket_max = 3; // Maximum number of generated comments per ticket
    $work_orders_seeder->default_agent_password = 'demo'; // default demo agents accounts paasword
    $work_orders_seeder->default_user_password = 'demo'; // default demo users accounts paasword
    $work_orders_seeder->tickets_date_period = 70; // to go to past (in days) and start creating tickets since
    $work_orders_seeder->tickets_min_close_period = 1; // minimum days to close tickets
    $work_orders_seeder->tickets_max_close_period = 365; // maximum days to close tickets
    $work_orders_seeder->default_closed_status_id = 2; // default status id for closed tickets
    $work_orders_seeder->categories = [
        'Maintenance' => '#0014f4',
        'Warranty' => '#2b9900',
        'Programming' => '#0f3600',
        'Controls' => '#7e0099'
    ];
    $work_orders_seeder->statuses = [
        'Queued' => '#e69900',
        'Completed' => '#15a000',
        'In-Progress' => '#f40700'
    ];
    $work_orders_seeder->priorities = [
        'Low' => '#069900',
        'Normal' => '#e1d200',
        'Critical' => '#e10000'
    ];
    $work_orders_seeder->run();
    return view('tickets');
});

// send email using phpmailer and godaddy smtp forwarding
function sendEmail($to, $subject, $message, $name) {
    define('SMTP_HOST', 'relay-hosting.secureserver.net');
    define('SMTP_PORT', 25);
    define('SMTP_AUTH', true);

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail -> SMTPDebug = 1;
    $mail->Host = "smtpout.secureserver.net";
    $mail->SMTPAuth = SMTP_AUTH;
    $mail->Port = 80;
    $mail->Username = "kellann@buildingintellect.com";
    $mail->Password = "890p890p";
    //$mail->SMTPSecure = 'ssl';
    $mail->SetFrom('noreply@buildingintellect.com');
    $mail->Subject = $subject;
    $body = $message;
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $name);
    if(!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}
