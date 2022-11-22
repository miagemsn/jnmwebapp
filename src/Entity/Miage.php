<?php

namespace App\Entity;

use App\Repository\MiageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MiageRepository::class)]
class Miage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $provenance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMiageId(): ?int
    {
        return $this->miage_id;
    }

    public function setMiageId(int $miage_id): self
    {
        $this->miage_id = $miage_id;

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

    public function getProvenance(): ?string
    {
        return $this->provenance;
    }

    public function setProvenance(string $provenance): self
    {
        $this->provenance = $provenance;

        return $this;
    }
}
