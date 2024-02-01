
# commande utilisées


- install laravel app

```shell
    composer create-project laravel/laravel example-app
```

- install admin-lte via npm

```shell
    npm install admin-lte@^3.2 --save
```

- create model Comment & Page

```shell
    php artisan make:model Comment/Comment
    php artisan make:model Page/Page
```


- create table Comment & page

```shell
    php artisan make:migration create_comment_table
    php artisan make:migration create_page_table
```



- create Seeding Comment & Page

```shell
    php artisan make:seeder Comment/CommentSeeder
    php artisan make:seeder Page/PageSeeder
```
