<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
			$usersTable = Auth::user();
		}
		return view('home', compact('usersTable'));
	}
    
    /**
     * Return Leila's development view
     *
     */
    public function leila(){
		$userData = Auth::user();
        $terrainValue = self::getTerrainValue();
        return view('development.leila', compact('userData','terrainValue'));
    }
    /**
     * Return Nhi's development view
     *
     */
    public function nhi(){
		$userData = Auth::user();
        return view('development.nhi', compact('userData'));
    }
    /**
     * Return Helen's development view
     *
     */
    public function helen(){
        if (Auth::check()){
			$userData = Auth::user();
		}
        return view('development.helen', compact('userData'));
    }
    /**
     * Return Paul's development view
     *
     */
    public function paul(){
        if (Auth::check()){
			$userData = Auth::user();
		}
        return view('development.paul', compact('userData'));
    }
        /**
     * Return demo view
     *
     */
    public function demo(){
        return view('demo', compact('userData'));
    }
    /**
     * Return admin view
     *
     */
    public function admin(){
        if (Auth::check()){
			$userData = Auth::user();
		}
        return view('development.admin', compact('userData'));
    }
    /**
     * Returns unlock terrain number
     *
     */
    public static function getTerrainValue(){
        $userData = Auth::user();
        $totalExp = self::totalExp();
        if ($totalExp>=80) {
            return 3;
        } elseif ($totalExp>=40) {
            return 2;
        } else {
            return 1;
        }
    }
    /**
     * Returns total Exp
     *
     */
    public static function totalExp(){
        $userData = Auth::user();
        $totalExp = intval($userData->koalaExp) + intval($userData->wallabyExp) 
        + intval($userData->wombatExp) + intval($userData->platypusExp) 
        + intval($userData->cassowaryExp) + intval($userData->frogExp) 
        + intval($userData->whaleExp) + intval($userData->turtleExp) 
        + intval($userData->sharkExp) + intval($userData->kangarooExp) + intval($userData->bilbyExp);

        return $totalExp;
    }
    /**
     * Displays animal's Exp stars on My Collection page
     *
     */
    public static function displayStars(animal){
        if(animal==1){
            echo "<p class="exp"><span class="glyphicon glyphicon-star"></span></p>"
        }

    }
}
