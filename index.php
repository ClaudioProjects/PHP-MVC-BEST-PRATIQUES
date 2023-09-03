
  <?php
  require __DIR__ . '/vendor/autoload.php';

  use \App\Http\Router;
  use \App\Controller\Pages\Home;

  define('URL', 'http://localhost:8000');

  $obResponse = new Router(URL);
  // echo "<prev>";
  // print_r($obResponse);
  // echo "</prev>";
  // exit;


  echo Home::getHome();
