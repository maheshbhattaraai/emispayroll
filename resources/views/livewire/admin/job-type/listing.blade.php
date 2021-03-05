<div>
    <div class="row mb-4">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
        </div>
        <div class="col-md-3">
            <input wire:model="search" class="form-control" type="text" placeholder="Search Job Type...">
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Job Type</th>
                <th scope="col">Parent Job Type</th>
                <th scope="col">Duration</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($jobtypes)>0)
            @foreach($jobtypes as $jobtype)
            <tr>
                <td>{{$jobtype->name}}</td>

                <td>{{$jobtype->parent->name}}</td>
                <td>{{$jobtype->duration}}</td>
                <td>{{$jobtype->created_at->format('Y-m-d')}}</td>
                <td>
                    <button wire:click="$emit('editJobType',{{$jobtype->id}})" class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target="#jobTypeModal">Edit</button>
                    <button
                        onclick="if (confirm('Are you sure?')){window.livewire.emit('deleteJobType',{{$jobtype->id}})}else{return; }"
                        class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5">
                    <p class="text-center">No Data Available</p>
                </td>
            </tr>
            @endif

        </tbody>
    </table>
    <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">
        <ul class="pagination">
            {{ $jobtypes->links() }}
        </ul>
    </div>

    <div class="row">
        <!--  -->
        <div class="col text-right text-muted">
            Showing {{ $jobtypes->firstItem() }} to {{ $jobtypes->lastItem() }} out of {{ $jobtypes->total() }}
            results
        </div>
    </div>
</div>
