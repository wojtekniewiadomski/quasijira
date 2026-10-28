<?php

namespace App\Livewire\ProjectTasks;

use App\Livewire\Forms\ProjectTaskForm;
use App\Models\ProjectTask;
use Livewire\Component;

class Show extends Component
{
    public ProjectTaskForm $form;

    public function mount(ProjectTask $projectTask)
    {
        $this->form->setProjectTaskModel($projectTask);
    }

    public function render()
    {
        return view('livewire.project-task.show', ['projectTask' => $this->form->projectTaskModel]);
    }
}
