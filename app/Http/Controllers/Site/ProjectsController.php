<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Exception;


class ProjectsController extends Controller {

    public function __construct()
    {
        // CONSTRUTOR
    }

    public function view() {
        try {
            return view('site.projects.view');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    


}
