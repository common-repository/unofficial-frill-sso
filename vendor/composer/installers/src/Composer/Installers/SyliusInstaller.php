<?php

namespace unofficial\frill\sso\Composer\Installers;

class SyliusInstaller extends BaseInstaller
{
    protected $locations = array('theme' => 'themes/{$name}/');
}
