<?php

require __DIR__.'/vendor/autoload.php';

$app = new \Slim\App();

include __DIR__.'/Router/Author/AuthorRouter.php';
include __DIR__.'/Router/Book/BookRouter.php';

$app->run();