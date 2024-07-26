<?php 
use Framework\{TemplateEngine, Database, Container};
return [
    TemplateEngine::class => fn () => new TemplateEngine(__DIR__, __DIR__ . '/templatepatterns.php'),
  ];