<?php

namespace App\Livewire\ProjectTasks;

use App\Livewire\Forms\ProjectForm;
use App\Models\Project;
use App\Models\ProjectTask;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public ProjectForm $form;

    public function mount(Project $project)
    {
        $this->form->setProjectModel($project);
    }

    public function render(): View
    {
        $projectTasks = $this->form->projectModel->id
            ? ProjectTask::where('project_id', '=', $this->form->projectModel->id)->paginate()
            : ProjectTask::paginate();

        return view('livewire.project-task.index', compact('projectTasks'), ['project' => $this->form->projectModel])
            ->with('i', $this->getPage() * $projectTasks->perPage());
    }

    public function delete(ProjectTask $projectTask)
    {
        $projectTask->delete();

        return $this->redirectRoute('project-tasks.index', ['project' => $this->form->projectModel->id], navigate: true);
    }
}
