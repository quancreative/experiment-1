<?php

class About {

    public function index(){
        $page_name = 'about';

        include('views' . '/' . 'site_header.php');
        include('views' . '/' . 'about.php');
        include('views' . '/' . 'site_footer.php');

    }
}