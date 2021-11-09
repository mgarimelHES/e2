<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }


/**
     *  This is another method to invoke 'contact'
     */
    public function contact() 
    {
        //return 'This is the contact page ....';
        return $this->app->view('contact',[
            'email' => 'support@mgrps.com'
        ]);
    }
     /**
     *  This is another method to invoke 'about'
     */
    public function about() 
    {
        //return 'This is the about page ....';
        
        return $this->app->view('about',[
            'city' => 'Boston',
            'time' => date('g:ia')
        ]);
        
    }
}