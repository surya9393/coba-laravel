<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Suryaa",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, aliquam facere, laborum maxime velit incidunt temporibus molestiae dolorum libero maiores sint nesciunt, animi similique rem rerum? Molestiae quos doloribus fugiat!"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Adi",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, aliquam facere, laborum maxime velit incidunt temporibus molestiae dolorum libero maiores sint nesciunt, animi similique rem rerum? Molestiae quos doloribus fugiat!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
