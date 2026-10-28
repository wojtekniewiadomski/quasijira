<?php

namespace App\Livewire\ProjectTasks;

use Livewire\Attributes\Url;
use App\Livewire\Forms\ProjectTaskForm;
use App\Models\ProjectTask;
use Livewire\Component;

class Create extends Component
{
    #[Url]
    public ?int $project = null;

    public ProjectTaskForm $form;

    public function mount(ProjectTask $projectTask)
    {
        $this->project ??= $projectTask->project_id;
        $this->form->setProjectTaskModel($projectTask);
    }

    public function save()
    {
        $this->project = (int)$this->form->project_id;
        $this->form->store();
        return $this->redirectRoute('project-tasks.index', ['project' => $this->project], navigate: true);
    }

    public function render()
    {
        return view('livewire.project-task.create', ['project' => $this->project]);
    }
}
