<?php

namespace App\Entity;

use App\Repository\AtomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AtomRepository::class)
 */
class Atom
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $symbol;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $atomicNumber;

    /**
     * @ORM\Column(type="float")
     */
    private $atomicWeight;

    /**
     * @ORM\Column(type="integer")
     */
    private $atomicRadius;

    /**
     * @ORM\Column(type="integer")
     */
    private $ionRadius;

    /**
     * @ORM\Column(type="float")
     */
    private $meltingTemperature;



    /**
     * @ORM\Column(type="float")
     */
    private $density;

    /**
     * @ORM\Column(type="float")
     */
    private $boilingTemperature;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
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

    public function getAtomicNumber(): ?int
    {
        return $this->atomicNumber;
    }

    public function setAtomicNumber(int $atomicNumber): self
    {
        $this->atomicNumber = $atomicNumber;

        return $this;
    }

    public function getAtomicWeight(): ?float
    {
        return $this->atomicWeight;
    }

    public function setAtomicWeight(float $atomicWeight): self
    {
        $this->atomicWeight = $atomicWeight;

        return $this;
    }

    public function getAtomicRadius(): ?int
    {
        return $this->atomicRadius;
    }

    public function setAtomicRadius(int $atomicRadius): self
    {
        $this->atomicRadius = $atomicRadius;

        return $this;
    }

    public function getIonRadius(): ?int
    {
        return $this->ionRadius;
    }

    public function setIonRadius(int $ionRadius): self
    {
        $this->ionRadius = $ionRadius;

        return $this;
    }

    public function getMeltingTemperature(): ?float
    {
        return $this->meltingTemperature;
    }

    public function setMeltingTemperature(float $meltingTemperature): self
    {
        $this->meltingTemperature = $meltingTemperature;

        return $this;
    }

    public function getDensity(): ?float
    {
        return $this->density;
    }

    public function setDensity(float $density): self
    {
        $this->density = $density;

        return $this;
    }

    public function getBoilingTemperature(): ?float
    {
        return $this->boilingTemperature;
    }

    public function setBoilingTemperature(float $boilingTemperature): self
    {
        $this->boilingTemperature = $boilingTemperature;

        return $this;
    }
}
