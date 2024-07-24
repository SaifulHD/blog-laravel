<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{

    public static function All()
    {
        return
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

            ];
    }

    public static function Find($slug)
    {
        // $post = Arr::first(static::All(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::All(), fn ($post) => $post['slug'] == $slug);
        //dd($post);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
