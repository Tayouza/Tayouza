<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use Livewire\Component;
use WireUi\Traits\Actions;

class SoftskillLivewire extends Component
{
    use Actions;

    public $name = '';

    public $order;

    public $softskills;

    public $softskill;

    public $softskillId;

    public $lastOrder;

    protected $listeners = ['RemoveSoft' => '$refresh'];

    protected $rules = [
        'name' => 'required|string',
    ];

    public function render()
    {
        $this->softskills = Softskill::orderBy('order')->get();
        $this->lastOrder = $this->softskills?->last()?->order ?? 0;

        return view('livewire.softskill-livewire');
    }

    public function save(?int $id = null)
    {
        $this->validate();

        if (! $id) {
            $this->softskill = new Softskill();
        } else {
            $this->softskill = Softskill::find($id);
        }

        if (! $this->order) {
            $lastOrder = $this->lastOrder;
            $this->order = ! $lastOrder ? 1 : $lastOrder + 1;
        }

        $this->softskill->name = $this->name;
        $this->softskill->order = $this->order;
        $this->softskill->save();

        $this->notification()->success(
            'Softskill salva',
            'A skill '.$this->name.' foi salva com sucesso!'
        );

        $this->reset();
        $this->emitSelf('$refresh');
    }

    public function edit(int $id)
    {
        $this->softskill = Softskill::find($id);
        $this->softskillId = $id;
        $this->name = $this->softskill->name;
        $this->order = $this->softskill->order;
    }

    public function upOrder(int $order)
    {
        $upHard = Softskill::where('order', $order)->first();
        $downHard = Softskill::where('order', $order - 1)->first();
        $upHard->order = $order - 1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }

    public function downOrder(int $order)
    {
        $upHard = Softskill::where('order', $order)->first();
        $downHard = Softskill::where('order', $order + 1)->first();
        $upHard->order = $order + 1;
        $downHard->order = $order;
        $upHard->save();
        $downHard->save();
    }
}
