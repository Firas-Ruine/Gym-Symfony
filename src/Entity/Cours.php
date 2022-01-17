<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
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
    private $Titre;

    /**
     * @ORM\Column(type="time")
     */
    private $Heure;

    /**
     * @ORM\Column(type="integer")
     */
    private $Periode;

    /**
     * @ORM\ManyToOne(targetEntity=Coach::class, inversedBy="cours")
     */
    private $id_Coach;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->Heure;
    }

    public function setHeure(\DateTimeInterface $Heure): self
    {
        $this->Heure = $Heure;

        return $this;
    }

    public function getPeriode(): ?int
    {
        return $this->Periode;
    }

    public function setPeriode(int $Periode): self
    {
        $this->Periode = $Periode;

        return $this;
    }

    public function getIdCoach(): ?Coach
    {
        return $this->id_Coach;
    }

    public function setIdCoach(?Coach $id_Coach): self
    {
        $this->id_Coach = $id_Coach;

        return $this;
    }

    public function __toString()
    {
        return $this->Titre;
    }
}
