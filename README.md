# Решение тестовых заданий для volga line
## Задание 1 
Напишите запрос, возвращающий имя и число указанных телефонных номеров девушек в возрасте от
18 до 22 лет.
[Ответ](./task-1-sql/query.sql)

## Задание 2
Имеется строка:
https://www.somehost.com/test/index.html?param1=4&amp;param2=3&amp;param3=2&amp;param4=1&amp;param5=3
Напишите функцию, которая:
1. удалит параметры со значением “3”;
2. отсортирует параметры по значению;
3. добавит параметр url со значением из переданной ссылки без параметров (в примере:
/test/index.html);
4. сформирует и вернёт валидный URL на корень указанного в ссылке хоста.
В указанном примере функцией должно быть возвращено:
https://www.somehost.com/?param4=1&amp;param3=2&amp;param1=4&amp;url=%2Ftest%2Findex.html

[Ответ](./task-2-parsing-url/transformUrl.php)

## Задание 3
Напишите код в парадигме ООП, соответствующий следующей структуре.
*Сущности*: Пользователь, Статья.
*Связи*: Один пользователь может написать несколько статей. У каждой статьи может быть только один
пользователь-автор.
*Функциональность*:
- возможность для пользователя создать новую статью;
- возможность получить автора статьи;
- возможность получить все статьи конкретного пользователя;
- возможность сменить автора статьи.
Если вы применили какие-либо паттерны при написании, укажите какие и с какой целью.
Код, реализующий конкретную функциональность, не требуется, только общая структура классов и
методов.
Код должен быть прокомментирован в стиле PHPDoc.

[Ответ](./task-3-OOP/)

## Задание 4
Проведите рефакторинг, исправьте баги и продокументируйте в стиле PHPDoc код

[Ответ](./task-4-refactoring)

# Ответы на вопросы
## Занимались ли вы разработкой автоматизированных функциональных тестов? 
- Да с использованием PHPUnit

## Книги, ресурсы, которые вы могли бы порекомендовать:
- Роберт Мартин "Объектно-ориентированное программирование на C#"
- Мартин Фаулер "Принципы и паттерны разработки корпоративных приложений"
- Образовательный портал https://otus.ru
- Все ИТ новости https://habr.com