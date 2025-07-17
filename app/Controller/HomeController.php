<?php

namespace HanchanDev\PhpNativeMvcTemplate\Controller;

use HanchanDev\PhpNativeMvcTemplate\App\View;

class HomeController {
    function index(): void {
        $model = [
            'title' => 'Home',
        ];

        View::render('Home/index', $model);
    }
}