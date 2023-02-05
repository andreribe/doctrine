<?php

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager=EntityManagerCreator::createEntityManager();

$student = $entityManager->find(Student::class,$argv[1]);
$student->name = $argv[2];

$entityManager->flush();