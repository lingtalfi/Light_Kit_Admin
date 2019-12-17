<?php


namespace Ling\Light_Kit_Admin\Controller;


use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_AjaxHandler\Service\LightAjaxHandlerService;
use Ling\Light_CsrfSession\Service\LightCsrfSessionService;
use Ling\Light_RowLookup\Service\LightRowLookupService;

/**
 * The TestPageController class.
 */
class TestPageController extends AdminPageController
{


    /**
     * Renders a test page.
     * Only admin should be able to access it.
     *
     * @return string|HttpResponseInterface
     * @throws \Exception
     */
    public function render()
    {

        $defaultPage = 'Light_Kit_Admin/kit/zeroadmin/test/test';


        //--------------------------------------------
        //
        //--------------------------------------------
        $identifier = 'Light_Kit_Admin.lud_user_has_permission_group';
        /**
         * @var $lookup LightRowLookupService
         */
        $lookup = $this->getContainer()->get('row_lookup');
        list($pane1Info, $pane2Info, $pane1FormInfo, $pane2FormInfo) = $lookup->init($identifier);


        /**
         * @var $csrfService LightCsrfSessionService
         */
        $csrfService = $this->getContainer()->get('csrf_session');
        $csrfToken = $csrfService->getToken();


        /**
         * @var $ajaxHandler LightAjaxHandlerService
         */
        $ajaxHandler = $this->getContainer()->get("ajax_handler");
        $ajaxHandlerUrl = $ajaxHandler->getServiceUrl();

        //--------------------------------------------
        //
        //--------------------------------------------
        $page = $_GET['page'] ?? $defaultPage;
        $this->checkRight("Light_Kit_Admin.admin");
        $params = [
            'ajaxHandlerUrl' => $ajaxHandlerUrl,
            'ajaxHandlerId' => 'Light_RowLookup',
            'identifier' => $identifier,
            'csrfToken' => $csrfToken,
            'pane1Info' => $pane1Info,
            'pane2Info' => $pane2Info,
            'pane1FormInfo' => $pane1FormInfo,
            'pane2FormInfo' => $pane2FormInfo,
        ];
        return $this->renderAdminPage($page, $params);
    }
}