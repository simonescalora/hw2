<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class LoginController extends BaseController
{
    public function login_form()
    {   
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }

    public function do_login()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        //Validazione dati
        if( strlen(request('username')) == 0 || strlen(request('password')) == 0 )
        {
            Session::put ('error', 'compilazione');
            return redirect ('login') ->withInput();
        }
        $user = User::where('username', request('username'))->first();
        if (!$user || !password_verify(request('password'), $user->password))
        {
            Session::put ('error', 'wrong');
            return redirect ('login') ->withInput();
        }
        //Login 
        Session::put('user_id', $user->id);
        //Redirect alla home
        return redirect('home');
    }

    public function register_form()
    {   
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }

    public function do_register()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        //Validazione dati
        if( strlen(request('nome')) == 0 || strlen(request('cognome')) == 0 || strlen(request('username')) == 0 || 
            strlen(request('password')) == 0 || strlen(request('email')) == 0  )
        {
            Session::put ('error', 'compilazione');
            return redirect ('register') ->withInput();
        }
        else if (strlen(request('password')) < 8)
        {
            Session::put ('error', 'caratteri_insufficienti');
            return redirect ('register') ->withInput();
        } 
        else if (request('password') != request('conferma'))
        {
            Session::put ('error', 'bad_passwords');
            return redirect ('register') ->withInput();
        }
        else if (User::where('username', request('username'))->first())
        {
            Session::put ('error', 'esistenza_username');
            return redirect ('register') ->withInput();
        } 
        else if (User::where('email', request('email'))->first())
        {
            Session::put ('error', 'esistenza_email');
            return redirect ('register') ->withInput();
        } 
        //Creazione utente
        $user = new User;
        $user -> nome = request('nome');
        $user -> cognome = request('cognome');
        $user -> username = request('username');
        $user -> password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user -> email = request('email');
        $user ->save();
        //Login 
        Session::put('user_id', $user->id);
        //Redirect alla home
        return redirect('home');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
