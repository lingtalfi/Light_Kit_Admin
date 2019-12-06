<?php


namespace Ling\Light_Kit_Admin\Crud\CrudRequestHandler;


use Ling\Light_Crud\CrudRequestHandler\LightBaseCrudRequestHandler;

/**
 * The LightKitAdminCrudRequestHandler class.
 */
class LightKitAdminCrudRequestHandler extends LightBaseCrudRequestHandler
{


    /**
     * @overrides
     */
    public function __construct()
    {
        parent::__construct();
        $this->pluginName = 'Light_Kit_Admin';
    }


}