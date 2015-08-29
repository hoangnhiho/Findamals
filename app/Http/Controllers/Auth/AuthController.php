<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Session;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	public function postLogin(Request $request)
	{
	    $this->validate($request, [
	        'name' => 'required',
	        'password' => 'required',
	    ]);

	    $credentials = $request->only('name', 'password');
		$credentials1 = $request-> name;
		$usersTable = User::where('name', '=', $credentials1)->first();

	    if ($this->auth->attempt($credentials, $request->has('remember')))
	    {
			$usersTable->save();
			$tempName =$usersTable->name;
	        return redirect()->intended($this->redirectPath());
	    }
	    return redirect($this->loginPath())
	                ->withInput($request->only('name', 'remember'))
	                ->withErrors([
	                    'name' => 'These credentials do not match our records.',
	                ]);
	}
    public function postRegister(Request $request)
    {
        $validator = $this->registrar->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        $this->auth->login($this->registrar->create($request->all()));
        $this->auth->logout();
        return redirect('/auth/login')->with('status', 'Registration Successful')->withInput($request->only('name'));
    }
    
	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

}
