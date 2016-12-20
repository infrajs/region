# Определение региона пользователя

Регион пользователя сохраняется в окружении [infrajs/env](https://github.com/infrajs/env)

Регион определяется по IP c помощью [infrajs/ip](https://github.com/infrajs/ip)

Поддерживается мультиязычность [infrajs/lang](https://github.com/infrajs/lang) небольшой словарь находится в папке i18n/

## Установка через composer
```
{
	"require":{
		"infrajs/region":"~1"
	}
}
```

## Использование
Для зависимых скриптов region нужно явно передавать в аргументах.
Есть интеграция с шаблонами [infrajs/template](https://github.com/infrajs/template)

```В шаблонах можно использовать {Region.get().city} ```

Регион представляется объектом с описанием.

```
{
	"city": "Тольятти",
	"region": "Самарская область",
	"region_code": "SAM",
	"country": "Россия",
	"country_code": "RUS"
}
```

В php при использовании Региона нужно обязательно явно передавать выбранный язык.

```php

$data = Region::get($lang);

```