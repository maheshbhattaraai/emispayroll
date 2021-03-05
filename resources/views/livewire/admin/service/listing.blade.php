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
            <input wire:model="search" class="form-control" type="text" placeholder="Search Office Type...">
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Service</th>

                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($services)>0)
            @foreach($services as $service)
            <tr>
                <td>{{$service->service}}</td>
                <td>{{$service->created_at->format('Y-m-d')}}</td>
                <td>
                    <button wire:click="$emit('editService',{{$service->id}})" class="btn btn-sm btn-primary"
                        data-toggle="modal" data-target="#serviceModal">Edit</button>
                    <button
                        onclick="if (confirm('Are you sure?')){window.livewire.emit('deleteService',{{$service->id}})}else{return; }"
                        class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">
                    <p class="text-center">No Data Available</p>
                </td>
            </tr>
            @endif

        </tbody>
    </table>
    <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">
        <ul class="pagination">
            {{ $services->links() }}
        </ul>
    </div>

    <div class="row">
        <!--  -->
        <div class="col text-right text-muted">
            Showing {{ $services->firstItem() }} to {{ $services->lastItem() }} out of {{ $services->total() }}
            results
        </div>
    </div>
</div>
