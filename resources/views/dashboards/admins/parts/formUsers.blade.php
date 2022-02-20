@csrf

@if(isset($user->id))
    <br/>
    <div class="row md-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}
            @if(isset($user->id))
            {{ $user->name }}
            @endif" required autocomplete="name" autofocus>
            @error('name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>
        <div class="col-md-6">
            <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror"
                   name="middle_name" value="{{ old('middle_name') }}
            @if(isset($user->id))
            {{ $user->middle_name }}
            @endif" required autocomplete="middle_name" autofocus>
            @error('middle_name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                   name="last_name" value="{{ old('last_name') }}
            @if(isset($user->id))
            {{ $user->last_name }}
            @endif" required autocomplete="last_name" autofocus>
            @error('last_name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <br/>
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
    <br/>
    <div class="row md-3">
        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
        <div class="col-md-6">
            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror"
                   name="role" value="{{ old('role') }}
            @if(isset($user->id))
            {{ $user->role }}
            @endif" required autocomplete="role" autofocus>
            @error('role')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <br/>
    <div class="row mb-3">
        <label for="phone_country" class="col-md-4 col-form-label text-md-end">{{ __('Phone Country') }}</label>
        <div class="col-md-6">
            <input id="email" type="varchar" class="form-control @error('phone_country') is-invalid
                    @enderror" name="phone_country" value="{{ old('phone_country') }}" required
                   autocomplete="phone_country">
            @error('phone_country')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <br/>
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
    <br/>
    <div class="row md-3">
        <label for="birthday" class="col-md-4 col-form-label text-md-end">{{ __('Birthday') }}</label>
        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror"
                   name="birthday" value="{{ old('birthday') }}
            @if(isset($user->id))
            {{ $user->birthday }}
            @endif" required autocomplete="name" autofocus>
            @error('birthday')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <br/>
    {{----}}

    <div class="form-group row ">
        <div class="col-md-12">
            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>

    </div>
    {{----}}

    <div class="row md-3">
        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
        <div class="col-md-6">
            <input id="gender" type="range" class="form-control @error('gender') is-invalid @enderror"
                   name="gender" min="0" max="1" value="{{ old('gender') }}
            @if(isset($user->id))
            {{ $user->name }}
            @endif" required autocomplete="gender" autofocus>
            @error('gender')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <br/>


    {{-- ----------------------------------------------------------------------------------------------------- --}}

@else
    <div class="row md-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="Name" required autocomplete="name" autofocus>
            @error('name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>
        <div class="col-md-6">
            <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror"
                   name="middle_name" value="Middle Name" required autocomplete="middle_name" autofocus>
            @error('middle_name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                   name="last_name" value="Last Name" required autocomplete="last_name" autofocus>
            @error('last_name')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid
                    @enderror" name="email" value="E-Mail Address" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
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
    {{--
    <div class="row md-3">
        <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
        <div class="col-md-6">
            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror"
                   name="role" value="Role" required autocomplete="role" autofocus>
            @error('role')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>--}}
    <br/>
    <div class="row mb-3">
        <label for="phone_country" class="col-md-4 col-form-label text-md-end">{{ __('Phone Country') }}</label>
        <div class="col-md-6">
            <input id="email" type="varchar" class="form-control @error('phone_country') is-invalid
                    @enderror" name="phone_country" value="Phone Country" required
                   autocomplete="phone_country">
            @error('phone_country')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
        <div class="col-md-6">
            <input id="email" type="phone_number" class="form-control @error('phone_number') is-invalid
                    @enderror" name="phone_number" value="Phone Number" required autocomplete="email">
            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="row md-3">
        <label for="birthday" class="col-md-4 col-form-label text-md-end">{{ __('Birthday') }}</label>
        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror"
                   name="birthday" value="Birthday" required autocomplete="name" autofocus>
            @error('birthday')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row ">
        <div class="col-md-12">
            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gander" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>

    </div>

    <div class="row md-3">
        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
        <div class="col-md-6">
            <input id="gender" type="range" class="form-control @error('gender') is-invalid @enderror"
                   name="gender" min="0" max="1" value="Gender" required autocomplete="gender" autofocus>
            @error('gender')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

@endif

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Do it') }}
        </button>
    </div>
</div>


