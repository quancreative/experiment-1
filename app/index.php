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

    if (!empty($_POST))
    {
        $params = array_merge($params, $_POST);
    }

    if (!empty($_GET))
    {
        $params = array_merge($params, $_GET);
    }


    if ($current_page == '')
    {
        $current_page = 'welcome';
    }

    if (file_exists('controllers' . '/' . ucwords($current_page) . '.php'))
    {
        load_page($current_page);
    }else
    {
        load_page('missing');
    }
}

function load_page($page)
{
    include('controllers' . '/Controller.php'); // Import base class.s
    include('controllers' . '/' . $page . '.php');

    $page = ucwords($page);

    $controller = new $page();
    $controller->page_name = $page;
    $controller->index();
}

dispatcher();

/**
 * Returns array of $_GET and $_POST data
 * @return array
 */
function parse_params()
{
    $params = array();

    if (!empty($_POST))
    {
        $params = array_merge($params, $_POST);
    }

    return $params;
}

// strips out escape characters
function stripslashes_deep($value)
{
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    return $value;
}