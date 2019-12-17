<?php


namespace Ling\Light_Kit_Admin\Controller\Generated;


use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_Kit\PageConfigurationUpdator\PageConfUpdator;
use Ling\Light_Kit_Admin\Controller\Generated\Base\RealGenController;


/**
 * The LudaDirectoryMapController class.
 */
class LudaDirectoryMapController extends RealGenController
{

    /**
     * Renders the directory map list page.
     *
     * @return HttpResponseInterface|string
     * @throws \Exception
     */
    public function renderList()
    {
        return $this->renderAdminPage('Light_Kit_Admin/kit/zeroadmin/generated/luda_directory_map_list', [], PageConfUpdator::create()->updateWidget("body.light_realist", [
            'vars' => [
                'request_declaration_id' => 'Light_Kit_Admin:generated/luda_directory_map',
            ],
        ]));
    }


    /**
     * Renders the directory map form page.
     *
     * @return string|HttpResponseInterface
     * @throws \Exception
     */
    public function renderForm()
    {

        $table = "luda_directory_map";
        $pluginName = "Light_Kit_Admin"; // used for micro-permissions
        $identifier = "Light_Kit_Admin.generated/luda_directory_map";
        $parentLayout = "Light_Kit_Admin/kit/zeroadmin/dev/mainlayout_base";
        $vars = [
            "title" => "Directory map form",
        ];
        if (array_key_exists("solo", $_GET)) {
            $parentLayout = "Light_Kit_Admin/kit/zeroadmin/dev/mainlayout_solo";
            $vars['related_links'] = []; // cancel any existing related links
            $this->setOnSuccessIframeSignal("done");
        }


        $form = $this->processForm($identifier, $table, $pluginName);


        //--------------------------------------------
        // RENDERING
        //--------------------------------------------
        return $this->renderAdminPage('Light_Kit_Admin/kit/zeroadmin/generated/luda_directory_map_form', [
            "parent_layout" => $parentLayout,
            "form" => $form,
        ], PageConfUpdator::create()->updateWidget("body.lka_chloroform", [
            'vars' => $vars,
        ]));
    }
}