<?php

namespace App\Controllers;

use PROJECT\View\View;

class CategoriesController
{
    public function world($year, $month)
    {
        return View::makeView('categories.world');
    }

}