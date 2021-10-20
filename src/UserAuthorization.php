<?php

declare(strict_types=1);

namespace Leoloso\TestRector;

use Symfony\Contracts\Service\Attribute\Required;

class UserAuthorization
{
    #[Required]
    final public function autowireUserAuthorization(
        UserAuthorizationSchemeRegistryInterface $userAuthorizationSchemeRegistry
    ): void {
    }
}
