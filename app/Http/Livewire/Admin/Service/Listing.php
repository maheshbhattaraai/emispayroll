<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
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

    protected $listeners = ['updateServiceTable' => '$refresh', 'deleteService'];


    public function deleteService($id)
    {
        $service  = Service::find($id);
        if ($service) {
            $service->delete();
        }
        notify()->success('Service Deleted Successfully');
    }
    public function render()
    {
        return view('livewire.admin.service.listing', [
            'services' => Service::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
