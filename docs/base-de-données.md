# base-de-données



## MLD

- page(id, page_key, page_title, reference, Date de création, Date de modification)
- comment(id, comment, reference, Date de création, Date de modification, page_id)


## Commande utilisées


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

- run migration

```shell
    php artisan migrate
```