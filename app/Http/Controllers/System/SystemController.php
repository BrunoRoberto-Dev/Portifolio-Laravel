<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Exception;


class SystemController extends Controller {

    public function __construct()
    {
        // CONSTRUTOR
    }

    public function view() {
        try {
            return view('system.home.view');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    


}
