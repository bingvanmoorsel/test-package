<?php namespace VictoryCms\Testpackage\Http\Controllers;


use Illuminate\Routing\Controller;

class HomeController extends Controller {

    public function index()
    {
        return view('victory.testpackage::home');
    }

}