
  <?php
  require __DIR__ . '/vendor/autoload.php';

  use \App\Http\Router;
  use \App\Http\Response;
  use \App\Controller\Pages\Home;

  define('URL', 'http://localhost:8000');

  $obRouter = new Router(URL);
  // echo "<prev>";
  // print_r($obResponse);
  // echo "</prev>";
  // exit;

  $obRouter->put('/', [
    function() {
      return new Response(200, Home::getHome());
    }
  ]);

  $obRouter->run()->sendResponse();

