<?php

namespace Alura\Doctrine\Entity;

/**
 *@Entity
 */

class Phone {
	/**
	 *@Id
	 *@GeneratedValue
	 *@Column(type="integer")
	 */
	private $id;
	/**
	 *@Column(type="string")
	 */
	private $number;
	/**
	 *
	 *@ManyToOne(targetEntity="Student")
	 */
	private $student;

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int{
		$this->id = $id;

		return $this;
	}

	public function getNumber(): string {
		return $this->number;
	}

	public function setNumber(string $number): string{
		$this->number = $number;

		return $this->number;
	}

	public function getStudent(): Student {
		return $this->student;
	}

	public function setStudent(Student $student): self{
		$this->student = $student;

		return $this;
	}
}
