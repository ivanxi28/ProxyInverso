<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosIJR")]
class TablaIJR{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $FraseIJR;
 public function getId(): int
 {
 return $this->id;
 }
 public function getFraseIJR(): string
 {
 return $this->FraseIJR;
 }
 public function setFraseIJR(string $content): self
 {
 $this->FraseIJR = $content;
 return $this;
 }
}