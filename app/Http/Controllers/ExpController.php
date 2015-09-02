<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Experence Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the experience level of the animals and user
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
     * Return save exp on admin page
     *
     */
    public static function expSave(Request $request){
        if (Auth::check()){
			$userData = Auth::user();
			$userData->userExp = $request->input('userExp');
			$userData->wallabyExp = $request->input('wallabyExp');
			$userData->kaolaExp = $request->input('kaolaExp');
			$userData->wombatExp = $request->input('wombatExp');
			$userData->platypusExp = $request->input('platypusExp');
			$userData->cassowaryExp = $request->input('cassowaryExp');
			$userData->frogExp = $request->input('frogExp');
			$userData->whaleExp = $request->input('whaleExp');
			$userData->turtleExp = $request->input('turtleExp');
			$userData->sharkExp = $request->input('sharkExp');
			$userData->bilbyExp = $request->input('bilbyExp');
			$userData->kangarooExp = $request->input('kangarooExp');
			$userData->save();
			$userData = Auth::user();
		}
        return redirect('/admin');
    }

    /**
     * @ para $animal $value
     *
     * Return Dynamically add EXP to animal
     *
     */
    public static function addExp($animal,$value){
        if (Auth::check()){
			$userData = Auth::user();
		}
		if (self::checkAnimal($animal)){
			$animal .= 'Exp';
			$userData = Auth::user();
			$userData->$animal += intval($value);
			$userData->save();
		}else{ 
			return 'Something went WRONG. Syntax URL: http://deco1800-g52.uqcloud.net/addExp/kangaroo/10 will increase the kangaroos EXP by 10';
		}
    }

    /**
     * Return true|false checking if animal exists in 
     * database and for spelling errors
     *
     */
    private static function checkAnimal($animal){
		if ($animal == 'user' || $animal == 'wallaby' || $animal == 'kaola' || $animal == 'wombat' || $animal == 'platypus' || $animal == 'cassowary' || $animal == 'frog' || $animal == 'whale' || $animal == 'turtle' || $animal == 'shark' || $animal == 'bilby' || $animal == 'kangaroo')
		{
			return true;
		}
		return false;
    }

}
