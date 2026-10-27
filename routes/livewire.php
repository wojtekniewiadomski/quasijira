<?php
/**
 * Copyright ©Uniwizard All rights reserved.
 * See LICENSE_UNIWIZARD for license details.
 * @author: Uniwizard Wojciech Niewiadomski
 */

use App\Livewire\Projects;

Route::get('/projects', Projects\Index::class)->name('projects.index');
Route::get('/projects/create', Projects\Create::class)->name('projects.create');
Route::get('/projects/show/{project}', Projects\Show::class)->name('projects.show');
Route::get('/projects/update/{project}', Projects\Edit::class)->name('projects.edit');

