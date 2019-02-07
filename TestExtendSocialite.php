<?php

namespace SocialiteProviders\Test;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TestExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('test', __NAMESPACE__ . '\Provider');
    }
}
