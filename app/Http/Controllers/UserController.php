<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
// use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' =>[
                'title' => 'Create New User',
                'method' => 'post',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ],
        ]);
    }
    public function store(UserRequest $request)
    {
        User::create ($request->validated());

        return redirect('/users');
    }

    public function show ($id)
    {
        $user = User::findOrFail($id);
        // abort_if(!user, 404);
        return view('users/show',[
        'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' =>[
                'title' => 'Edit User: '.$user->name,
                'method' => 'put',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
                ],
        ]);
    }

    public function update(UserRequest $request,User $user)
    {
            $user->update($request->validated());
    
            // User -> update($request->only('name', 'email', 'password'));
            return redirect('/users');
    }

    public function destroy($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
        // return to_route(route('users.index'));
    }




    // protected function requestValidated(): array
    // {
    //     return[
    //             'name' => ['required', 'min : 3', 'max : 255', 'string'],
    //             'email' => ['required', 'email'],
    //             'password' => ['required','min:8'],
    //     ];
    // }
}