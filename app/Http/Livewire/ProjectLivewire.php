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
    public $order;
    public $lastOrder;

    protected $listeners = ['RemoveProject' => '$refresh'];

    protected $rules = [
        'name' => 'required|string',
        'url' => 'required|url',
        'img' => 'required|file'
    ];

    public function render()
    {
        $this->lastOrder = Project::orderBy('order')->get()?->last()?->order ?? 0;
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

        if(!$this->order){
            $lastOrder = $this->lastOrder;
            $this->order = !$lastOrder ? 1 : $lastOrder +1;
        }
        
        $this->project->name = $this->name;
        $this->project->url = $this->url;
        $this->project->order = $this->order;
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
        $this->order = $this->project->order;
        $this->imgPath = $this->project->file->path;
    }

    public function upOrder(int $order)
    {
        $upHard = Project::where('order', $order)->first();
        $downHard = Project::where('order', $order -1)->first();
        $upHard->order = $order -1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }

    public function downOrder(int $order)
    {
        $upHard = Project::where('order', $order)->first();
        $downHard = Project::where('order', $order +1)->first();
        $upHard->order = $order +1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }


    public function getProjectsProperty()
    {
        return Project::with('file')->orderBy('order')->get();
    }
}
