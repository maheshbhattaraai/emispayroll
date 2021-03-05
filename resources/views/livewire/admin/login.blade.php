<div>
    <h2>लुम्बिनी बौद्ध विश्वविद्यालय</h2>
    <p class="text-center">लुम्बिनी</p>
    <h5 class="text-center font-weight-bold">Login</h5>
    <form wire:submit.prevent="login">
        <div class="form-group @error('email') error @enderror">
            <input wire:model.lazy='email' type="text" class="form-control" placeholder="Your Email *" value=""  aria-invalid="true"/>
            @error('email')<div class="help-block"><ul role="alert"><li>{{$message}}</li></ul></div>@enderror
        </div>
        <div class="form-group @error('password') error @enderror">
            <input wire:model.lazy='password' type="password" class="form-control" placeholder="Your Password *" value=""  aria-invalid="true"/>
            @error('password')<div class="help-block"><ul role="alert"><li>{{$message}}</li></ul></div>@enderror
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
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                <div wire:loading wire:target='login' class="spinner-grow spinner-grow-sm" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                Login
            </button>
        </div>
    </form>
</div>
