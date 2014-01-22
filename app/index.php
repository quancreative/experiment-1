<?php
// starts a session
//    echo "Session starts.";

session_start();
session_name("quancreative.com");
//    echo ' Printing $_SESSION ';
//    print_r($_SESSION);
//    print(" session Name : " . session_name());

include('config.php');

function dispatcher()
{
    // Requested URL :: Get the address
    $root = str_replace('index.php', '', $_SERVER["PHP_SELF"]);

    define('WEB_URL', $root);

    $current_page = str_replace($root, '', $_SERVER['REQUEST_URI']);

    $params = array();

    if (!empty($_POST)){
        $params = array_merge($params, $_POST);
    }

    if (!empty($_GET)){
        $params = array_merge($params, $_GET);
    }

    if ($current_page == ''){
        $current_page = 'welcome';
    }

    // Checking segments in the URL
    $url = explode('/', $current_page);
    $controller_class = $url[0];

    // Second segment represents the class function or method.
    if (isset($url[1])){
        $controller_function = $url[1];
    }

    // Third segments and any additional segments, represent the ID and any variable that will be passed to the controller.
    if (isset($url[2])){
        $controller_id = $url[2];
    }

    if (file_exists('controllers' . '/' . ucwords($controller_class) . '.php')){
        $controller = load_page($controller_class);
        $controller->body_classes = $controller_class;

    }else{
        header('HTTP/1.0 404 Not Found');
        $controller = load_page('missing');
        $controller->body_classes = $controller_class;
    }

    if (isset($controller_function)){
        $controller->$controller_function();
        $controller->body_classes = $controller_class . ' subpage ' . $controller_function  ;
    }else {
        $controller->index();
    }
}

function load_page($page){
    include('controllers' . '/Controller.php'); // Import base class.
    include('controllers' . '/' . $page . '.php');

    // Title Case the page name to call its class.
    $page = ucwords($page);

    $controller = new $page();

    return $controller;
}

dispatcher();

/**
 * Returns array of $_GET and $_POST data
 * @return array
 */
function parse_params(){
    $params = array();

    if (!empty($_POST)){
        $params = array_merge($params, $_POST);
    }

    return $params;
}

// strips out escape characters
function stripslashes_deep($value){
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    return $value;
}