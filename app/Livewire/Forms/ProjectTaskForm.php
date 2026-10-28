<?php

namespace App\Livewire\Forms;

use App\Models\ProjectTask;
use Livewire\Form;

class ProjectTaskForm extends Form
{
    public ?ProjectTask $projectTaskModel;
    
    public $name = '';
    public $project_id = '';
    public $description = '';
    public $options = '';
    public $cancelled_at = '';
    public $finished_at = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'project_id' => 'required',
			'description' => 'string',
			'options' => 'string',
			'cancelled_at' => 'date_format:Y-m-d',
			'finished_at' => 'date_format:Y-m-d',
        ];
    }

    public function setProjectTaskModel(ProjectTask $projectTaskModel): void
    {
        $this->projectTaskModel = $projectTaskModel;
        
        $this->name = $this->projectTaskModel->name;
        $this->project_id = $this->projectTaskModel->project_id;
        $this->description = $this->projectTaskModel->description;
        $this->options = $this->projectTaskModel->options;
        $this->cancelled_at = substr($this->projectTaskModel->cancelled_at, 0, strpos($this->projectTaskModel->cancelled_at, ' '));
        $this->finished_at = substr($this->projectTaskModel->finished_at, 0, strpos($this->projectTaskModel->finished_at, ' '));
    }

    public function store(): void
    {
        $this->projectTaskModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->projectTaskModel->update($this->validate());

        $this->reset();
    }
}
