<?php

// Path: index.php


// Get the current URL
$url = $_SERVER['REQUEST_URI'];

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