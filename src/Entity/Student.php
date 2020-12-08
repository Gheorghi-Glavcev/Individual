<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use App\Repository\TeacherRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $average;

    /**
     * @ORM\ManyToOne(targetEntity=Teacher::class, inversedBy="Students")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Teacher;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAverage(): ?int
    {
        return $this->average;
    }

    public function setAverage(int $average): self
    {
        $this->average = $average;

        return $this;
    }

    public function getTeacher(): ?Teacher
    {
        return $this->Teacher;
    }

    public function setTeacher(?Teacher $Teacher): self
    {
        $this->Teacher = $Teacher;

        return $this;
    }
}
