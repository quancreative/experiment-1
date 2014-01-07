<?php

class Works extends Controller {

    public function index(){
        $page_name = 'works';

        include('views' . '/' . 'site_header.php');
        include('views' . '/' . 'works.php');
        include('views' . '/' . 'site_footer.php');

    }
}