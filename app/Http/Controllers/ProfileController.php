<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $rules = [
            'nama' => 'required|max:255',
            'asalkampus' => 'required|max:255',
        ];
        $validatedData = $request->validate($rules);

        User::where('id', $request->id)->update($validatedData);

        return redirect('/profile')->with('success', 'User berhasil diperbarui!');
    }
}
