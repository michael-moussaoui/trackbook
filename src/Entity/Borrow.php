<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BorrowRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BorrowRepository::class)]
class Borrow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("borrow:read")]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups("borrow:read")]
    private ?\DateTimeImmutable $borrowAt = null;

    #[ORM\Column]
    #[Groups("borrow:read")]
    private ?\DateTimeImmutable $borrowReturnAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBorrowAt(): ?\DateTimeImmutable
    {
        return $this->borrowAt;
    }

    public function setBorrowAt(\DateTimeImmutable $borrowAt): self
    {
        $this->borrowAt = $borrowAt;

        return $this;
    }

    public function getBorrowReturnAt(): ?\DateTimeImmutable
    {
        return $this->borrowReturnAt;
    }

    public function setBorrowReturnAt(\DateTimeImmutable $borrowReturnAt): self
    {
        $this->borrowReturnAt = $borrowReturnAt;

        return $this;
    }
}
