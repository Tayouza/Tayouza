<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use Livewire\Component;
use WireUi\Traits\Actions;

class SoftskillLivewire extends Component
{
    use Actions;
    
    public $name = '';
    public $softskill;
    public $softskillId;

    protected $listners = ['RemoveSoft' => '$refresh'];

    protected $rules = [
        'name'  => 'required|string',
    ];

    public function render()
    {
        return view('livewire.softskill-livewire');
    }

    public function save(?int $id = null)
    {
        $this->validate();

        if(!$id){
            $this->softskill = new Softskill();
        }else{
            $this->softskill = Softskill::find($id);
        }

        $this->softskill->name = $this->name;
        $this->softskill->save();

        $this->notification()->success(
            'Softskill salva',
            'A skill ' . $this->name . ' foi salva com sucesso!'
        );

        $this->reset();
    }

    public function edit(int $id){
        $this->softskill = Softskill::find($id);
        $this->softskillId = $id;
        $this->name = $this->softskill->name;
    }

    public function remove(int $id){
        $this->softskill = Softskill::find($id);
        $this->softskill->delete();
    }

    public function getSoftskillsProperty()
    {
        return Softskill::all();
    }
}
