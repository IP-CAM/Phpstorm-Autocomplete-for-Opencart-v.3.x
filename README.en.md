# OpenCart PhpStorm autocomplete

## Description
This set of abstract classes represents the basic structure of the OpenCart3 libraries and models. 
After including to the PhpStorm project, a convenient view of the help on methods, classes, and code completion will be available.

## Installation
In the PhpStorm menu, select **File** -> **Settings...** -> **PHP**. 
On the **Include Path** tab, add the path to the downloaded folder **opencart-phpstorm-autocomplete/OpenCart3**. 
After indexing, code completion will be available in the currently open project.

## Code completion for OpenCart built-in models
Unfortunately, OpenCart does not provide separate namespaces for the **admin** and **catalog** sections. 
Therefore, to correctly use the models, they must be specified via **property** PHPDoc.

### Example for the **admin** section
```php
/**
 * @property \Admin\ModelCatalogAttribute $model_catalog_attribute
 * @property \Admin\ModelCatalogCategory $model_catalog_category
 * @property \Admin\ModelSettingSetting $model_setting_setting
 * @property \Admin\ModelToolImage $model_tool_image
 */
class ControllerExtensionModuleMyMod extends Controller {
    ...
}
```

### Example for the **catalog** section
```php
/**
 * @property \Catalog\ModelCatalogAttribute $model_catalog_attribute
 * @property \Catalog\ModelCatalogCategory $model_catalog_category
 * @property \Catalog\ModelToolImage $model_tool_image
 */
class ControllerExtensionModuleMyMod extends Controller {
    ...
}
```
### Example for a project library. 
If you have your own library in the project, you can connect it like this:
```php
/**
 * @property Ownlib $ownlib
 */
class ControllerExtensionModuleMyMod extends Controller {
    ...
}
```

## License

[GNU General Public License version 3 (GPLv3)](https://github.com/mpn2005/opencart-phpstorm-autocomplete/blob/main/LICENSE)

