<div wire:ignore.self class="modal fade" id="serviceModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    @if($serviceId)
                    Update Service
                    @else
                    Create Service
                    @endif
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input wire:model='serviceId' type="hidden" class="form-control" placeholder="Category *" value=""
                    aria-invalid="true" />
                <div class="form-group @error('service') error @enderror">
                    <input wire:model='service' type="text" class="form-control" placeholder="Service *" value=""
                        aria-invalid="true" />
                    @error('service')<div class="help-block">
                        <ul role="alert">
                            <li>{{$message}}</li>
                        </ul>
                    </div>@enderror
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

            </div>
            <div class="modal-footer">
                <button wire:click.prevent="cancel()" type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button wire:click="{{$serviceId?'update':'save'}}" type="button" class="btn btn-primary">
                    <div wire:loading wire:target="{{$serviceId?'update':'save'}}" class="spinner-grow spinner-grow-sm"
                        role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    {{$serviceId?'Update':'Save'}}
                </button>
            </div>
        </div>
    </div>
</div>
