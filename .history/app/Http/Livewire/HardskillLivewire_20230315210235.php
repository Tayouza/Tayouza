<?php

namespace App\Http\Livewire;

use App\Models\File;
use App\Models\Hardskill;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class HardskillLivewire extends Component
{
    use WithFileUploads;

    public $name;
    public $level = 1;
    public $icon;
    public $hardskill;

    protected $rules = [
        'name'  => 'required|alpha:ascii',
        'level' => 'required|integer|min:1|max:8',
        'icon'  => 'required|image'
    ];

    public function mount(int $id = null)
    {
        if (!$id) {
            $this->hardskill = new Hardskill();
        } else {
            $this->hardskill = Hardskill::find($id);
        }
    }

    public function render()
    {
        return view('livewire.hardskill-livewire');
    }

    public function save()
    {
        $this->validate();
        
        $extension = $this->icon->getClientOriginalExtension();
        $hashName = Str::uuid($this->icon->getClientOriginalName());
        $this->icon->storeAs('public/icons', $hashName.'.'.$extension);

        $file = File::create([
            'original_name' => $this->icon->getClientOriginalName(),
            'hash_name' => $hashName,
            'extension' => $extension,
            'path' => 'icons/' . $hashName.'.'.$extension,
        ]);

        $this->hardskill->name = $this->name;
        $this->hardskill->level = $this->level;
        $this->hardskill->file_id = $file->id;
        $this->hardskill->save();
    }

    public function getHardskillsProperty()
    {
        return Hardskill::all();
    }
}
