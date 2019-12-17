[Back to the Ling/Light_Kit_Admin api](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin.md)<br>
[Back to the Ling\Light_Kit_Admin\Controller\LightKitAdminController class](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController.md)


LightKitAdminController::checkRight
================



LightKitAdminController::checkRight — Ensures that the current user is connected and has the right provided in the arguments.




Description
================


protected [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkRight.md)(string $right) : void




Ensures that the current user is connected and has the right provided in the arguments.
If not, the user will be redirected (http redirect) to a page defined in the
light kit admin service configuration.




Parameters
================


- right

    


Return values
================

Returns void.


Exceptions thrown
================

- [LightRedirectException](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Exception/LightRedirectException.md).&nbsp;







Source Code
===========
See the source code for method [LightKitAdminController::checkRight](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/Controller/LightKitAdminController.php#L172-L193)


See Also
================

The [LightKitAdminController](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController.md) class.

Previous method: [redirectByRoute](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/redirectByRoute.md)<br>Next method: [checkMicroPermission](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin/Controller/LightKitAdminController/checkMicroPermission.md)<br>
