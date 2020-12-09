<?php

namespace App\Entity;

use App\Repository\QuestionChoixMultiplesRepository;
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
}
