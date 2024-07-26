<?php



namespace App\Config;

use Framework\App;
use App\Controllers\{AboutController};


function registerRoutes(App $app)
{
  $app->get('/', [AboutController::class, 'about']);
  $app->get('/about', [AboutController::class, 'about']);
}