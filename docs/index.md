---
layout : default
slug: /index
order : 1
---


<!-- 
{%- assign chapitres = site.pages | sort: "order"  -%}

{% for chapitre in chapitres %}
- [{{ chapitre.name }}]({{site.baseurl}}/{{ chapitre.url }})
{% endfor %}   -->



# back-end



## Commande utilisées

- run migration 

```shell
    php artisan migration
```

- run seeders 

```shell
    php artisan db:seed
```


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


# creation-app


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


# front-end 



## commande utilisées



- create Comment controller 

```shell
    php artisan make:controller Comment/CommentController
```




# jeux-test



## Commande utilisées

- create Seeding Comment & Page

```shell
    php artisan make:seeder Comment/CommentSeeder
    php artisan make:seeder Page/PageSeeder
```




# unit-test


## Commande utilisées


- create test 

```shell
    php artisan make:test Comment/CommentRepositoryTest
```

- run test 

```shell
    php artisan test
```




# rapport


## commande utilisées


