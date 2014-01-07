<?php

class Welcome extends Controller {

    public function index(){
        $page_name = 'welcome';

        include('views' . '/' . 'site_header.php');
        include('views' . '/' . 'welcome.php');
        include('views' . '/' . 'site_footer.php');

    }
}