<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbonnementRepository::class)
 */
class Abonnement
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
    private $Type;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $Tarif;

    /**
     * @ORM\OneToOne(targetEntity=Cours::class, cascade={"persist", "remove"})
     */
    private $cours_id;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="abonnements")
     */
    private $user_id;

    public function __construct()
    {
        $this->user_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->Tarif;
    }

    public function setTarif(float $Tarif): self
    {
        $this->Tarif = $Tarif;

        return $this;
    }

    public function getCoursId(): ?Cours
    {
        return $this->cours_id;
    }

    public function setCoursId(?Cours $cours_id): self
    {
        $this->cours_id = $cours_id;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserId(): Collection
    {
        return $this->user_id;
    }

    public function addUserId(User $userId): self
    {
        if (!$this->user_id->contains($userId)) {
            $this->user_id[] = $userId;
        }

        return $this;
    }

    public function removeUserId(User $userId): self
    {
        $this->user_id->removeElement($userId);

        return $this;
    }
    public function __toString()
    {
        return $this->Libelle;
    }
}
