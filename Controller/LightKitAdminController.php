<?php


namespace Ling\Light_Kit_Admin\Controller;


use Ling\HtmlPageTools\Copilot\HtmlPageCopilot;
use Ling\Light\Controller\LightController;
use Ling\Light\Controller\RouteAwareControllerInterface;
use Ling\Light\Events\LightEvent;
use Ling\Light\Http\HttpRedirectResponse;
use Ling\Light\Http\HttpResponse;
use Ling\Light\Http\HttpResponseInterface;
use Ling\Light_Events\Service\LightEventsService;
use Ling\Light_Flasher\Service\LightFlasherService;
use Ling\Light_Kit\PageConfigurationUpdator\PageConfUpdator;
use Ling\Light_Kit\PageRenderer\LightKitPageRenderer;
use Ling\Light_Kit_Admin\Exception\LightKitAdminException;
use Ling\Light_Kit_Admin\Exception\LightKitAdminMicroPermissionDeniedException;
use Ling\Light_Kit_Admin\Service\LightKitAdminService;
use Ling\Light_MicroPermission\Service\LightMicroPermissionService;
use Ling\Light_User\LightWebsiteUser;
use Ling\Light_UserManager\Service\LightUserManagerService;


/**
 * The LightKitAdminController class.
 */
class LightKitAdminController extends LightController implements RouteAwareControllerInterface
{

    /**
     * This property holds the route for this instance.
     * See @page(the route page) for more information.
     * @var array
     */
    protected $route;

    /**
     * @overrides
     */
    public function __construct()
    {
        parent::__construct();
        $this->route = [];
    }

    /**
     * @implementation
     */
    public function setRoute(array $route)
    {
        $this->route = $route;
    }


    /**
     * Returns the kit admin service instance.
     *
     * @return LightKitAdminService
     * @throws \Exception
     */
    protected function getKitAdmin(): LightKitAdminService
    {
        return $this->getContainer()->get('kit_admin');
    }


    /**
     * Returns a flasher instance.
     * For more information, check out @page(the flasher service).
     *
     *
     * @return LightFlasherService
     * @throws \Exception
     */
    protected function getFlasher(): LightFlasherService
    {
        return $this->getContainer()->get('flasher');
    }


    /**
     * Returns the current user.
     * Note: in light kit admin, we use the LightWebsiteUser
     *
     * @return LightWebsiteUser
     * @throws \Exception
     */
    protected function getUser(): LightWebsiteUser
    {
        /**
         * @var $userManager LightUserManagerService
         */
        $userManager = $this->getContainer()->get("user_manager");
        return $userManager->getUser();
    }

    /**
     * Renders the given page using the @page(kit service).
     *
     * @param string $page
     * @param array $dynamicVariables
     * @param PageConfUpdator $updator
     *
     * @return HttpResponseInterface
     * @throws \Exception
     *
     */
    public function renderPage(string $page, array $dynamicVariables = [], PageConfUpdator $updator = null): HttpResponseInterface
    {
        /**
         * @var $copilot HtmlPageCopilot
         */
        $copilot = $this->getContainer()->get("html_page_copilot");
        $copilot->registerLibrary("lka_environment", [
            "/plugins/Light_Kit_Admin/js/light-kit-admin-environment.js",
            "/plugins/Light_Kit_Admin/js/light-kit-admin-init.js",
        ]);

        /**
         * postForm is used by light kit admin environment (i.e. it's a dependency of lka)
         */
        $copilot->registerLibrary("postForm", [
            "/libs/universe/Ling/JPostForm/post-form.js",
        ]);


        /**
         * @var $kit LightKitPageRenderer
         */
        $kit = $this->getContainer()->get("kit");


        /**
         * @var $events LightEventsService
         */
        $events = $this->getContainer()->get("events");

        $data = new LightEvent();
        $data->setLight($this->getLight());
        $data->setHttpRequest($this->getLight()->getHttpRequest());
        $data->setVar("page", $page);
        $events->dispatch('Light_Kit_Admin.on_page_rendered_before', $data);



        return new HttpResponse($kit->renderPage($page, $dynamicVariables, $updator));
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Creates and returns an HttpRedirectResponse, based on the given arguments.
     *
     * @param string $route
     * @param array $urlParams
     * @return HttpRedirectResponse
     * @throws \Exception
     */
    protected function getRedirectResponseByRoute(string $route, array $urlParams = [])
    {
        return $this->getKitAdmin()->getRedirectResponseByRoute($route, $urlParams);
    }


    /**
     * Ensures that the current user is connected and has the right provided in the arguments.
     * If not, returns an httpRedirect response that redirects the user to a login page.
     *
     *
     * @param string $right
     * @return HttpResponseInterface|null
     */
    protected function checkRight(string $right): ?HttpResponseInterface
    {

        $response = null;
        $user = $this->getUser();


        //--------------------------------------------
        // HANDLING RIGHTS
        //--------------------------------------------
        // non connected users are redirected to the login page
        if (false === $user->isValid()) {
            $redirectRoute = $this->getKitAdmin()->getOption("login.login_route");
            $urlParams = $_GET;
            $response = $this->getRedirectResponseByRoute($redirectRoute, $urlParams);
        } else {
            // users without the appropriate access right are redirected
            if (is_string($right) && false === $user->hasRight($right)) {
                $this->getFlasher()->addFlash("AdminPageControllerForbidden", "You don't have the right to access this page (you miss the \"$right\" right).", "w");
                $redirectRoute = $this->getKitAdmin()->getOption("access_denied.access_denied_route");
                $urlParams = $_GET;
                $response = $this->getRedirectResponseByRoute($redirectRoute, $urlParams);
            }
        }
        return $response;
    }


    /**
     * Checks whether the current user has the given microPermission, and if not, throws a redirect exception which
     * redirects to the access_denied page.
     *
     * @param string $microPermission
     * @throws \Exception
     */
    protected function checkMicroPermission(string $microPermission)
    {
        /**
         * @var $microService LightMicroPermissionService
         */
        $microService = $this->getContainer()->get("micro_permission");
        if (false === $microService->hasMicroPermission($microPermission)) {
            throw new LightKitAdminMicroPermissionDeniedException("You don't have the permission to access this page (you miss the \"$microPermission\" microPermission).");
        }
    }


    /**
     * Throws an exception.
     *
     * @param string $msg
     * @throws LightKitAdminException
     */
    protected function error(string $msg)
    {
        throw new LightKitAdminException($msg);
    }

    //--------------------------------------------
    //
    //--------------------------------------------


}