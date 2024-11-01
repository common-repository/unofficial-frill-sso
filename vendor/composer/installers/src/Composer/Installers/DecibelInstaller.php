<?php

namespace unofficial\frill\sso\Composer\Installers;

class DecibelInstaller extends BaseInstaller
{
    /** @var array */
    protected $locations = array('app' => 'app/{$name}/');
}
