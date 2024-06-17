<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function login()
    {
        return view('login');
    }

    public function productos()
    {

            return view('productos');
        }
        public function admin()
    {
        return view('admin');
    }
    public function notificacion()
    {
        return view('notificacion');
    }
    public function citas()
    {
        return view('citas');
    }
    public function empleados()
    {
        return view('empleados');
    }
    public function servicios1()
    {
        return view('servicios1');
    }
   
}
