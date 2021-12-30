<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller {

    /**
     * Return demo view
     *
     */
    public function demo(){
        return view('demo');
    }

}
