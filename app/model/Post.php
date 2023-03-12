<?php

namespace App\Models;


class Posts
{
    public static function showPosts()
    {
        $result = QB::table('posts')->get();
        return $result;
    }
}
