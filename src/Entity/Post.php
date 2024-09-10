<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 160)]
    private ?string $postitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $postText = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $postDateCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $postDatePublished = null;

    #[ORM\Column(nullable: true)]
    private ?bool $postPublished = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostitle(): ?string
    {
        return $this->postitle;
    }

    public function setPostitle(string $postitle): static
    {
        $this->postitle = $postitle;

        return $this;
    }

    public function getPostText(): ?string
    {
        return $this->postText;
    }

    public function setPostText(string $postText): static
    {
        $this->postText = $postText;

        return $this;
    }

    public function getPostDateCreated(): ?\DateTimeInterface
    {
        return $this->postDateCreated;
    }

    public function setPostDateCreated(?\DateTimeInterface $postDateCreated): static
    {
        $this->postDateCreated = $postDateCreated;

        return $this;
    }

    public function getPostDatePublished(): ?\DateTimeInterface
    {
        return $this->postDatePublished;
    }

    public function setPostDatePublished(?\DateTimeInterface $postDatePublished): static
    {
        $this->postDatePublished = $postDatePublished;

        return $this;
    }

    public function isPostPublished(): ?bool
    {
        return $this->postPublished;
    }

    public function setPostPublished(?bool $postPublished): static
    {
        $this->postPublished = $postPublished;

        return $this;
    }
}
