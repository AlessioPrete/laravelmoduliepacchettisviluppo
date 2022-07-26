<?php

namespace alessioprete\BaseApp\app\Http\Controllers\Auth;

//use Backpack\CRUD\app\Library\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
//use Validator; //Dovrebbe essere un trait
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $data = []; // the information we send to the view

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    //use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $guard = config('auth.defaults.guard', 'web');

        $this->middleware("guest:$guard");

        // Where to redirect users after login / registration.
        $this->redirectTo = property_exists($this, 'redirectTo') ? $this->redirectTo
            : config('alessioprete.base.route_prefix', 'admin/dashboard');
    }


    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return alessioprete_auth();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user_model_fqn = config('alessioprete.base.user_model_fqn');
        $user = new $user_model_fqn();

        return $user->create([
            'name'                              => $data['name'],
            'email'                             => $data['email'],
            'password'                          => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        // if registration is closed, deny access
        if (! config('alessioprete.base.registration_open')) {
            abort(403, 'Non è possibile registrare nuovi utenti');
        }

        $this->data['title'] = 'Registrazione Utenti'; // set the page title

        return view(alessioprete_view('auth.register'), $this->data);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // if registration is closed, deny access
        if (! config('alessioprete.base.registration_open')) {
            abort(403, 'Non è possibile registrare nuovi utenti, contattare l\'amministratore');
        }

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        event(new Registered($user));
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $user_model_fqn = config('alessioprete.base.user_model_fqn');
        $user = new $user_model_fqn();
        $users_table = $user->getTable();

        return Validator::make($data, [
            'name'                             => 'required|max:255',
            'email'   => 'required|email|max:255|unique:'.$users_table,
            'password'                         => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'admin/dashboard';
    }
}
