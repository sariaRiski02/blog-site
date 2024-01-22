<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quia omnis pariatur consequatur, praesentium autem similique sequi est architecto voluptatibus laborum exercitationem deleniti minima ut. Vel cupiditate quod exercitationem quae!
            Inventore ducimus iste et eaque eius nesciunt adipisci repudiandae laborum? Corporis, nam maiores nesciunt fugiat aspernatur ex provident omnis atque facilis excepturi quis? Tempore ipsum corporis atque aperiam at expedita!
            Tenetur aut recusandae quidem iste. Quae unde optio beatae saepe vel sit, quas fuga accusantium quibusdam recusandae ipsum temporibus dicta est nobis architecto! Corrupti dignissimos eos est possimus illum vel?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quia omnis pariatur consequatur, praesentium autem similique sequi est architecto voluptatibus laborum exercitationem deleniti minima ut. Vel cupiditate quod exercitationem quae!
            Inventore ducimus iste et eaque eius nesciunt adipisci repudiandae laborum? Corporis, nam maiores nesciunt fugiat aspernatur ex provident omnis atque facilis excepturi quis? Tempore ipsum corporis atque aperiam at."
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $result = static::all();
        return $result->firstWhere("slug", $slug);
    }
}
