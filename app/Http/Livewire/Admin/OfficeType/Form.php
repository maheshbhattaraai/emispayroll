<?php

namespace App\Http\Livewire\Admin\OfficeType;

use App\Models\OfficeType;
use Livewire\Component;

class Form extends Component
{
    public $officetypeid;
    public $office_type;


    public $updateMode = false;

    protected $listeners = ['editOfficeType' => 'edit'];

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        session()->forget('success');
        session()->forget('error');
        // session()->flash('country', $request->country);
        // session()->flash('success', '');
        // session()->flash('error', '');
    }

    public function save()
    {

        $this->validate([
            'office_type' => 'required|string|max:100',
        ]);
        try {
            $officetype = new OfficeType;
            $officetype->office_type = $this->office_type;

            $officetype->save();
            $this->emit('updateOfficeTypeTable');
            $this->resetForm();
            // notify()->success('Job type saved successfully');
            session()->flash('success', 'Office type saved successfully');
        } catch (\Exception $e) {
            // notify()->error('Job type saved successfully');
            session()->flash('error', 'Something went wrong! please try later');
        }
    }

    public function resetForm()
    {
        $this->office_type = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->office_type = '';
        $this->officetypeid = '';
    }

    public function edit($id)
    {

        $officetype = OfficeType::find($id);
        if (!$officetype) {
            // notify()->error('');
            session()->flash('error', 'Offiec Type not found');
        } else {
            $this->updateMode = true;
            $this->officetypeid = $officetype->id;
            $this->office_type = $officetype->office_type;
        }
    }
    public function update()
    {
        $this->validate(
            [
                'office_type' => 'required',
            ],
            [
                'office_type.required' => 'Office Type is required',
            ]
        );
        if ($this->officetypeid) {
            $offiectype = OfficeType::find($this->officetypeid);
            if (!$offiectype) {
                session()->flash('error', 'Job Type not found');
            } else {
                $offiectype->office_type = $this->office_type;

                $offiectype->save();
                $this->emit('updateOfficeTypeTable');
                session()->flash('success', 'Office Type updated successfully');

                // notify()->success('Job Type updated successfully');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.office-type.form');
    }
}
