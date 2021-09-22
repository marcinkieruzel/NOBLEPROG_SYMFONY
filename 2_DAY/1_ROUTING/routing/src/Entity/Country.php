<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
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
    private $capitol;

    /**
     * @ORM\Column(type="bigint")
     */
    private $population;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $president;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCapitol(): ?string
    {
        return $this->capitol;
    }

    public function setCapitol(string $capitol): self
    {
        $this->capitol = $capitol;

        return $this;
    }

    public function getPopulation(): ?string
    {
        return $this->population;
    }

    public function setPopulation(string $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getPresident(): ?string
    {
        return $this->president;
    }

    public function setPresident(?string $president): self
    {
        $this->president = $president;

        return $this;
    }
}
