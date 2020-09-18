<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
	$phones = $student
		->getPhones()
		->map(function (Phone $phone) {
			return $phone->getNumber();
		})
		->toArray();
	echo "ID: {$student->getId()}\nNome: {$student->getName()}\n\n";
	echo "Telefones: " . implode(', ', $phones);
}