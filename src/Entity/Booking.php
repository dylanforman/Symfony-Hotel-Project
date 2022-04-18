<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $guestName;

    #[ORM\OneToOne(targetEntity: Room::class, cascade: ['persist', 'remove'])]
    private $room;

    #[ORM\Column(type: 'date')]
    private $startDate;

    #[ORM\Column(type: 'date')]
    private $endDate;

    #[ORM\Column(type: 'integer')]
    private $numAdults;

    #[ORM\Column(type: 'integer')]
    private $numChild;

    public function __construct($id, $guestName, $room, $startDate, $endDate, $numAdults, $numChild)
    {
        $this->id = $id;
        $this->guestName = $guestName;
        $this->room =$room;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->numAdults = $numAdults;
        $this->numChild = $numChild;
    }



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

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getNumAdults(): ?int
    {
        return $this->numAdults;
    }

    public function setNumAdults(int $numAdults): self
    {
        $this->numAdults = $numAdults;

        return $this;
    }

    public function getNumChild(): ?int
    {
        return $this->numChild;
    }

    public function setNumChild(int $numChild): self
    {
        $this->numChild = $numChild;

        return $this;
    }
}
