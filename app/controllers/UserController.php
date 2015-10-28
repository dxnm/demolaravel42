<?php

class UserController extends BaseController {

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        //$this->beforeFilter('auth', array('except' => 'getLogin'));
    }
    
    public function login()
    {
        return View::make('user.login');
    }
    
    public function do_login()
    {
        $input = Input::all();
        $rules = array(
            'username'   => 'required',
            'password'   => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('user.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $data = array(
                'username' => $input['username'],
                'password' => $input['password'],
            );
            if(Auth::attempt($data)){
                return Redirect::to('/');
            }else{
                return Redirect::to('login');
            }
        }
    }
    
    public function index()
    {
        $data = User::all();
        return View::make('user.index',array('data'=>$data));
    }
    
    public function create()
    {
        return View::make('user.create');
    }
    
    public function store()
    {
        $rules = array(
            'username'   => 'required',
            'password'   => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('user/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $userpass = Input::get('password');
            $user->password = Hash::make($userpass);
            $user->save();

            return Redirect::to('/');
        }
    }
    
    public function edit($id)
    {
        $data = User::find($id);
        return View::make('user.edit',array('data'=>$data));
    }
    
    public function update($id)
    {
        $rules = array(
            'username'   => 'required',
            'password'   => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('user/edit/'.$id)
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $user = User::find($id);
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $userpass = Input::get('password');
            $user->password = Hash::make($userpass);
            $user->save();

            return Redirect::to('/');
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return Redirect::to('/');
    }

}