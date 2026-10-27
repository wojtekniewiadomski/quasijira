<?php

namespace App\Livewire\Projects;

use App\Livewire\Forms\ProjectForm;
use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public ProjectForm $form;

    public function mount(Project $project)
    {
        $this->form->setProjectModel($project);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('projects.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.project.create');
    }
}
