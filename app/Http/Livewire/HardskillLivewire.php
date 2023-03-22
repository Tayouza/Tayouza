<?php

namespace App\Http\Livewire;

use App\Helpers\FileUploadHelper;
use App\Models\Hardskill;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class HardskillLivewire extends Component
{
    use WithFileUploads;
    use Actions;

    public $name;
    public $level = 1;
    public $icon;
    public $iconPath;
    public $hardskill;
    public $hardskillId;

    protected $listeners = ['RemoveHard' => '$refresh'];

    protected $rules = [
        'name'  => 'required|alpha:ascii',
        'level' => 'required|integer|min:1|max:8',
        'icon'  => 'required|image'
    ];

    public function render()
    {
        return view('livewire.hardskill-livewire');
    }

    public function save(?int $id = null)
    {
        if (!$id) {
            $this->hardskill = new Hardskill();
        } else {
            $this->hardskill = Hardskill::find($id);
            $this->rules['icon'] = 'nullable|image';
        }

        $this->validate();
        
        if($this->icon){
            $this->hardskill->file_id = FileUploadHelper::save($this->icon);
        }

        $this->hardskill->name = $this->name;
        $this->hardskill->level = $this->level;
        $this->hardskill->save();

        $this->notification()->success(
            'Hardskill salva',
            'A skill ' . $this->name . ' foi salva com sucesso!'
        );

        $this->reset();
    }

    public function edit(int $id)
    {
        $this->hardskill = Hardskill::find($id);
        $this->hardskillId = $id;
        $this->name = $this->hardskill->name;
        $this->level = $this->hardskill->level;
        $this->iconPath = $this->hardskill->file->path;
    }

    public function remove(int $id)
    {
        $this->hardskill = Hardskill::find($id);
        $this->hardskill->delete();
    }

    public function getHardskillsProperty()
    {
        return Hardskill::with('file')->get();
    }
}
