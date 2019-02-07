<?php

namespace SofWar\SocialiteProvidersOpskins;

use SocialiteProviders\Manager\SocialiteWasCalled;

class OpskinsExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('opskins', __NAMESPACE__ . '\Provider');
    }
}
