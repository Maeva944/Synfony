<?php

namespace App\Entity;

use App\Repository\RolesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RolesRepository::class)]
class Roles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_roles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRoles(): ?string
    {
        return $this->nom_roles;
    }

    public function setNomRoles(string $nom_roles): static
    {
        $this->nom_roles = $nom_roles;

        return $this;
    }
}
