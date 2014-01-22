<?php

class Controller{

    public $page_name;
    public $body_classes;

    public $css_main = 'styles/main.css';

    public function Controller(){

    }

    public function index(){

    }

    public function load_view($view){
        include('views' . '/' . $view . '.php');
    }
}