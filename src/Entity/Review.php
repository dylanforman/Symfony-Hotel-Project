<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $guestName;

    #[ORM\Column(type: 'integer')]
    private $staffRating;

    #[ORM\Column(type: 'integer')]
    private $cleanRating;

    #[ORM\Column(type: 'integer')]
    private $facilityRating;

    #[ORM\Column(type: 'string', length: 255)]
    private $comment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuestName(): ?string
    {
        return $this->guestName;
    }

    public function setGuestName(string $guestName): self
    {
        $this->guestName = $guestName;

        return $this;
    }

    public function getStaffRating(): ?int
    {
        return $this->staffRating;
    }

    public function setStaffRating(int $staffRating): self
    {
        $this->staffRating = $staffRating;

        return $this;
    }

    public function getCleanRating(): ?int
    {
        return $this->cleanRating;
    }

    public function setCleanRating(int $cleanRating): self
    {
        $this->cleanRating = $cleanRating;

        return $this;
    }

    public function getFacilityRating(): ?int
    {
        return $this->facilityRating;
    }

    public function setFacilityRating(int $facilityRating): self
    {
        $this->facilityRating = $facilityRating;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
