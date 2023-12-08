<?php
define('__ROOT__', dirname(__FILE__)); 
// Path: index.php


// Get the current URL
$url = $_SERVER['REQUEST_URI'];
define('__ROOT__', __DIR__);

// Include necessary files
require_once(__ROOT__ . '/controller/StudentsController.php');
require_once(__ROOT__ . '/model/StudentModel.php');

// Initialize the model and controller
$model = new StudentModel();
$controller = new StudentsController($model);

// Handle the request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming the form action is set to "process_registration.php"
    require_once(__ROOT__ . '/../php');
} else {
    // Display the registration form
    include(__ROOT__ . '/registration_form.php');
}
// segments
$segments = explode('/', $url);
// We use segments[2] to determine which route to load
// segments[0] is empty because the URL starts with a slash
// segments[1] is the project folder name 'Carmel-California'
// segments[2] is the route name example: menu, about, contact, etc.
  
$uri=parse_url($url);


// Define routes
switch ($segments[2]) {
  case '':
  case '/':
  case 'index':
  case 'home':
      echo'home';
      break;
  case 'about':
      echo'about';;
      break;
  default:
      echo'page not found';;
      break;
}
function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}