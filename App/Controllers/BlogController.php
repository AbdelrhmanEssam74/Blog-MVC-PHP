<?php

namespace App\Controllers;

use PROJECT\View\View;

class BlogController
{
    public function articles($category, $postTile, $postID): void
    {
        $date = [
            "params" => [
                'postTitle' => 'Kate-Nash-says-OnlyFans-will-earn-more-than-tour',
                'category' => 'Culture',
                'post_id' => 'cwygdzn4dw4o'
            ]
        ];
        View::makeView('blog.articles', [], $date);
    }
}