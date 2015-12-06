<?php
namespace LegendsRising\Http\Controllers;

use LegendsRising\Models\User;

class ProfileController extends Controller
{
    public function show($id)
    {
        return User::find($id);
    }
}