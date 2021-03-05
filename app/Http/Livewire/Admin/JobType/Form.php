<?php

namespace App\Http\Livewire\Admin\JobType;

use Livewire\Component;
use App\Models\JobType;

class Form extends Component
{
    public $jobtypeid;
    public $name;
    public $parent_id;
    public $duration;
    public $message_type;
    public $message;

    public $updateMode = false;

    protected $listeners = ['editJobType' => 'edit'];

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
            'name' => 'required|string|max:100',
            'parent_id' => 'nullable|exists:job_types,id',
            'duration' => 'nullable|string',
        ]);
        try {
            $jobtype = new JobType;
            $jobtype->name = $this->name;
            $jobtype->jobtype_id = $this->parent_id;
            $jobtype->duration =  $this->duration;
            $jobtype->save();
            $this->emit('updateJobTypeTable');
            $this->resetForm();
            // notify()->success('Job type saved successfully');
            session()->flash('success', 'Job type saved successfully');
        } catch (\Exception $e) {
            // notify()->error('Job type saved successfully');
            session()->flash('error', 'Something went wrong! please try later');
        }
    }

    public function resetForm()
    {
        $this->name = '';
        $this->parent_id = '';
        $this->duration = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->name = '';
        $this->parent_id = '';
        $this->jobtypeid = '';
        $this->duration = '';
    }

    public function edit($id)
    {

        $jobtype = JobType::find($id);
        if (!$jobtype) {
            // notify()->error('');
            session()->flash('error', 'Jobtype not found');
        } else {
            $this->updateMode = true;
            $this->jobtypeid = $jobtype->id;
            $this->name = $jobtype->name;
            $this->parent_id = $jobtype->jobtype_id;
        }
    }
    public function update()
    {
        $this->validate(
            [
                'name' => 'required',
                'parent_id' => 'nullable|exists:job_types,id'
            ],
            [
                'name.required' => 'Name is required',
            ]
        );
        if ($this->jobtypeid) {
            $jobtype = JobType::find($this->jobtypeid);
            if (!$jobtype) {
                session()->flash('error', 'Job Type not found');
            } else {
                $jobtype->name = $this->name;
                if ($this->parent_id)
                    if ($this->jobtypeid != $this->parent_id)
                        $jobtype->jobtype_id = $this->parent_id;
                    else
                        $jobtype->jobtype_id = null;
                else
                    $jobtype->jobtype_id = null;
                $jobtype->duration = $this->duration;
                $jobtype->save();
                $this->emit('updateJobTypeTable');
                session()->flash('success', 'Job Type updated successfully');

                // notify()->success('Job Type updated successfully');
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.job-type.form', [
            'jobtypeid' => $this->jobtypeid,
            'jobtypes' => JobType::whereNull('jobtype_id')->get()
        ]);
    }
}
