<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $search = request('search', null);
        if (request()->has('search')) {
            $users = User::whereRaw("MATCH(search) AGAINST(? IN BOOLEAN MODE)", array($search))
                ->orWhere('search', 'like', "%{$search}%")
                ->paginate();
        } else {
            $users = User::paginate();
        }

        return view('users.index', compact('users', 'search'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->validated());
        $user->save();

        return redirect()->route('issues.create');
    }
}
