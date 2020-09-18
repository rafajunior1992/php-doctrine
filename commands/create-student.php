<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$student = new Student();

$student->setName($argv[1]);

//zero é o indice do nome do arquivo// 1 é o indice do nome, logo 2 é indice do telefone passado
for ($i = 2; $i < $argc; $i++) {
	$numberPhone = $argv[$i];
	$phone = new Phone();
	$phone->setNumber($numberPhone);

	$student->addPhone($phone);
}

$entityManager->persist($student);

$entityManager->flush();
