<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Surya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. A non nostrum mollitia corrupti quas reprehenderit, aspernatur consequatur explicabo, eveniet accusantium suscipit ea nihil labore harum neque nesciunt eligendi, tenetur quo culpa autem? Fugit dolores aliquam praesentium nesciunt. Rerum dignissimos ad distinctio repellat minima veniam repellendus ipsum adipisci nihil illum corrupti consectetur saepe optio, eveniet veritatis molestiae! Sequi velit asperiores vero esse sed dignissimos, minus blanditiis at quod deleniti maiores, temporibus, optio soluta ab dolores! Quibusdam facilis magni ad voluptatem deserunt."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dodi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit hic laborum, rem optio laboriosam, quisquam minus similique maiores debitis libero et quis est esse ipsum numquam commodi dolores? Repudiandae animi voluptas aliquid iure provident pariatur quos distinctio optio atque facilis alias nam fuga ex amet omnis eaque minima, minus ducimus itaque quis? Possimus hic ipsam, sunt cum ducimus, nihil id aut eius modi quibusdam libero distinctio. Itaque velit incidunt adipisci minima exercitationem sapiente magni ipsum qui possimus. Tempore adipisci nisi iusto aspernatur animi quasi qui doloribus! Libero, placeat fuga! Vitae, temporibus officiis quidem sint odit nisi nobis eum quo dolorem."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
