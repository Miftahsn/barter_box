<?php

namespace App\Helpers;

use Carbon\Carbon;
use App\Models\User;

class FormatHelper
{

    public static function formatResultAuth($user)
    {
        return [
            'user' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
            'tanggal_tambah' => Carbon::parse($user->created_at)->translatedFormat('d F Y'),
        ];
    }

    public static function resultUser($user_id)
    {
        $user = User::where('id', $user_id)
            ->get()
            ->map(function ($user) {
                return FormatHelper::formatResultAuth($user);
            });

            return $user;
    }
}
