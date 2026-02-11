<?php

use Illuminate\Support\Facades\Route;


route :: get('register', function () {
    return view('index');
});

route::get('dshboard', function () {
    return view('dshboard');
});

route :: get('admin', function () {
    return view('admin_login');
});

route :: get('admin_dashboard', function () {
    return view('admin_dashboard');
});

route::get('add_quiz', function () {
    return view('add_quiz');
});

?>