<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
	echo "ID: {$student->getId()}\nNome: {$student->getName()}\n\n";
}

$ju = $studentRepository->find(2);
echo $ju->getName() . "\n\n";

$leo = $studentRepository->findOneBy([
	'name' => 'Leonardo Theodoro',
]);

var_dump($leo);