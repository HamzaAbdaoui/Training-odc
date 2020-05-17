<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluationFormations
 *
 * @ORM\Table(name="evaluation_formations", indexes={@ORM\Index(name="evaluation_formations_attendee_id_foreign", columns={"attendee_id"})})
 * @ORM\Entity
 */
class EvaluationFormations
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
     * @var integer
     *
     * @ORM\Column(name="formation", type="integer", nullable=false, options={"comment"="0:Android, 1:iOS, 2:Laravel, 3:Unity, 4:Design, 5:Data Science, 6:Machine Learning, 7:SuperCodeurs, 8:Autre"})
     */
    private $formation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_formation", type="string", length=191, nullable=true)
     */
    private $otherFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="contents", type="integer", nullable=false, options={"comment"="1:Insuffisant => 5:Parfaitement"})
     */
    private $contents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contents_improve", type="string", length=191, nullable=true)
     */
    private $contentsImprove;

    /**
     * @var integer
     *
     * @ORM\Column(name="conditions", type="integer", nullable=false, options={"comment"="1:Excellentes => 5:Médiocres"})
     */
    private $conditions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditions_improve", type="string", length=191, nullable=true)
     */
    private $conditionsImprove;

    /**
     * @var integer
     *
     * @ORM\Column(name="new_knowledge", type="integer", nullable=false, options={"comment"="1:Pas du tout => 5:Parfaitement"})
     */
    private $newKnowledge;

    /**
     * @var integer
     *
     * @ORM\Column(name="support_quality", type="integer", nullable=false, options={"comment"="1:Parfaitement, 2:Satisfaisante, 3:Moyennement, 4:Pas du tout"})
     */
    private $supportQuality;

    /**
     * @var integer
     *
     * @ORM\Column(name="former", type="integer", nullable=false, options={"comment"="1:Pas du tout => 5:Parfaitement"})
     */
    private $former;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarks_former", type="string", length=191, nullable=true)
     */
    private $remarksFormer;

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
     * @var \Attendees
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

    public function getFormation(): ?int
    {
        return $this->formation;
    }

    public function setFormation(int $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getOtherFormation(): ?string
    {
        return $this->otherFormation;
    }

    public function setOtherFormation(?string $otherFormation): self
    {
        $this->otherFormation = $otherFormation;

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

    public function getContentsImprove(): ?string
    {
        return $this->contentsImprove;
    }

    public function setContentsImprove(?string $contentsImprove): self
    {
        $this->contentsImprove = $contentsImprove;

        return $this;
    }

    public function getConditions(): ?int
    {
        return $this->conditions;
    }

    public function setConditions(int $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getConditionsImprove(): ?string
    {
        return $this->conditionsImprove;
    }

    public function setConditionsImprove(?string $conditionsImprove): self
    {
        $this->conditionsImprove = $conditionsImprove;

        return $this;
    }

    public function getNewKnowledge(): ?int
    {
        return $this->newKnowledge;
    }

    public function setNewKnowledge(int $newKnowledge): self
    {
        $this->newKnowledge = $newKnowledge;

        return $this;
    }

    public function getSupportQuality(): ?int
    {
        return $this->supportQuality;
    }

    public function setSupportQuality(int $supportQuality): self
    {
        $this->supportQuality = $supportQuality;

        return $this;
    }

    public function getFormer(): ?int
    {
        return $this->former;
    }

    public function setFormer(int $former): self
    {
        $this->former = $former;

        return $this;
    }

    public function getRemarksFormer(): ?string
    {
        return $this->remarksFormer;
    }

    public function setRemarksFormer(?string $remarksFormer): self
    {
        $this->remarksFormer = $remarksFormer;

        return $this;
    }

    public function getSubscribe(): ?string
    {
        return $this->subscribe;
    }

    public function setSubscribe(string $subscribe): self
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
