<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function showSignup()
    {
        return view('communito.signup');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());

        return redirect('/user/login')->with('status','you are registered');
        /*$user = new User([

            'fname'=>$request->post('fname'),
            'sname'=>$request->post('sname'),
            'bday'=>$request->post('bday'),
            'profession'=>$request->post('profession'),
            'dept'=>$request->post('dept'),
            'sem'=>$request->post('sem'),
            'email'=>$request->post('email'),
            'password'=>$request->post('password')

        ]);
        $user->save();*/

        
    }
    public function validation($request)
    {
        return $this->validate($request,[
            'fname' => 'required|max:255',
            'sname' => 'required|max:255',
            'bday' => 'required',
            'profession' => 'required|max:255',
            'dept' => 'required|max:255',
            'sem' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed',

        ]);
    }

    public function showlogin()
    {
        return view('communito.login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
           'email' => 'required|email|max:255',
           'password' => 'required',
        ]);

        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])) {
            session(['email'=> $request->email]);
            return redirect('/user/post');
        }
        return "oops something heppen wrong";
    }
    public function logout()
    {
        echo "k";
        Session::flush();
        Auth::logout();
        return redirect('/user/login');
    }

    
}
