


<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

require_once '../../../teemo/app/Mage.php';
$magento = Mage::app("default");

$app = new Silex\Application();

//debugging turned on

$app['debug'] = true;

// public/index.php
//return hello world

// $app->get('/f', function()
// {
// 	return "Hello world";
// });

// // dynamic hello world!
// $app->get('/hello/{name}', function ($name) use ($app) 
// {
//     return 'Hello '.$app->escape($name);
// });

// $app->get('/foo', function() {
//   return 'Bar';

// });

// //blog

// $blogPosts = array(
//     1 => array(
//         'date'      => '2011-03-29',
//         'author'    => 'igorw',
//         'title'     => 'Using Silex',
//         'body'      => 'I am using Silex'
//     ),
//     2 => array(
//         'date'      => '2011-03-29',
//         'author'    => 'rohit',
//         'title'     => 'Using Slim',
//         'body'      => 'I am using Slim'
//     )

// );

// $app->get('/blog', function () use ($blogPosts) 
// {
//     $output = '';
//     foreach ($blogPosts as $post) {
// 		$output .= $post['title'];
// 		$output .= '<br />';
// 		$output .= $post['date'];
// 		$output .= '<br />';
// 		$output .= $post['author'];
// 		$output .= '<br />';
// 		$output .= $post['body'];
// 		$output .= '<br />';
//     }

//     return $output;
// });


// $app->get('/blog/{id}', function (Silex\Application $app, $id) use ($blogPosts) {
// 	// var_dump($blogPosts[$id]); exit;
//     if (!isset($blogPosts[$id])) {
//         $app->abort(404, "Post $id does not exist.");
//     }

//     $post = $blogPosts[$id];

//     return  "<h1>{$post['title']}</h1>".
//             "<p>{$post['body']}</p>";
// });

// $app->get('/', 'MyApp\Controller\IndexController::indexAction');

// Controller
$app->mount('/', new MyApp\Provider\MyClassController());


$app->get('/hi/{name}', function ($name) use ($app) {
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));
});




$app->run();