<?php

namespace App\Entity;

use App\Repository\QuestionChoixMultiplesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionChoixMultiplesRepository::class)
 */
class QuestionChoixMultiples
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
    private $text;

    /**
     * @ORM\Column(type="smallint")
     */
    private $nbrChoix;

    /**
     * @ORM\OneToMany(targetEntity=ChoixReponse::class, mappedBy="questionChoixMultiples")
     */
    private $choix;

    public function __construct()
    {
        $this->choix = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getNbrChoix(): ?int
    {
        return $this->nbrChoix;
    }

    public function setNbrChoix(int $nbrChoix): self
    {
        $this->nbrChoix = $nbrChoix;

        return $this;
    }

    /**
     * @return Collection|ChoixReponse[]
     */
    public function getChoix(): Collection
    {
        return $this->choix;
    }

    public function addChoix(ChoixReponse $choix): self
    {
        if (!$this->choix->contains($choix)) {
            $this->choix[] = $choix;
            $choix->setQuestionChoixMultiples($this);
        }

        return $this;
    }

    public function removeChoix(ChoixReponse $choix): self
    {
        if ($this->choix->removeElement($choix)) {
            // set the owning side to null (unless already changed)
            if ($choix->getQuestionChoixMultiples() === $this) {
                $choix->setQuestionChoixMultiples(null);
            }
        }

        return $this;
    }
}
