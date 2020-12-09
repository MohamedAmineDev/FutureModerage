<?php

namespace App\Entity;

use App\Repository\SondageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SondageRepository::class)
 */
class Sondage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrParticipant;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrQuestion;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrReponse;

    /**
     * @ORM\ManyToOne(targetEntity=Sujet::class, inversedBy="sondages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idSujet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbrParticipant(): ?int
    {
        return $this->nbrParticipant;
    }

    public function setNbrParticipant(int $nbrParticipant): self
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

    public function getNbrQuestion(): ?int
    {
        return $this->nbrQuestion;
    }

    public function setNbrQuestion(int $nbrQuestion): self
    {
        $this->nbrQuestion = $nbrQuestion;

        return $this;
    }

    public function getNbrReponse(): ?int
    {
        return $this->nbrReponse;
    }

    public function setNbrReponse(int $nbrReponse): self
    {
        $this->nbrReponse = $nbrReponse;

        return $this;
    }

    public function getIdSujet(): ?Sujet
    {
        return $this->idSujet;
    }

    public function setIdSujet(?Sujet $idSujet): self
    {
        $this->idSujet = $idSujet;

        return $this;
    }
}
