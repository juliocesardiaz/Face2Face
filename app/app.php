<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/User.php";
    require_once __DIR__."/../src/Place.php";

    $app = new Silex\Application();

    $app['debug']=true;

    $server = 'mysql:host=localhost;dbname=face_to_face';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    //home page (sign up page)
    $app->get("/", function() use($app) {
        return $app['twig']->render('home.html.twig');
    });

    //after log off
    $app->get("/logoff/{id}", function($id) use($app) {
        $user = User::find($id);
        $user->logOut();
        return $app['twig']->render('home.html.twig');
    });

    //list of users page
        //after sign up
    $app->post("/signup", function() use($app) {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $retype_password = $_POST['retype_password'];

        $user = new User($user_name, $password, $longitude=null, $latitude=null, $id=null);
        $user->save();

        return $app['twig']->render('users.html.twig', array("users" => User::getAll(), "requests" => $user->findMeetupRequests()));
    });

    //log in page
    $app->get("/login", function() use($app) {
        return $app['twig']->render('login.html.twig');
    });

    //waiting for request respond page
    $app->get("/waiting_to_confirm", function() use($app) {

        return $app['twig']->render('waiting_to_confirm.html.twig', array('user2' => $user->GetName()));
    });
    //confirmation page

    //confirmed page
    $app->get("/confirmed", function($id) use($app) {

        return $app['twig']->render('home.html.twig');
    });

    //meetup history page

    //directions page

    return $app;
?>
