<?php
include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);




// ROUTER LIST
$router->get('/', function() {
  return <<<HTML
  <h1>Hello world</h1>
  <a href="profile"><button>PROFILE</button></a>
  <a href="about_me"><button>ABOUT ME</button></a>
HTML;
});
$router->get('/profile', function($request) {
    include 'pages/profile.php';
});

$Query = 'about_me';
$router->get('/'.$Query, function($request) {
    include 'pages/about.php';
});

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});

?>
