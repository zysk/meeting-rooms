<?php

namespace App\Http\Controllers;
use App\Models\User;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(User $users)
    {
        $users = User::orderBy('id', 'desc')
                        ->paginate(5);

        return Inertia::render('home/index', [
            'users' => $users
        ]);
    }
}
