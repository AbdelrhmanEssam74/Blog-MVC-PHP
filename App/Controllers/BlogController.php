<?php

namespace App\Controllers;

use PROJECT\View\View;

class BlogController
{
    public function articles($category, $postTile, $postID): void
    {
        $date = [
            "id" => $postID,
            "category" => $category,
            "post" => $postTile
        ];
        View::makeView('blog.articles', [], $date);
    }
}