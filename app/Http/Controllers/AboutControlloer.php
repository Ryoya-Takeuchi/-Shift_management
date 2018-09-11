<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutControlloer extends Controller
{
    /**
     * Display the about page.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index() {
        return view('about');
    }

}
