<div wire:ignore.self class="modal fade" id="jobTypeModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    @if($jobtypeid)
                    Update Job Type
                    @else
                    Create Job Type
                    @endif
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input wire:model='jobtypeid' type="hidden" class="form-control" placeholder="Category *" value=""
                    aria-invalid="true" />
                <div class="form-group @error('name') error @enderror">
                    <input wire:model='name' type="text" class="form-control" placeholder="Job Type *" value=""
                        aria-invalid="true" />
                    @error('name')<div class="help-block">
                        <ul role="alert">
                            <li>{{$message}}</li>
                        </ul>
                    </div>@enderror
                </div>


                <div class="form-group @error('parent_id') error @enderror">
                    <div wire:ignore id="parent_id">
                        <select w wire:model='parent_id' class="form-control" data-container="#parent_id"
                            id="exampleFormControlSelect2">
                            <option value="" @if(!$jobtypeid) {{'selected'}} @endif>Select Job Type</option>
                            @foreach($jobtypes as $jobtype)
                            <option value="{{$jobtype->id}}" @if(isset($jobtypeid))
                                {{$jobtypeid==$jobtype->id?'selected':''}} @endif>{{$jobtype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('parent_id')<div class="help-block">
                        <ul role="alert">
                            <li>{{$message}}</li>
                        </ul>
                    </div>@enderror
                </div>
                <div class="form-group @error('duration') error @enderror">
                    <input wire:model='duration' type="text" class="form-control" placeholder="Duration" value=""
                        aria-invalid="true" />
                    @error('duration')<div class="help-block">
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
                <button wire:click="{{$jobtypeid?'update':'save'}}" type="button" class="btn btn-primary">
                    <div wire:loading wire:target="{{$jobtypeid?'update':'save'}}" class="spinner-grow spinner-grow-sm"
                        role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
