<?php

namespace App\Livewire\Projects;

use App\Livewire\Forms\ProjectForm;
use App\Models\Project;
use Livewire\Component;

class Edit extends Component
{
    public ProjectForm $form;

    public function mount(Project $project)
    {
        $this->form->setProjectModel($project);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('projects.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.project.edit');
    }
}
