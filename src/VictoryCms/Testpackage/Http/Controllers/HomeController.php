<?php namespace VictoryCms\Testpackage\Http\Controllers;


use Illuminate\Routing\Controller;
use VictoryCms\Core\Form\Elements\Label;
use VictoryCms\Core\Form\Elements\Password;
use VictoryCms\Core\Form\Elements\Text;
use VictoryCms\Core\Form\Form;

class HomeController extends Controller {

    public function index()
    {
        $form = new Form();
        $form->add(new Label('name', 'Naam'));
        $form->add(new Text('name'));
        $form->add(new Label('password', 'Wachtwoord'));
        $form->add(new Password('password'));

        return view('victory.testpackage::home', compact('form'));
    }

}