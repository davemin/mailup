<?php
namespace Davemin\Mailup\Controllers;

use Illuminate\Http\Request;
use Davemin\Mailup\Facades\Mailupper;

class MailupController {

    public function subscribe(){
        $response = Mailupper::subscribe();
        return view('mailup::index', ['response' => $response]);
    }

}
