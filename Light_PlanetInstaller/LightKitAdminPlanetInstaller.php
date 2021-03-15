<?php


namespace Ling\Light_Kit_Admin\Light_PlanetInstaller;


use Ling\CliTools\Output\OutputInterface;
use Ling\Light_EasyRoute\Helper\LightEasyRouteHelper;
use Ling\Light_PlanetInstaller\PlanetInstaller\LightBasePlanetInstaller;


/**
 * The LightKitAdminPlanetInstaller class.
 */
class LightKitAdminPlanetInstaller extends LightBasePlanetInstaller
{


    /**
     * @overrides
     */
    public function onMapCopyAfter(string $appDir, OutputInterface $output): void
    {


        $output->write("Ling.Light_Kit_Admin: copying Ling.Light_EasyRoute routes to master...");
        LightEasyRouteHelper::copyRoutesFromPluginToMaster($appDir, "Ling.Light_Kit_Admin");
        $output->write("<success>ok.</success>" . PHP_EOL);
    }


}