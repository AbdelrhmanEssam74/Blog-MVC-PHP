<?php

namespace App\Controllers;

use PROJECT\View\View;

class CategoriesController
{
    public function index(): null
    {
        return View::makeView('index');
    }
    public function world($year, $month): null
    {
        return View::makeView('categories.world');
    }
    public function technology($year, $month): null
    {
        return View::makeView('categories.technology');
    }
}