<?php


namespace Ling\Light_Kit_Admin\Light_PlanetInstaller;


use Ling\BabyYaml\BabyYamlUtil;
use Ling\CliTools\Output\OutputInterface;
use Ling\Light_EasyRoute\Helper\LightEasyRouteHelper;
use Ling\Light_Kit_Admin\Light_BMenu\Util\LightKitAdminBMenuRegistrationUtil;
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


        //--------------------------------------------
        // routes
        //--------------------------------------------
        $output->write("Ling.Light_Kit_Admin: copying Ling.Light_EasyRoute routes to master...");
        LightEasyRouteHelper::copyRoutesFromPluginToMaster($appDir, "Ling.Light_Kit_Admin");
        $output->write("<success>ok.</success>" . PHP_EOL);


        //--------------------------------------------
        // menus
        //--------------------------------------------
        $util = new LightKitAdminBMenuRegistrationUtil();
        $util->setContainer($this->container);


        $output->write("Ling.Light_Kit_Admin: registering menu items...");
        $f = $appDir . "/config/data/Ling.Light_Kit_Admin/Ling.Light_BMenu/admin_main_menu.byml";
        $items = BabyYamlUtil::readFile($f);
        $util->writeItemsToMainMenuSection("root", $items);
        $output->write("<success>ok.</success>" . PHP_EOL);

    }


}