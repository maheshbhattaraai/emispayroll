<?php

namespace App\Http\Livewire\Admin\JobType;

use App\Models\JobType;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $sortField;
    public $sortAsc = true;
    public $search = '';

    public function mount()
    {
        $this->sortField = 'id';
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    protected $listeners = ['updateJobTypeTable' => '$refresh', 'deleteJobType'];


    public function deleteJobType($id)
    {
        $jobtype  = JobType::find($id);
        if ($jobtype) {
            $jobtype->delete();
        }
        notify()->success('Job Type Deleted Successfully');
    }
    public function render()
    {
        return view('livewire.admin.job-type.listing', [
            'jobtypes' => JobType::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
