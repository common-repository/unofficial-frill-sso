<?php

namespace unofficial\frill\sso\Composer\Installers;

/**
 * An installer to handle MODX specifics when installing packages.
 */
class ModxInstaller extends BaseInstaller
{
    protected $locations = array('extra' => 'core/packages/{$name}/');
}
