<?php

namespace App\Http\Livewire;

use App\Helpers\FileUploadHelper;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class ProjectLivewire extends Component
{
    use WithFileUploads;
    use Actions;

    public $projectId;
    public $project;
    public $name;
    public $url;
    public $img;
    public $imgPath;

    protected $listeners = ['RemoveProject' => '$refresh'];

    protected $rules = [
        'name' => 'required|string',
        'url' => 'required|url',
        'img' => 'required|file'
    ];

    public function render()
    {
        return view('livewire.project-livewire');
    }

    public function save(?int $id = null)
    {
        if (!$id) {
            $this->project = new Project();
        } else {
            $this->project = Project::find($id);
            $this->rules['img'] = 'nullable|file';
        }

        $this->validate();

        if ($this->img) {
            $this->project->file_id = FileUploadHelper::save($this->img);
        }
        
        $this->project->name = $this->name;
        $this->project->url = $this->url;
        $this->project->save();

        $this->notification()->success(
            'Projeto salvo',
            'O projetp ' . $this->name . ' foi salvo com sucesso!'
        );

        $this->reset();
    }

    public function edit(int $id)
    {
        $this->project = Project::find($id);
        $this->projectId = $id;
        $this->name = $this->project->name;
        $this->url = $this->project->url;
        $this->imgPath = $this->project->file->path;
    }


    public function getProjectsProperty()
    {
        return Project::all();
    }
}
