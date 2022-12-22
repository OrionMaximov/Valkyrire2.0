<?php

namespace App\Entity;

use App\Repository\OrderItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=OrderItemRepository::class)
 */
class OrderItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Livres::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $livres;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(1)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderRef;

    /**
     * Tests if the given livre given corresponds to the same order livre.
     *
     * @param OrderItem $livres
     *
     * @return bool
     */
    public function equals(OrderItem $livres): bool
    {
        return $this->getLivres()->getId() === $livres->getLivres()->getId();
    }

    /**
     * Calculates the livre total.
     *
     * @return float|int
     */
    public function getTotal(): float
    {
        return $this->getLivres()->getPrix() * $this->getQuantite();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivres(): ?Livres
    {
        return $this->livres;
    }

    public function setLivres(?Livres $livres): self
    {
        $this->livres = $livres;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getOrderRef(): ?Order
    {
        return $this->orderRef;
    }

    public function setOrderRef(?Order $orderRef): self
    {
        $this->orderRef = $orderRef;

        return $this;
    }
}
