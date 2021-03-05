<?php

namespace App\Http\Livewire\Admin\Service;

use Livewire\Component;
use App\Models\Service;

class Form extends Component
{
    public $serviceId;
    public $service;


    public $updateMode = false;

    protected $listeners = ['editService' => 'edit'];

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
            'service' => 'required|string|max:100',
        ]);
        try {
            $service = new Service();
            $service->service = $this->service;

            $service->save();
            $this->emit('updateServiceTable');
            $this->resetForm();
            // notify()->success('Job type saved successfully');
            session()->flash('success', 'Service saved successfully');
        } catch (\Exception $e) {
            // notify()->error('Job type saved successfully');
            session()->flash('error', 'Something went wrong! please try later');
        }
    }

    public function resetForm()
    {
        $this->service = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->service = '';
        $this->serviceId = '';
    }

    public function edit($id)
    {

        $service = Service::find($id);
        if (!$service) {
            // notify()->error('');
            session()->flash('error', 'Service not found');
        } else {
            $this->updateMode = true;
            $this->serviceId = $service->id;
            $this->service = $service->service;
        }
    }
    public function update()
    {
        $this->validate(
            [
                'service' => 'required',
            ],
            [
                'service.required' => 'Service is required',
            ]
        );
        if ($this->serviceId) {
            $service = Service::find($this->serviceId);
            if (!$service) {
                session()->flash('error', 'Service not found');
            } else {
                $service->service = $this->service;

                $service->save();
                $this->emit('updateServiceTable');
                session()->flash('success', 'Service updated successfully');

                // notify()->success('Job Type updated successfully');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.service.form', [
            'serviceId' => $this->serviceId,
        ]);
    }
}
