<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index')->name('project.index');

Route::view('/project/{project}', 'projects.show')->name('project.show');
