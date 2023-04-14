<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BoxBookRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BoxBookRepository::class)]
class BoxBook
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("box:read")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups("box:read")]
    private ?string $sreet = null;

    #[ORM\Column(length: 255)]
    #[Groups("box:read")]
    private ?string $city = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups("box:read")]
    private array $geoloc = [];

    #[ORM\Column]
    #[Groups("box:read")]
    private ?int $zipcode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSreet(): ?string
    {
        return $this->sreet;
    }

    public function setSreet(string $sreet): self
    {
        $this->sreet = $sreet;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getGeoloc(): array
    {
        return $this->geoloc;
    }

    public function setGeoloc(array $geoloc): self
    {
        $this->geoloc = $geoloc;

        return $this;
    }

    public function getZipcode(): ?int
    {
        return $this->zipcode;
    }

    public function setZipcode(int $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }
}
