<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


/**
 * @ORM\Entity(repositoryClass=TeacherRepository::class)
 */
class Teacher
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
     * @ORM\Column(type="string", nullable=false)
     */
    private $lesson;

    /**
     * @ORM\OneToMany(targetEntity=Student::class, mappedBy="type")
     */
    private $Students;

    public function __construct()
    {
        $this->Students = new ArrayCollection();
    }

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

    public function getLesson(): ?string
    {
        return $this->lesson;
    }

    public function setLesson(string $lesson): self
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * @return Collection|Student[]
     */
    public function getStudents(): Collection
    {
        return $this->Students;
    }

    public function addStudent(Student $Student): self
    {
        if (!$this->Students->contains($Student)) {
            $this->Students[] = $Student;
            $Student->setTeacher($this);
        }

        return $this;
    }

    public function removeTeacher(Student $Student): self
    {
        if ($this->Students->removeElement($Student)) {
            // set the owning side to null (unless already changed)
            if ($Student->getTeacher() === $this) {
                $Student->setTeacher(null);
            }
        }

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->name;
    }
}