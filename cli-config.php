<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;


require_once 'vendor/autoload.php';
''
$entityManager = \Alura\Doctrine\Helper\EntityManagerCreator::createEntityManager();


return ConsoleRunner::createHelperSet($entityManager);