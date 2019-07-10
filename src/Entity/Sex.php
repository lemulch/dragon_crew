<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SexRepository")
 */
class Sex
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
     * @ORM\OneToMany(targetEntity="App\Entity\Astronaut", mappedBy="sex")
     */
    private $astronauts;

    public function __construct()
    {
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
            $astronaut->setSex($this);
        }

        return $this;
    }

    public function removeAstronaut(Astronaut $astronaut): self
    {
        if ($this->astronauts->contains($astronaut)) {
            $this->astronauts->removeElement($astronaut);
            // set the owning side to null (unless already changed)
            if ($astronaut->getSex() === $this) {
                $astronaut->setSex(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getLabel();
    }

}
