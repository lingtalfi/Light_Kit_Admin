Light_Kit_Admin
===========
2019-10-24 -> 2021-07-30

An admin system with gui for the [Light](https://github.com/lingtalfi/Light) framework.

This is a [Light framework plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).

It's based on the [Light_Kit](https://github.com/lingtalfi/Light_Kit) planet.

This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [planet installer](https://github.com/lingtalfi/Light_PlanetInstaller) via [light-cli](https://github.com/lingtalfi/Light_Cli)
```bash
lt install Ling.Light_Kit_Admin
```

Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.

```bash
uni import Ling/Light_Kit_Admin
```

Or just download it and place it where you want otherwise.






Summary
===========

- [Light_Kit_Admin api](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/api/Ling/Light_Kit_Admin.md) (
  generated with [DocTools](https://github.com/lingtalfi/DocTools))
- [Services](#services)
- Pages
    - [Bmenu](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/bmenu.md)
    - [Conception notes](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/conception-notes.md)
    - [Error handling](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/error-handling.md)
    - [Events](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/events.md)
    - [How to debug](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/how-to-debug.md)
    - [Kit theme](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/kit-theme.md)
    - [Light kit admin js environment](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/light-kit-admin-js-environment.md)
    - [Light kit admin plugins](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/lka-plugins.md)
    - [lka jim toolbox](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/lka-jim-toolbox.md)
    - [Pages](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/pages.md)
    - [Permissions](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/permissions.md)
    - [Procedures](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/procedures.md)
    - [Service dependencies](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/service-dependencies.md)
    - [User data](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/user-data.md)
    - [User notifications](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/user-notifications.md)
    - [User](https://github.com/lingtalfi/Light_Kit_Admin/blob/master/doc/pages/user.md)

Services
=========
2019-10-24 -> 2021-03-18


Here is an example of the service configuration:

```yaml
kit_admin:
    instance: Ling\Light_Kit_Admin\Service\LightKitAdminService
    methods:
        setContainer:
            container: @container()
        setOptions:
            options:
                lang: eng
                login:
                    # Used by LoginFormController to redirect the user after a successful connection on the login form.
                    on_success_route: lka_route-home
                    # Used by ProtectedPageController to redirect a non valid user.
                    # Used by LogoutController to redirect a valid user after a disconnect.
                    login_route: lka_route-login
                access_denied:
                    access_denied_route: lka_route-forbidden_page
                notifications:
                    # alert|toast
                    default_type: alert
#        setUserRowOwnershipManager:
#            manager:
#                instance: Ling\Light_Kit_Admin\UserRowOwnership\LightKitAdminUserRowOwnershipManager



kit_admin_vars:
    route_prefix: /admin
    theme: Ling.Light_Kit_Admin/zeroadmin





# --------------------------------------
# hooks
# --------------------------------------
$vars.methods_collection:
    -
        method: setVar
        args:
            key: kit_admin_vars
            value: ${kit_admin_vars}


$ajax_handler.methods_collection:
    -
        method: registerHandler
        args:
            id: Light_Kit_Admin
            handler:
                instance: Ling\Light_Kit_Admin\AjaxHandler\LightKitAdminAjaxHandler


$bmenu.methods_collection:
    -
        method: addMenuModifier
        args:
            modifier:
                instance: Ling\Light_Kit_Admin\Light_BMenu\MenuModifier\LightKitAdminBMenuModifier

$bullsheet.methods_collection:
    -
        method: registerBullsheeter
        args:
            identifier: Light_Kit_Admin.default
            bullsheeter:
                instance: Ling\Light_Kit_Admin\Bullsheet\LightKitAdminGeneralBullsheeter





#$controller_hub.methods_collection:
#    -
#        method: registerHandler
#        args:
#            plugin: Light_Kit_Admin
#            handler:
#                instance: Ling\Light_Kit_Admin\ControllerHub\LightKitAdminControllerHubHandler
#                methods:
#                    setContainer:
#                        container: @container()




$kit.methods_collection:
    -
        method: addPageConfigurationTransformer
        args:
            -
                instance: Ling\Light_Kit_Admin\ConfigurationTransformer\LightKitAdminConfigurationTransformer


$realist.methods_collection:
    -
        method: registerListRenderer
        args:
            identifier: Ling.Light_Kit_Admin
            renderer:
                instance: Ling\Light_Kit_Admin\Realist\Rendering\LightKitAdminRealistListRenderer
    -
        method: registerListItemRenderer
        args:
            identifier: Ling.Light_Kit_Admin
            renderer:
                instance: Ling\Light_Kit_Admin\Realist\Rendering\LightKitAdminRealistListItemRenderer





# --------------------------------------
# vars
# --------------------------------------
$user_database_vars.bullsheeter_avatar_img_dir: ${app_dir}/www/libs/universe/Ling/Light_Kit_Admin/img/avatars2








```



History Log
=============

- 0.13.6 -- 2021-07-30

    - checkpoint commit 

- 0.13.5 -- 2021-07-01

    - update api to work with Ling.Light_Kit_Editor:0.3.0 
    - update api, now use Light_JimToolbox instead of our own implementation 
  
- 0.13.4 -- 2021-06-25

    - updated routes, add galaxy prefix 
  
- 0.13.3 -- 2021-06-18

    - fix service->getDuelistEngine typo (old lke path) 
    - update kit pages, using $root variable 
  
- 0.13.2 -- 2021-06-18

    - now uses the Light_Kit_Editor page renderer instead of the one from Light_Kit 
  
- 0.13.1 -- 2021-06-18

    - fix old code still using old light kit editor path 
  
- 0.13.0 -- 2021-06-18

    - update light kit editor path, update pages document 
  
- 0.12.48 -- 2021-06-17

    - add LightKitAdminBasePlanetInstaller->registerOpenMicroPermissionsByProfile method
  
- 0.12.47 -- 2021-06-17

    - switch to micro-permission open registration system
  
- 0.12.46 -- 2021-06-17

    - update light-kit-admin-environment.js, alcpCall now forwards options
    - update LightKitAdminBasePlanetInstaller, add micro-permission handling
  
- 0.12.45 -- 2021-06-03

    - adapt api to work with Light_PlanetInstaller:2.0.4
    - fix LightKitAdminBasePlanetInstaller->undoInit3 removing source planet permissions instead of the real planet permissions
  
- 0.12.44 -- 2021-06-03

    - fix functional typo, namespace of LightRealformConfigurationFileRegistrationHelper called from LightKitAdminBasePlanetInstaller->init2
  
- 0.12.43 -- 2021-06-03

    - update LightKitAdminBasePlanetInstaller->init2, now handles realform registration process automatically
  
- 0.12.42 -- 2021-06-01

    - update LightKitAdminBasePlanetInstaller->init2, now handles realist request declarations automatically
    - update LightKitAdminBasePlanetInstaller->init3, now registers the permissions of the lka planet, not the source planet
    - removed dependency to Light_PluginInstaller
  
- 0.12.41 -- 2021-05-31

    - Removing trailing plus in lpi-deps file (to work with Light_PlanetInstaller:2.0.0 api

- 0.12.40 -- 2021-05-31

    - update api to work with Light_PlanetInstaller 2.0.0
  
- 0.12.39 -- 2021-05-11

    - Update deps (by CommitWizard).

- 0.12.38 -- 2021-05-11

    - Update dependencies to Ling.Light_EasyRoute (pushed by SubscribersUtil)

- 0.12.37 -- 2021-05-03

    - Update dependencies to Ling.Light_Events (pushed by SubscribersUtil)

- 0.12.36 -- 2021-05-03

    - Update dependencies to Ling.Light_Events (pushed by SubscribersUtil)

- 0.12.35 -- 2021-05-02

    - add jim toolbox system
  
- 0.12.34 -- 2021-04-09

    - add acpHep dependency
    - checkpoint commit
  
- 0.12.33 -- 2021-03-23

    - adapt api to Ling.Light_Realist:2.0.15
  
- 0.12.32 -- 2021-03-22

    - fix some events not namespaced correctly
  
- 0.12.31 -- 2021-03-22

    - adapt api to work with Ling.Light_Events:1.10.0
  
- 0.12.30 -- 2021-03-19

    - fix open events now in the events directory
  
- 0.12.29 -- 2021-03-18

    - switch to Ling.Light_Events' open registration system (second try)
  
- 0.12.28 -- 2021-03-18

    - switch to Ling.Light_Events' open registration system
  
- 0.12.27 -- 2021-03-18

    - add LightKitAdminBasePlanetInstaller class
  
- 0.12.26 -- 2021-03-15

    - update planet to adapt Ling.Light:0.70.0

- 0.12.25 -- 2021-03-09

    - update api to adapt new Ling.Light_Mailer changes
    - rename template dir to include galaxy name
  
- 0.12.24 -- 2021-03-05

    - update README.md, add install alternative

- 0.12.23 -- 2021-03-01

    - update service conf, we don't set the user_database password protector anymore 
  
- 0.12.22 -- 2021-02-26

    - fix undeclared dependency to Light_Kit_BootstrapWidgetLibrary 
  
- 0.12.21 -- 2021-02-26

    - update conf, now use "/admin" prefix by default for all urls
  
- 0.12.20 -- 2021-02-25

    - now provide some public variables via Light_Vars
  
- 0.12.19 -- 2021-02-25

    - fix LightKitAdminController not stating its dependency to html_page_copilot service
  
- 0.12.18 -- 2021-02-25

    - fix assets/map removed
  
- 0.12.17 -- 2021-02-23

    - Update dependencies (pushed by SubscribersUtil)

- 0.12.16 -- 2021-02-23

    - Update dependencies (pushed by SubscribersUtil)

- 0.12.15 -- 2021-02-23

    - Update dependencies (pushed by SubscribersUtil)

- 0.12.14 -- 2021-02-23

    - fix typo in LightKitAdminPlanetInstaller's namespace
  
- 0.12.13 -- 2021-02-23

    - switch to Light_EasyRoute open registration system

- 0.12.12 -- 2021-02-22

    - clean assets/map dir

- 0.12.11 -- 2021-02-22

    - adapt to new light universe assets organization

- 0.12.10 -- 2021-02-19

    - upgrade dependencies

- 0.12.9 -- 2021-02-11

    - update api, plugin installer now extends LightUserDatabaseBasePluginInstaller

- 0.12.8 -- 2021-01-29

    - fix LightKitAdminBasePortPluginInstallerWithDatabase->isInstalled expecting permission tables to exist

- 0.12.7 -- 2021-01-29

    - add LightKitAdminBasePortPluginInstallerWithDatabase class

- 0.12.6 -- 2021-01-28

    - adapt to work with new PluginInstaller api

- 0.12.5 -- 2020-12-08

    - Fix lpi-deps not using natsort.

- 0.12.4 -- 2020-12-04

    - Add lpi-deps.byml file

- 0.12.3 -- 2020-12-01

    - update login form, now accepts remember me
    - update api to accommodate latest ControllerHub api

- 0.12.2 -- 2020-11-27

    - update to accommodate latest Light_Kit api

- 0.12.1 -- 2020-11-23

    - checkpoint commit

- 0.12.0 -- 2020-08-21

    - acknowledge micro-permission3

- 0.11.0 -- 2020-08-07

    - add LightKitAdminStandardServicePlugin class

- 0.10.0 -- 2020-08-07

    - add LightKitAdminService->lateRegistration method

- 0.9.0 -- 2020-08-07

    - checkpoint commit

- 0.8.0 -- 2020-08-04

    - checkpoint commit

- 0.7.0 -- 2020-07-07

    - checkpoint commit

- 0.6.0 -- 2020-06-23

    - checkpoint commit

- 0.5.0 -- 2020-06-04

    - checkpoint commit

- 0.4.1 -- 2019-12-17

    - fix functional typo in service configuration

- 0.4.0 -- 2019-12-17

    - update plugin to accommodate Light 0.50 new initialization system

- 0.3.0 -- 2019-12-06

    - checkpoint commit

- 0.2.0 -- 2019-11-05

    - checkpoint commit

- 0.1.0 -- 2019-10-25

    - initial commit