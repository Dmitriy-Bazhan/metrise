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
        $this->data['phones'] = ['099 999 99 99','093 888 88 88'];
        $this->data['emails'] = ['first@gmail.com','second@gmail.com'];
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
