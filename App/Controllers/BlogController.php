<?php

namespace App\Controllers;

use PROJECT\View\View;

class BlogController
{
    public function articles($categoryID, $postTile, $postID): void
    {
        $date = [
            "params" => [
                'postTitle' => $postTile,
                'categoryID' => $categoryID,
                'post_id' => $postID
            ]
        ];
        View::makeView('blog.articles', [], $date);
    }
}