[Back to the Ling/Light_Kit_Admin api](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin.md)



The UserListController class
================
2019-05-17 --> 2019-12-17






Introduction
============

The UserListController class.



Class synopsis
==============


class <span class="pl-k">UserListController</span> extends [AdminPageController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController.md) implements [LightAwareInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/LightAwareInterface.md), [LightControllerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Controller/LightControllerInterface.md), [RouteAwareControllerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Controller/RouteAwareControllerInterface.md) {

- Inherited properties
    - protected array [LightKitAdminController::$route](#property-route) ;
    - protected [Ling\Light\Core\Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md) [LightController::$light](#property-light) ;

- Methods
    - public [render](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/User/UserListController/render.md)() : string | [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)

- Inherited methods
    - public [AdminPageController::renderAdminPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/renderAdminPage.md)(string $page, ?$params = [], ?Ling\Light_Kit\PageConfigurationUpdator\PageConfUpdator $updator = null) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - public [LightKitAdminController::__construct](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/__construct.md)() : void
    - public [LightKitAdminController::setRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/setRoute.md)(array $route) : void
    - protected [LightKitAdminController::getKitAdmin](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getKitAdmin.md)() : [LightKitAdminService](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Service/LightKitAdminService.md)
    - protected [LightKitAdminController::getFlasher](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getFlasher.md)() : [LightFlasherService](https://github.com/lingtalfi/Light_Flasher/blob/master/doc/api/Ling/Light_Flasher/Service/LightFlasherService.md)
    - protected [LightKitAdminController::getUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getUser.md)() : [WebsiteLightUser](https://github.com/lingtalfi/Light_User/blob/master/doc/api/Ling/Light_User/WebsiteLightUser.md)
    - public [LightKitAdminController::renderPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderPage.md)(string $page, ?array $dynamicVariables = [], ?Ling\Light_Kit\PageConfigurationUpdator\PageConfUpdator $updator = null) : [HttpResponseInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Http/HttpResponseInterface.md)
    - protected [LightKitAdminController::redirectByRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/redirectByRoute.md)(string $redirectRoute) : void
    - protected [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkRight.md)(string $right) : void
    - protected [LightKitAdminController::checkMicroPermission](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkMicroPermission.md)(string $microPermission) : void
    - protected [LightKitAdminController::error](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/error.md)(string $msg) : void
    - public LightController::setLight([Ling\Light\Core\Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md) $light) : void
    - protected LightController::getLight() : [Light](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Core/Light.md)
    - protected LightController::getContainer() : [LightServiceContainerInterface](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/ServiceContainer/LightServiceContainerInterface.md)
    - protected LightController::getHttpRequest() : Ling\Light\Http\HttpRequestInterface

}






Methods
==============

- [UserListController::render](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/User/UserListController/render.md) &ndash; Renders the user list page, where the admin can administrate other users.
- [AdminPageController::renderAdminPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/AdminPageController/renderAdminPage.md) &ndash; if she is not connected yet.
- [LightKitAdminController::__construct](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/__construct.md) &ndash; Builds the LightController instance.
- [LightKitAdminController::setRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/setRoute.md) &ndash; Sets the matching route to this controller instance.
- [LightKitAdminController::getKitAdmin](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getKitAdmin.md) &ndash; Returns the kit admin service instance.
- [LightKitAdminController::getFlasher](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getFlasher.md) &ndash; Returns a flasher instance.
- [LightKitAdminController::getUser](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/getUser.md) &ndash; Returns the current user.
- [LightKitAdminController::renderPage](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/renderPage.md) &ndash; Renders the given page using the [kit service](https://github.com/lingtalfi/Light_Kit_Admin).
- [LightKitAdminController::redirectByRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/redirectByRoute.md) &ndash; Redirects the user to the given route.
- [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkRight.md) &ndash; Ensures that the current user is connected and has the right provided in the arguments.
- [LightKitAdminController::checkMicroPermission](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkMicroPermission.md) &ndash; redirects to the access_denied page.
- [LightKitAdminController::error](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/error.md) &ndash; Throws an exception.
- LightController::setLight &ndash; Sets the light instance.
- LightController::getLight &ndash; Returns the light application.
- LightController::getContainer &ndash; Returns the service container.
- LightController::getHttpRequest &ndash; Returns the http request bound to the light instance.





Location
=============
Ling\Light_Kit_Admin\Controller\User\UserListController<br>
See the source code of [Ling\Light_Kit_Admin\Controller\User\UserListController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/Controller/User/UserListController.php)



SeeAlso
==============
Previous class: [MultipleFormEditController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/Tools/MultipleFormEditController.md)<br>Next class: [UserProfileController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/User/UserProfileController.md)<br>
