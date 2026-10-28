<?php
/**
 * Copyright ©Uniwizard All rights reserved.
 * See LICENSE_UNIWIZARD for license details.
 * @author: Uniwizard Wojciech Niewiadomski
 */

use App\Livewire\Projects;
use App\Livewire\ProjectTasks;

Route::get('/projects', Projects\Index::class)->name('projects.index');
Route::get('/projects/create', Projects\Create::class)->name('projects.create');
Route::get('/projects/show/{project}', Projects\Show::class)->name('projects.show');
Route::get('/projects/update/{project}', Projects\Edit::class)->name('projects.edit');

Route::get('/project-tasks', ProjectTasks\Index::class)->name('project-tasks.all');
Route::get('/project-tasks/{project}', ProjectTasks\Index::class)->name('project-tasks.index');
Route::get('/project-tasks/create/{project}', ProjectTasks\Create::class)->name('project-tasks.create');
Route::get('/project-tasks/show/{projectTask}', ProjectTasks\Show::class)->name('project-tasks.show');
Route::get('/project-tasks/update/{projectTask}', ProjectTasks\Edit::class)->name('project-tasks.edit');
