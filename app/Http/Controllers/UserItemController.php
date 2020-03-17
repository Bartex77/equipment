<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ChestModel;

class UserItemController extends Controller
{
    public function attachUserChest(Request $request)
    {
        $user = UserModel::find($request->get('user_id'));

        if ($user) {
            $user->chests()->attach($request->get('chest_id'));
        }

        throw new \InvalidArgumentException('No such user.');
    }
}
