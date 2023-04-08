# OpenCart PhpStorm autocomplete

## Описание
Данный набор абстрактных классов представляет из себя основную структуру библиотек и моделей OpenCart3.
После подключения к проекту PhpStorm будет доступен удобный просмотр справки по методам, классам и автодополнение кода.

## Установка
В меню PhpStorm выбрать **File** -> **Settings...** -> **PHP**.
На закладке **Include Path** добавляем путь к скачанной папке **opencart-phpstorm-autocomplete/OpenCart3**
После индексации автодополнение будет доступно в текущем открытом проекте.

## Подсказки для штатных моделей OpenCart
К сожалению, в OpenCart не предусмотрены отдельные именные пространства для разделов **admin** и **catalog**.
Поэтому для корректной работы используемые модели надо будет прописать через **property** PHPDoc.

### Пример для раздела **admin**
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

### Пример для раздела **admin**
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

### Пример для для библиотеки проекта
Если у вас впроекте есть своя библиотека,то её можно подключить так:
```php
/**
 * @property Ownlib $ownlib
 */
class ControllerExtensionModuleMyMod extends Controller {
    ...
}
```

## Лицензия

[GNU General Public License version 3 (GPLv3)](https://github.com/mpn2005/opencart-phpstorm-autocomplete/blob/main/LICENSE)

