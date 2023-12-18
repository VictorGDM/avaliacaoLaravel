<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        
        return view('users.edit', compact('user','roles'));
    }

  
    public function update(Request $request, string $id)
    {
        User::find($id)->update($request->all());

        return redirect()->route('dashboard');
    }

  
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return redirect()->route('dashboard');
    }
}
