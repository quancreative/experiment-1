<?php

class Works extends Controller {

    public function index(){
        $page_name = 'works';

        include('views' . '/' . 'site_header.php');
        include('views' . '/' . 'works.php');
        include('views' . '/' . 'site_footer.php');
    }

    public function oldwebsite(){
        $page_name = 'works work-piece';
        $this->css_main = '../' . $this->css_main;
        $this->load_view('site_header');
        $this->load_view('oldwebsite');
        $this->load_view('site_footer');
    }
}