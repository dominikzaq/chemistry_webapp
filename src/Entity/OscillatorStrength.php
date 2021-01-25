<?php

namespace App\Entity;

use App\Repository\OscillatorStrengthRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OscillatorStrengthRepository::class)
 */
class OscillatorStrength
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $intensity;

    /**
     * @ORM\Column(type="float")
     */
    private $waveLength;

    /**
     * @ORM\Column(type="float")
     */
    private $aki;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $configuration;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $term;

    /**
     * @ORM\Column(type="integer")
     */
    private $j;

    /**
     * @ORM\ManyToOne(targetEntity=JonizationLevel::class, inversedBy="oscillatorStrengths")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jonizationLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntensity(): ?int
    {
        return $this->intensity;
    }

    public function setIntensity(int $intensity): self
    {
        $this->intensity = $intensity;

        return $this;
    }

    public function getWaveLength(): ?float
    {
        return $this->waveLength;
    }

    public function setWaveLength(float $waveLength): self
    {
        $this->waveLength = $waveLength;

        return $this;
    }

    public function getAki(): ?float
    {
        return $this->aki;
    }

    public function setAki(float $aki): self
    {
        $this->aki = $aki;

        return $this;
    }

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(string $configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }

    public function getTerm(): ?string
    {
        return $this->term;
    }

    public function setTerm(string $term): self
    {
        $this->term = $term;

        return $this;
    }

    public function getJ(): ?int
    {
        return $this->j;
    }

    public function setJ(int $j): self
    {
        $this->j = $j;

        return $this;
    }

    public function getJonizationLevel(): ?JonizationLevel
    {
        return $this->jonizationLevel;
    }

    public function setJonizationLevel(?JonizationLevel $jonizationLevel): self
    {
        $this->jonizationLevel = $jonizationLevel;

        return $this;
    }
}
