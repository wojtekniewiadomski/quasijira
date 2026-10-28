<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $projectModel;
    
    public $name = '';
    public $status = '';
    public $description = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'status' => 'required',
            'description' => 'string',
        ];
    }

    public function setProjectModel(Project $projectModel): void
    {
        $this->projectModel = $projectModel;
        
        $this->name = $this->projectModel->name;
        $this->description = $this->projectModel->description;
        $this->status = $this->projectModel->status;
    }

    public function store(): void
    {
        $this->projectModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->projectModel->update($this->validate());

        $this->reset();
    }
}
