<?php

namespace App\Controllers;

use PROJECT\View\View;

class UserController
{
    public function profile($id = null): null
    {
// Retrieve the user ID from session if not provided
        if (!$id) {
            $id = app()->session->get('user_id');
        }
        // If no user ID is available, redirect to the home page
        if (!$id) {
            RedirectToView('/');
            return null;
        }
        // Fetch user data from the database
        $userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$id]);
        // If user data is not found, redirect to a 404 page or an error page
        if (!$userData) {
            RedirectToView('error/404');
            return null;
        }
        // Render the profile view with user data
        return View::makeView('main.profile', ['userData' => $userData]);
    }
}