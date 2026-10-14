<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::latest()
            ->when($request->search, fn($q) => $q->where('name', 'like', "%{$request->search}%")->orWhere('email', 'like', "%{$request->search}%"))
            ->paginate(10);

        // TODO SPATIE: $roles = Role::all(); و بفرست به ویو برای نمایش نقش
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        // TODO SPATIE: $roles = Role::all();
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ]);

        // TODO SPATIE: $user->assignRole($request->roles);

        return redirect()->route('admin.users.index')->with('success', 'کاربر ساخته شد.');
    }

    public function edit(User $user)
    {
        // TODO SPATIE: $roles = Role::all();
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        // TODO SPATIE: $user->syncRoles($request->roles);

        return redirect()->route('admin.users')->with('success', 'کاربر ویرایش شد.');
    }

    public function destroy(User $user)
    {
        // TODO SPATIE: $user->removeRole(...); اگر لازم بود قبل از حذف
        $user->delete();
        return back()->with('success', 'کاربر حذف شد.');
    }
}
