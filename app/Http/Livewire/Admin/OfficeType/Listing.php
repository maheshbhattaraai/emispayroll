<?php

namespace App\Http\Livewire\Admin\OfficeType;


use Livewire\Component;
use Livewire\WithPagination;
use Modules\Setup\Entities\OfficeType;

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

    protected $listeners = ['updateOfficeTypeTable' => '$refresh', 'deleteOfficeType'];


    public function deleteOfficeType($id)
    {
        $officetype  = OfficeType::find($id);
        if ($officetype) {
            $officetype->delete();
        }
        notify()->success('Job Type Deleted Successfully');
    }

    public function render()
    {
        return view('setup::livewire.office_type.listing', [
            'officetypes' => OfficeType::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
}
