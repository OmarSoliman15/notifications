<?php

namespace App\Http\Controllers\Dashboard;

use App\Events\Action;
use App\Http\Controllers\Controller;

class ActionController extends Controller
{
    /**
     * Click the action button.
     *
     * @return \Illuminate\Http\Response
     */
    public function click()
    {
        event(new Action());

        return view('dashboard.home');
    }
}
