# laravel8-timeweb-demo - Демонстрационный проект для быстрого деплоя на Timeweb apps 

## Для локальной разработки

Прежде,чем запускать миграции `serve`, выполните команду (для создания пустой БД sqlite) в терминале:
```bash
touch ./database/database.sqlite
```

Затем выполните миграцию
```bash
php artisan migrate
```

Затем, выполните команду (дял заполнения таблиц `users` и `news`) тестовыми данными:
```bash
php artisan db:seed
```

Далее запускайте проект
```bash
php artisan serve
```