<?php

namespace Alura\Doctrine\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *@Entity
 */
class Course {
	/**
	 *@Id
	 *@GeneratedValue
	 *@Column(type="integer")
	 */
	private $id;
	/**
	 *@Column(type="string")
	 */
	private $name;
	/**
	 *@ManyToMany(targetEntity="Student", inversedBy="courses")
	 */
	private $students;

	public function __construct() {
		$this->students = new ArrayCollection();
	}

	public function getId(): int {
		return $this->id;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): self{
		$this->name = $name;

		return $this;
	}

	public function addStudent(Student $student): self {
		if ($this->students->contains($tudent)) {
			return $this;
		}

		$this->students->add($student);
		$student->addCourse($this);
		return $this;
	}

	public function getStudents(): Student {
		return $this->students;
	}
}
