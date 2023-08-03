<?php

namespace Davemin\Mailup;

use Illuminate\Support\Facades\Http;

class Mailup{

    public function subscribe(){
        return 'Subscribe By Me';
    }

    public function unsubscribe(){
        return 'Unubscribe';
    }

    public function update(){
        return 'Update';
    }
}
