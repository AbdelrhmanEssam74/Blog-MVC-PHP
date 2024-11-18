<?php

namespace App\Controllers;

use PROJECT\View\View;

class UserController
{
    public function profile($id = null): null
    {
        return View::makeView('profile');
    }
}