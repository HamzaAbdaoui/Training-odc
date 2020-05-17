<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendees
 *
 * @ORM\Table(name="attendees")
 * @ORM\Entity
 */
class Attendees
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=191, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @ORM\Column(name="job", type="integer", nullable=false, options={"comment"="0:Elève, 1:Etudiant, 2:Salarié, 3:Demandeur d'emploi, 4:Entrepreneur, 5:Autre"})
     */
    private $job;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_job", type="string", length=191, nullable=true)
     */
    private $otherJob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="establishment", type="string", length=191, nullable=true)
     */
    private $establishment;

    /**
     * @var integer
     *
     * @ORM\Column(name="attended", type="integer", nullable=false, options={"comment"="0:évènement, 1:formation"})
     */
    private $attended;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getJob(): ?int
    {
        return $this->job;
    }

    public function setJob(int $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getOtherJob(): ?string
    {
        return $this->otherJob;
    }

    public function setOtherJob(?string $otherJob): self
    {
        $this->otherJob = $otherJob;

        return $this;
    }

    public function getEstablishment(): ?string
    {
        return $this->establishment;
    }

    public function setEstablishment(?string $establishment): self
    {
        $this->establishment = $establishment;

        return $this;
    }

    public function getAttended(): ?int
    {
        return $this->attended;
    }

    public function setAttended(int $attended): self
    {
        $this->attended = $attended;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }



}
