<?php


namespace Ling\Light_Kit_Admin\Realist\Rendering;


use Ling\Light_ControllerHub\Service\LightControllerHubService;
use Ling\Light_Realist\Rendering\BaseRealistRowsRenderer;

/**
 * The LightKitAdminRealistRowsRenderer class.
 */
class LightKitAdminRealistRowsRenderer extends BaseRealistRowsRenderer
{


    /**
     * This property holds the controllerHubRoute for this instance.
     * @var string
     */
    private $_controllerHubRoute;

    /**
     * @overrides
     */
    protected function renderColumnContent($value, string $type, array $options, array $row): string
    {
        switch ($type) {
            case "my_action":
                return '<button class="btn btn-primary btn-small rath-emitter"
 data-param-action_id="Light_Kit_Admin-action1"
 data-ric-id="6"
 data-ric-pseudo="my_pseudo"
 data-param-one="one"
 data-param-two="22"
 
 
 >Action 1</button>';
                break;
            case "lka-edit_link":
                $ric = $this->extractRic($row);
                $url = $this->getUrlByRoute($options['route'], $ric);
                return '<a href="' . htmlspecialchars($url) . '">' . $options['text'] . '</a>';
                break;
            case "lka-edit_link_hub":
                $ric = $this->extractRic($row);
                $urlParams = array_merge($options['url_params'], $ric, [
                    "plugin" => "Light_Kit_Admin",
                ]);
                $url = $this->getUrlByRoute($this->getControllerHubRoute(), $urlParams);
                return '<a href="' . htmlspecialchars($url) . '">' . $options['text'] . '</a>';
                break;
//            case "lka-generic_ric_form_link":
//                $ric = $this->extractRic($row);
//                $url = $this->getUrlByRoute($options['route'], $ric);
//                return '<a href="' . htmlspecialchars($url) . '">' . $options['text'] . '</a>';
//                break;
            default:
                return parent::renderColumnContent($value, $type, $options, $row);
                break;
        }

    }



    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the name of the route to the @page(controller hub service).
     *
     * @return string
     * @throws \Exception
     */
    private function getControllerHubRoute(): string
    {
        if (null === $this->_controllerHubRoute) {
            /**
             * @var $hubs LightControllerHubService
             */
            $hubs = $this->container->get("controller_hub");
            $this->_controllerHubRoute = $hubs->getRouteName();
        }
        return $this->_controllerHubRoute;
    }
}