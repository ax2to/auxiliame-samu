<?php

namespace App\Http\Controllers;

class MobileController extends Controller
{

    public function getRegister()
    {
        return view('mobile.register');
    }

    public function getLogin()
    {
        return view('mobile.login');
    }

    public function postLogin()
    {
    }

    public function postRegister()
    {
        return redirect()->route('mobile.index');
    }

    public function getWizard1()
    {
        return view('mobile.wizard1');
    }

    public function getWizard2()
    {
        return view('mobile.wizard2');
    }

    public function getWizard3()
    {
        return view('mobile.wizard3');
    }

    public function index()
    {
        return view('mobile.index');
    }
}
