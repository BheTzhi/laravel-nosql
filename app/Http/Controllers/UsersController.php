<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $user = Test::all();

        return response()->json($user, 201);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|min:8',
            'details' => 'nullable|array',
        ]);

        $user = Test::create([
            'username' => $validated['username'],
            'password' => $validated['password'],
            'details' => $validated['details'] ?? null
        ]);

        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = Test::find($id);

        return $user;
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:30',
            'password' => 'required|string|min:8',
            'details' => 'nullable|array',
        ]);

        $user = Test::findOrFail($id);
        $user->update([
            'username' => $validated['username'],
            'password' => $validated['password'],
            'details' => $validated['details'] ?? null
        ]);

        return response()->json($user, 201);
    }

    public function destroy($id)
    {
        $user = Test::destroy($id);

        return response()->json($user, 201);
    }
}
