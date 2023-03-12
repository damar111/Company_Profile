<?php

use App\Models\Posts;

class MainController
{
    public static function index()
    {
        $posts = QB::table('posts')->get();
        include(PATH_VIEW . "pages/index.php");
    }

    public static function show_article()
    {
        $posts = QB::table('posts')->get();
        include(PATH_VIEW . "pages/article.php");
    }

    public static function dashboard()
    {
        $posts = QB::table('posts')->get();
        include(PATH_VIEW . "article/dashboard.php");
    }

    public static function table()
    {
        $posts = QB::table('posts')->get();
        include(PATH_VIEW . "article/table.php");
    }

    public static function account()
    {
        $posts = QB::table('users1')->get();
        include(PATH_VIEW . "article/account.php");
    }

    public static function edit_pw()
    {
        $posts = QB::table('users1')->get();
        include(PATH_VIEW . "article/edit_account.php");
    }

    public static function delete_account()
    {
        include(PATH_VIEW . "query/delete_account.php");
    }

    public static function create()
    {
        include(PATH_VIEW . "article/create_article.php");
    }

    public static function edit()
    {
        $posts = QB::table('posts')->get();
        include(PATH_VIEW . "article/edit_article.php");
    }

    public static function delete()
    {
        include(PATH_VIEW . "query/delete.php");
    }

    public static function login()
    {
        include(PATH_VIEW . "login/index.php");
    }

    public static function logout()
    {
        include(PATH_VIEW . "login/logout.php");
    }

    public static function regist()
    {
        include(PATH_VIEW . "login/register.php");
    }
}
