<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;

        return view('home', compact('notifications'));
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
