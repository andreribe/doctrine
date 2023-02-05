<?php

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Course;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager=EntityManagerCreator::createEntityManager();

$studentRepository=$entityManager->getRepository(Student::class);

$studentList = $studentRepository->findAll();

foreach($studentList as $student){
    echo "ID: $student->id\nNome: $student->name\n";
    
    if($student->phones()->count() > 0){
        echo "Telefones:\n";
        echo implode(',',$student->phones()
            ->map(fn (Phone $phone)=> $phone->number)
            ->toArray());
    }
    if($student->courses->count() > 0){
        echo "Cursos:\n";
        echo implode(',',$student->courses()
            ->map(fn (Course $course)=> $course->nome)
            ->toArray());
    }

    echo PHP_EOL;
}