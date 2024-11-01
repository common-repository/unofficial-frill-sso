<?php

namespace unofficial\frill\sso\Composer\Installers;

class PhpBBInstaller extends BaseInstaller
{
    protected $locations = array('extension' => 'ext/{$vendor}/{$name}/', 'language' => 'language/{$name}/', 'style' => 'styles/{$name}/');
}
