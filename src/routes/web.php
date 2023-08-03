<?php

use Davemin\Mailup\Controllers\MailupController;
use Illuminate\Support\Facades\Route;

Route::get('mailup/subscribe', [MailupController::class, 'subscribe']);
