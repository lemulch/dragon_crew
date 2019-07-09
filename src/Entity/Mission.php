<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MissionRepository")
 */
class Mission
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
    private $usefullCharge;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $launchTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Launcher", inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $launcher;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SpacialCenter", inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $spacialCenter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Operator", inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $operator;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Astronaut", mappedBy="missions")
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

    public function getUsefullCharge(): ?string
    {
        return $this->usefullCharge;
    }

    public function setUsefullCharge(string $usefullCharge): self
    {
        $this->usefullCharge = $usefullCharge;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLaunchTime(): ?\DateTimeInterface
    {
        return $this->launchTime;
    }

    public function setLaunchTime(\DateTimeInterface $launchTime): self
    {
        $this->launchTime = $launchTime;

        return $this;
    }

    public function getLauncher(): ?Launcher
    {
        return $this->launcher;
    }

    public function setLauncher(?Launcher $launcher): self
    {
        $this->launcher = $launcher;

        return $this;
    }

    public function getSpacialCenter(): ?SpacialCenter
    {
        return $this->spacialCenter;
    }

    public function setSpacialCenter(?SpacialCenter $spacialCenter): self
    {
        $this->spacialCenter = $spacialCenter;

        return $this;
    }

    public function getOperator(): ?Operator
    {
        return $this->operator;
    }

    public function setOperator(?Operator $operator): self
    {
        $this->operator = $operator;

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
            $astronaut->addMission($this);
        }

        return $this;
    }

    public function removeAstronaut(Astronaut $astronaut): self
    {
        if ($this->astronauts->contains($astronaut)) {
            $this->astronauts->removeElement($astronaut);
            $astronaut->removeMission($this);
        }

        return $this;
    }
}
