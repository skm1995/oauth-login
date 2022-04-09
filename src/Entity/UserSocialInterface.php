<?php

namespace App\Entity;

interface UserSocialInterface
{
    public function getSocialId(): ?string;

    public function setSocialId(string $socialId): self;
}
