<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AvatarController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $path = $request->file('avatar')->store('public/avatars');
        $user->avatar = $path;
        $user->save();
        return response()->json($user);
    }

    public function getAvatar(Request $request)
    {
        $user = $request->user();
        return Storage::get($user->avatar);
    }

    public function getAvatars($user_id)
    {
        $user = User::findOrFail($user_id);
        return Storage::get($user->avatar);
    }
}
