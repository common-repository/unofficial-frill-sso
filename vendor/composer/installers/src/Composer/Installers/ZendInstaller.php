<?php

namespace unofficial\frill\sso\Composer\Installers;

class ZendInstaller extends BaseInstaller
{
    protected $locations = array('library' => 'library/{$name}/', 'extra' => 'extras/library/{$name}/', 'module' => 'module/{$name}/');
}
