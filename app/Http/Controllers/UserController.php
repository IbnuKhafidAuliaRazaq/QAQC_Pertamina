<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user/index', compact('users'));
    }
    public function show(User $user)
    {
        //
        return view('user.detail', compact('user'));
    }
    public function create(){
        return view('user.create');
    }
    public function edit(User $user)
    {
        //
        return view('user.edit', ['user' => $user]);
    }
    public function destroy(User $User)
    {
        //
        $User->delete();
        return redirect('user')->with('success', 'Berhasil menghapus data');
    }
    public function store(){
        $user = new User;
        $user->username = request('username');
        $user->fullname = request('fullname');
        $user->email = request('email');
        $user->position = request('position');
        $user->level = request('level');
        $password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user->password = $password;
        if(request('level') == 3){
            $user->kode = request('kode');
        }
        $user->save();
        return redirect('user')->with('success', 'Berhasil Menambah User');
    }
    
}
