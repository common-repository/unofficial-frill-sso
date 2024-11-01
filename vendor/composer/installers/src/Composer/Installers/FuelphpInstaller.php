<?php

namespace unofficial\frill\sso\Composer\Installers;

class FuelphpInstaller extends BaseInstaller
{
    protected $locations = array('component' => 'components/{$name}/');
}
