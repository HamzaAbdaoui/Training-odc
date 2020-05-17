<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluationEvents
 *
 * @ORM\Table(name="evaluation_events", indexes={@ORM\Index(name="evaluation_events_attendee_id_foreign", columns={"attendee_id"})})
 * @ORM\Entity
 */
class EvaluationEvents
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=191, nullable=false)
     */
    private $place;

    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="integer", nullable=false, options={"comment"="0:Hello Startups, 1:6 to 8 talks, 2:Speed Recruiting, 3:Autre"})
     */
    private $event;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_event", type="string", length=191, nullable=true)
     */
    private $otherEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="contents", type="integer", nullable=false, options={"comment"="1:Insuffisant => 5:Parfaitement"})
     */
    private $contents;

    /**
     * @var integer
     *
     * @ORM\Column(name="satisfaction_speaker", type="integer", nullable=false, options={"comment"="1:Insuffisant => 5:Parfaitement"})
     */
    private $satisfactionSpeaker;

    /**
     * @var string|null
     *
     * @ORM\Column(name="speaker_improve", type="string", length=191, nullable=true)
     */
    private $speakerImprove;

    /**
     * @var integer
     *
     * @ORM\Column(name="subscribe", type="integer", length=191, nullable=false, options={"comment"="1:Oui, 0:Non"})
     */
    private $subscribe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="interested_technology", type="string", length=191, nullable=true)
     */
    private $interestedTechnology;

    /**
     * @var string|null
     *
     * @ORM\Column(name="good_remarks", type="string", length=191, nullable=true)
     */
    private $goodRemarks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="improve_remarks", type="string", length=191, nullable=true)
     */
    private $improveRemarks;

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

    /**
     * @var \App\Entity\Attendees
     *
     * @ORM\ManyToOne(targetEntity="Attendees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attendee_id", referencedColumnName="id")
     * })
     */
    private $attendee;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getEvent(): ?int
    {
        return $this->event;
    }

    public function setEvent(int $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getOtherEvent(): ?string
    {
        return $this->otherEvent;
    }

    public function setOtherEvent(?string $otherEvent): self
    {
        $this->otherEvent = $otherEvent;

        return $this;
    }

    public function getContents(): ?int
    {
        return $this->contents;
    }

    public function setContents(int $contents): self
    {
        $this->contents = $contents;

        return $this;
    }

    public function getSatisfactionSpeaker(): ?int
    {
        return $this->satisfactionSpeaker;
    }

    public function setSatisfactionSpeaker(int $satisfactionSpeaker): self
    {
        $this->satisfactionSpeaker = $satisfactionSpeaker;

        return $this;
    }

    public function getSpeakerImprove(): ?string
    {
        return $this->speakerImprove;
    }

    public function setSpeakerImprove(?string $speakerImprove): self
    {
        $this->speakerImprove = $speakerImprove;

        return $this;
    }

    public function getSubscribe(): ?int
    {
        return $this->subscribe;
    }

    public function setSubscribe(int $subscribe): self
    {
        $this->subscribe = $subscribe;

        return $this;
    }

    public function getInterestedTechnology(): ?string
    {
        return $this->interestedTechnology;
    }

    public function setInterestedTechnology(?string $interestedTechnology): self
    {
        $this->interestedTechnology = $interestedTechnology;

        return $this;
    }

    public function getGoodRemarks(): ?string
    {
        return $this->goodRemarks;
    }

    public function setGoodRemarks(?string $goodRemarks): self
    {
        $this->goodRemarks = $goodRemarks;

        return $this;
    }

    public function getImproveRemarks(): ?string
    {
        return $this->improveRemarks;
    }

    public function setImproveRemarks(?string $improveRemarks): self
    {
        $this->improveRemarks = $improveRemarks;

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

    public function getAttendee(): ?Attendees
    {
        return $this->attendee;
    }

    public function setAttendee(?Attendees $attendee): self
    {
        $this->attendee = $attendee;

        return $this;
    }


}
