<?php

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
use \Alura\Doctrine\Entity\Phone;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager=EntityManagerCreator::createEntityManager();

// $phone1=new Phone('(21) 99999-8888');
// $phone2=new Phone('(22) 99999-8888');
// $entityManager->persist($phone1);
// $entityManager->persist($phone2);


$student=new Student($argv[1]);
$student->addPhone(new Phone('(21) 99999-8888'));
$student->addPhone(new Phone('(22) 99999-8888'));

$entityManager->persist($student);
$entityManager->flush();