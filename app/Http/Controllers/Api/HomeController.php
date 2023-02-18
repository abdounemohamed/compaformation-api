<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __invoke(): array
    {
        return [
            'success' => true,
            'message' => "Welcome to my Api",
            'data' => [
                'version' => '1.0',
                'language' => app()->getLocale(),
            ]
        ];
    }
}
