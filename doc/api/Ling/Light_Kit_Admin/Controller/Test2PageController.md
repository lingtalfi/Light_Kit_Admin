[Back to the Ling/Light_Kit_Admin api](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin.md)



The Test2PageController class
================
2019-05-17 --> 2021-07-30






Introduction
============

The Test2PageController class.



Class synopsis
==============


class <span class="pl-k">Test2PageController</span> extends [AdminPageController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController.md) implements [LightControllerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Controller/LightControllerInterface.md), [LightAwareInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/LightAwareInterface.md), [RouteAwareControllerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Controller/RouteAwareControllerInterface.md) {

- Inherited properties
    - protected array [LightKitAdminController::$route](#property-route) ;
    - protected [Ling\Light\Core\Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md) [LightController::$light](#property-light) ;

- Methods
    - public [render](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/Test2PageController/render.md)() : string | [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)

- Inherited methods
    - public [AdminPageController::__construct](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/__construct.md)() : void
    - public [AdminPageController::renderAdminPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/renderAdminPage.md)(string $page, ?array $options = []) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - public [LightKitAdminController::setRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/setRoute.md)(array $route) : void
    - protected [LightKitAdminController::getKitAdmin](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getKitAdmin.md)() : [LightKitAdminService](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Service/LightKitAdminService.md)
    - protected [LightKitAdminController::getFlasher](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getFlasher.md)() : [LightFlasherService](https://github.com/lingtalfi/Light_Flasher/blob/master/doc/api/Ling/Light_Flasher/Service/LightFlasherService.md)
    - protected [LightKitAdminController::getUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getUser.md)() : [LightWebsiteUser](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightWebsiteUser.md)
    - protected [LightKitAdminController::getValidWebsiteUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getValidWebsiteUser.md)() : [LightWebsiteUser](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/LightWebsiteUser.md)
    - public [LightKitAdminController::renderPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderPage.md)(string $page, ?array $options = []) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - public [LightKitAdminController::renderDefaultPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderDefaultPage.md)() : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - protected [LightKitAdminController::getRedirectResponseByRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getRedirectResponseByRoute.md)(string $route, ?array $urlParams = []) : [HttpRedirectResponse](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpRedirectResponse.md)
    - protected [LightKitAdminController::alcpResponse](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/alcpResponse.md)(callable $callable) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - protected [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkRight.md)(string $right) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md) | null
    - protected [LightKitAdminController::checkMicroPermission](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkMicroPermission.md)(string $microPermission) : void
    - protected [LightKitAdminController::error](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/error.md)(string $msg) : void
    - public LightController::setLight([Ling\Light\Core\Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md) $light) : void
    - protected LightController::getLight() : [Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md)
    - protected LightController::getContainer() : [LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md)
    - protected LightController::getHttpRequest() : Ling\Light\Http\HttpRequestInterface
    - protected LightController::hasService(string $serviceName) : bool
    - protected LightController::logError($msg) : void

}






Methods
==============

- [Test2PageController::render](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/Test2PageController/render.md) &ndash; Renders a test page.
- [AdminPageController::__construct](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/__construct.md) &ndash; Builds the LightController instance.
- [AdminPageController::renderAdminPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/renderAdminPage.md) &ndash; if she is not connected yet.
- [LightKitAdminController::setRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/setRoute.md) &ndash; Sets the matching route to this controller instance.
- [LightKitAdminController::getKitAdmin](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getKitAdmin.md) &ndash; Returns the kit admin service instance.
- [LightKitAdminController::getFlasher](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getFlasher.md) &ndash; Returns a flasher instance.
- [LightKitAdminController::getUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getUser.md) &ndash; Returns the current user.
- [LightKitAdminController::getValidWebsiteUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getValidWebsiteUser.md) &ndash; Returns a valid website user, or throws an exception.
- [LightKitAdminController::renderPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderPage.md) &ndash; Renders the given page using the [kit service](https://github.com/lingtalfi/Light_Kit).
- [LightKitAdminController::renderDefaultPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderDefaultPage.md) &ndash; Renders the default page, and returns the corresponding http response.
- [LightKitAdminController::getRedirectResponseByRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getRedirectResponseByRoute.md) &ndash; Creates and returns an HttpRedirectResponse, based on the given arguments.
- [LightKitAdminController::alcpResponse](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/alcpResponse.md) &ndash; Returns a response using the Ling.Light_AjaxHandler handler under the hood.
- [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkRight.md) &ndash; Ensures that the current user is connected and has the right provided in the arguments.
- [LightKitAdminController::checkMicroPermission](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkMicroPermission.md) &ndash; redirects to the access_denied page.
- [LightKitAdminController::error](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/error.md) &ndash; Throws an exception.
- LightController::setLight &ndash; Sets the light instance.
- LightController::getLight &ndash; Returns the light application.
- LightController::getContainer &ndash; Returns the service container.
- LightController::getHttpRequest &ndash; Returns the http request bound to the light instance.
- LightController::hasService &ndash; Returns whether the container contains the service which name is given.
- LightController::logError &ndash; Sends a log message to the logger service's error channel.





Location
=============
Ling\Light_Kit_Admin\Controller\Test2PageController<br>
See the source code of [Ling\Light_Kit_Admin\Controller\Test2PageController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/Controller/Test2PageController.php)



SeeAlso
==============
Previous class: [RealAdminPageController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/RealAdminPageController.md)<br>Next class: [TestPageController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/TestPageController.md)<br>
