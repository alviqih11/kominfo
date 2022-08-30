<?php

namespace App\Models;



class Post 
{
  private static $blog_posts = [
      [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Fadillah Alviqih",
        "body" => "  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit voluptates placeat cumque temporibus consectetur minus harum voluptatum, deleniti asperiores saepe eos molestias voluptatibus architecto fuga alias amet, inventore iste sunt?"
    ],

    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Budi",
        "body" => "  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit voluptates placeat cumque temporibus consectetur minus harum voluptatum, deleniti asperiores saepe eos molestias voluptatibus architecto fuga alias amet, inventore iste sunt?"
    ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts ->firstWhere('slug', $slug);
    }
}
