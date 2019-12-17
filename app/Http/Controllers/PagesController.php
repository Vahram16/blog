<?php


namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function index()
    {


        return view('layouts.index');

    }


    public function conceptos()
    {

        return view('layouts.conceptos');

    }

    public function planificando_tu_proyecto()
    {

        return view('layouts.planificando');

    }
    public function somos()
    {

        return view('layouts.somos');

    }
    public function recursos()
    {

        return view('layouts.recursos');

    }


}


