<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class UsersWebController extends Controller
{
    public function index()
    {
        $user = Test::all();
        $user->makeHidden(['password']);

        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'details' => 'nullable|array'
        ]);

        $user = Test::create([
            'username' => $validated['username'],
            'password' => $validated['password'],
            'details' => $validated['details'] ?? null
        ]);

        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $user = Test::where('username', $id)->first();

        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = Test::find($id);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'details' => 'nullable|array'
        ]);

        $user = Test::findOrFail($id);
        $user->update([
            'username' => $validated['username'],
            'password' => $validated['password'],
            'details' => $validated['details'] ?? null
        ]);

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        Test::destroy($id);

        return redirect()->route('user.index');
    }
}
