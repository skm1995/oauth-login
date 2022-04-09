<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait UserSocialTrait
{
    #[ORM\Column(type: 'string', length: 255, unique: true)]
    private $socialId;

    public function getSocialId(): ?string
    {
        return $this->socialId;
    }

    public function setSocialId(string $socialId): self
    {
        $this->socialId = $socialId;

        return $this;
    }
}
