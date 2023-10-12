<?php

namespace Branko\ATest;
use Composer\Installer\PackageEvent;

class ComposerHelper
{

    public static function postPackageInstall(PackageEvent $event)
    {
       echo "branko install";
    }

}