<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ihsan Saiful Hadi', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' =>
    [
        [
            'id' => '1',
            'slug' => 'judul-article-1',
            'title' => 'Judul article 1',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ],
        [
            'id' => '2',
            'slug' => 'judul-article-2',
            'title' => 'Judul article 2',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ],
        [
            'id' => '3',
            'slug' => 'judul-article-3',
            'title' => 'Judul article 3',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ]

    ]]);
});

Route::get('/post/{slug}', function ($slug) {
    $post = [
        [
            'id' => '1',
            'slug' => 'judul-article-1',
            'title' => 'Judul article 1',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ],
        [
            'id' => '2',
            'slug' => 'judul-article-2',
            'title' => 'Judul article 2',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ],
        [
            'id' => '3',
            'slug' => 'judul-article-3',
            'title' => 'Judul article 3',
            'author' => 'Ihsan Saiful Hadi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab perspiciatis nobis maiores reprehenderit illo
            nihil inventore aliquid voluptatibus unde, vel quod dignissimos voluptas ullam veritatis aperiam distinctio
            dolorem minus tempora.'
        ]

    ];

    $post = Arr::first($post, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
