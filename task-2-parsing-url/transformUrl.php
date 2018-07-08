<?php

/**
 * Функция, траснформирующая URL
 *
 * @param string $url
 * @return string
 */
function transformUrl($url)
{
    $excludeParamValues = [3];

    $urlArray = parse_url($url);
    $paramsArray = [];
    parse_str($urlArray['query'], $paramsArray);

    // Фильтруем параметры
    $filteredParamsArray = array_filter($paramsArray,
        function ($value) use ($excludeParamValues) {
            return !in_array($value, $excludeParamValues);
        });

    // Сортируем параметры по значению
    asort($filteredParamsArray);

    // Добавить параметр url
    $filteredParamsArray['url'] = $urlArray['path'];

    // Cкомпануем итоговый url

    return $urlArray['scheme'] . "://" . $urlArray['host'] . "/?" . http_build_query($filteredParamsArray);
}

echo transformUrl('https://www.somehost.com/test/index.html?param1=4&param2=3&param3=2&param4=1&param5=3');