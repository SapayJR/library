<?php

namespace App\Repositories\Admin;

use App\Models\User;

class UserRepository
{
    public function getUsers() {
        return User::orderBy('created_at', 'DESC')->get();
    }

}
