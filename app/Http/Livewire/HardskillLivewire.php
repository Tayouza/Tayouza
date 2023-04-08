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
    public $order;
    public $icon;
    public $iconPath;
    public $hardskills;
    public $hardskill;
    public $hardskillId;
    public $lastOrder;

    protected $listeners = ['RemoveHard' => '$refresh'];

    protected $rules = [
        'name'  => 'required|alpha:ascii',
        'level' => 'required|integer|min:1|max:8',
        'icon'  => 'required|image'
    ];

    public function render()
    {
        $this->hardskills = Hardskill::with(['file'])->orderBy('order')->get();
        $this->lastOrder = $this->hardskills?->last()?->order ?? 0;
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

        if(!$this->order){
            $lastOrder = $this->lastOrder;
            $this->order = !$lastOrder ? 1 : $lastOrder +1;
        }

        $this->hardskill->name = $this->name;
        $this->hardskill->level = $this->level;
        $this->hardskill->order = $this->order;
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
        $this->order = $this->hardskill->order;
        $this->iconPath = $this->hardskill->file->path;
    }

    public function upOrder(int $order)
    {
        $upHard = Hardskill::where('order', $order)->first();
        $downHard = Hardskill::where('order', $order -1)->first();
        $upHard->order = $order -1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }

    public function downOrder(int $order)
    {
        $upHard = Hardskill::where('order', $order)->first();
        $downHard = Hardskill::where('order', $order +1)->first();
        $upHard->order = $order +1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }
    
}
