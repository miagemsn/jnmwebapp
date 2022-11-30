<?php

namespace App\Entity;

use App\Repository\LogementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogementRepository::class)]
class Logement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column]
    private ?int $tarif = null;

    #[ORM\Column]
    private ?int $tarif_groupe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogementId(): ?int
    {
        return $this->logement_id;
    }

    public function setLogementId(int $logement_id): self
    {
        $this->logement_id = $logement_id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getTarif(): ?int
    {
        return $this->tarif;
    }

    public function setTarif(int $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getTarifGroupe(): ?int
    {
        return $this->tarif_groupe;
    }

    public function setTarifGroupe(int $tarif_groupe): self
    {
        $this->tarif_groupe = $tarif_groupe;

        return $this;
    }
}
