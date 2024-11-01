<?php

namespace unofficial\frill\sso\Composer\Installers;

use unofficial\frill\sso\Composer\Composer;
use unofficial\frill\sso\Composer\IO\IOInterface;
use unofficial\frill\sso\Composer\Plugin\PluginInterface;
class Plugin implements PluginInterface
{
    private $installer;
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($this->installer);
    }
    public function deactivate(Composer $composer, IOInterface $io)
    {
        $composer->getInstallationManager()->removeInstaller($this->installer);
    }
    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
}
