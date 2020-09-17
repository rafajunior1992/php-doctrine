<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];

$student = $entityManager->getReference(Student::class, $id); //pega somente uma refencia do objeto sem ir no banco com uma query

$entityManager->remove($student); //executa a query de delete
$entityManager->flush();