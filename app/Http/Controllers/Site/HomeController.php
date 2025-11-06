<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Exception;


class HomeController extends Controller {

    public function __construct()
    {
        // CONSTRUTOR
    }

    public function view() {
        try {
            return view('site.home.view');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    


}
