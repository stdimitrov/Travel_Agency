@csrf

<div class="register-form mt-3 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-none d-md-block bg-warning">
                <h1 class="text-center pt-3">Create Account<br> Now</h1>
            </div>
            <div class="col-md-6 bg-dark">
                <form action="#" class="p-4 text-white">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd"><i class="fas fa-lock"></i> Confirm Password</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd"><i class="fas fa-lock"></i> Confirm Password</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-warning mb-3 mt-3 float-right">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>


<br />
<div class="row md-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}
        @if(isset($user->id))
        {{ $user->name }}
        @endif" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
<br />
<div class="row md-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid
                    @enderror" name="email" value="{{ old('email') }}
        @if(isset($user->id))
        {{ $user->email }}
        @endif" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
<br />
<div class="row mb-3">
    <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
    <div class="col-md-6">
        <input id="email" type="phone_number" class="form-control @error('phone_number') is-invalid
                    @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="email">
        @error('phone_number')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
@if(isset($create))
<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">
        {{ __('Confirm Password') }}</label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
@endif

<div class="mb-3">
    <!--    foreach here    -->
</div>
<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Do it') }}
        </button>
    </div>
</div>
