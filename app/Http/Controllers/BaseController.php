<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public static function createBaseInformations()
    {
        $data = [];
        $data['locales'] = config('base.locales');
        $data['user'] = UserController::getCurrentUserData();
        return $data;
    }

    public static function normalizePath($path)
    {
        if (stripos($path, '/public/') === false) {
            $path1 = substr_replace($path, '/public', strlen(url('/')), 0);
        } else {
            $path1 = str_replace('/public/', '/', $path);
        }
        return $path1;

    }

    //
}
