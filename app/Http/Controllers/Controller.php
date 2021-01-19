<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $data;

    public function __construct(){
        $this->data['phones'] = ['099 915 58 80','093 811 30 48'];
        $this->data['emails'] = ['metrise@gmail.com'];
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
