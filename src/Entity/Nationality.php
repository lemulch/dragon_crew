<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NationalityRepository")
 */
class Nationality
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Operator", mappedBy="nationality")
     */
    private $operators;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Astronaut", mappedBy="nationality")
     */
    private $astronauts;

    public function __construct()
    {
        $this->operators = new ArrayCollection();
        $this->astronauts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Operator[]
     */
    public function getOperators(): Collection
    {
        return $this->operators;
    }

    public function addOperator(Operator $operator): self
    {
        if (!$this->operators->contains($operator)) {
            $this->operators[] = $operator;
            $operator->setNationality($this);
        }

        return $this;
    }

    public function removeOperator(Operator $operator): self
    {
        if ($this->operators->contains($operator)) {
            $this->operators->removeElement($operator);
            // set the owning side to null (unless already changed)
            if ($operator->getNationality() === $this) {
                $operator->setNationality(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Astronaut[]
     */
    public function getAstronauts(): Collection
    {
        return $this->astronauts;
    }

    public function addAstronaut(Astronaut $astronaut): self
    {
        if (!$this->astronauts->contains($astronaut)) {
            $this->astronauts[] = $astronaut;
            $astronaut->setNationality($this);
        }

        return $this;
    }

    public function removeAstronaut(Astronaut $astronaut): self
    {
        if ($this->astronauts->contains($astronaut)) {
            $this->astronauts->removeElement($astronaut);
            // set the owning side to null (unless already changed)
            if ($astronaut->getNationality() === $this) {
                $astronaut->setNationality(null);
            }
        }

        return $this;
    }
}
