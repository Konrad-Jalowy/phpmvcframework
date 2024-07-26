<?php 
require __DIR__ . "/../../vendor/autoload.php";

use Framework\{App, Arr};
use Framework\TemplateEngine;
use function App\Config\{registerMiddleware, registerRoutes};


$template = new TemplateEngine(__DIR__,  __DIR__ . '/templatepatterns.php');
$template->addGlobal('site_name', 'MyApp');
$people = [
    (object)['name' => 'John'],
    (object)['name' => 'Jane']
];
echo $template->renderTemplate('sth4.php', ['people' => $people]);

$data = [
    'user' => 'John',
    'password' => md5('helloworld'),
    'confirmPassword' => md5('helloworld'),
    'email' => 'john.doe@wp.pl'
];

$excluded_fields = ['password', 'confirmPassword'];

print_r(Arr::exceptKeys($data, $excluded_fields));
//Array ( [user] => John [email] => john.doe@wp.pl )

$jim = ["ID" => 14 , 0 => 14, "name" => "Jim", 1 => "Jim" , "age" => 29, 2 => 29 ];
print_r($jim);
//Array ( [ID] => 14 [0] => 14 [name] => Jim [1] => Jim [age] => 29 [2] => 29 )

print_r(Arr::withoutNumericKeys($jim));
// Array ( [ID] => 14 [name] => Jim [age] => 29 )

$app = new App(__DIR__ . "/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

return $app;