@csrf

{{-- -------------------------------------------------------------------------------- --}}
{{--
<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        First menu
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Item 1</a>
        <a class="dropdown-item" href="#">Item 2</a>
        <a class="dropdown-item" href="#">Item 3</a>
    </div>
</div>
<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        Second menu
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Item 1</a>
        <a class="dropdown-item" href="#">Item 2</a>
        <a class="dropdown-item" href="#">Item 3</a>
    </div>
</div>
--}}
{{-- -------------------------------------------------------------------------------- --}}



<br />

<div class="row md-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}
        @if(isset($trips->id))
        {{ $trips->name }}
        @endif" required autocomplete="name" autofocus>
        @error('name')>
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
<br />
<div class="row md-3">
    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
    <div class="col-md-6">
        <input id="title" type="title" class="form-control @error('title') is-invalid
                    @enderror" name="title" value="{{ old('title') }}
        @if(isset($trips->id))
        {{ $trips->title }}
        @endif" required autocomplete="title">
        @error('title')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row md-3">
    <label for="second_title" class="col-md-4 col-form-label text-md-end">{{ __('Second title') }}</label>
    <div class="col-md-6">
        <input id="second_title" type="second_title" class="form-control @error('second_title') is-invalid
                    @enderror" name="second_title" value="{{ old('second_title') }}
        @if(isset($trips->id))
        {{ $trips->second_title }}
        @endif" autocomplete="second_title">
        @error('second_title')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="overview" class="col-md-4 col-form-label text-md-end">{{ __('Overview') }}</label>
    <div class="col-md-6">
        <input id="overview" type="overview" class="form-control @error('overview') is-invalid
                    @enderror" name="overview" value="{{ old('overview') }}
        @if(isset($trips->id))
        {{ $trips->overview }}
        @endif" required autocomplete="overview">
        @error('overview')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
    <div class="col-md-6">
        <input id="description" type="description" class="form-control @error('description') is-invalid
                    @enderror" name="description" value="{{ old('description') }}
        @if(isset($trips->id))
        {{ $trips->description }}
        @endif" autocomplete="description">
        @error('description')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="second_description" class="col-md-4 col-form-label text-md-end">{{ __('Second description') }}</label>
    <div class="col-md-6">
        <input id="second_description" type="second_description" class="form-control @error('second_description') is-invalid
                    @enderror" name="second_description" value="{{ old('second_description') }}
        @if(isset($trips->id))
        {{ $trips->second_description }}
        @endif" autocomplete="second_description">
        @error('second_description')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="price_one" class="col-md-4 col-form-label text-md-end">{{ __('Price one') }}</label>
    <div class="col-md-6">
        <input id="price_one" type="price_one" class="form-control @error('price_one') is-invalid
                    @enderror" name="price_one" value="{{ old('price_one') }}
        @if(isset($trips->id))
        {{ $trips->price_one }}
        @endif" autocomplete="price_one">
        @error('price_one')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="price_two" class="col-md-4 col-form-label text-md-end">{{ __('Price two') }}</label>
    <div class="col-md-6">
        <input id="price_two" type="price_two" class="form-control @error('price_two') is-invalid
                    @enderror" name="price_two" value="{{ old('price_two') }}
        @if(isset($trips->id))
        {{ $trips->price_two }}
        @endif" autocomplete="price_two">
        @error('price_two')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="included" class="col-md-4 col-form-label text-md-end">{{ __('Included') }}</label>
    <div class="col-md-6">
        <input id="included" type="included" class="form-control @error('included') is-invalid
                    @enderror" name="included" value="{{ old('included') }}
        @if(isset($trips->id))
        {{ $trips->included }}
        @endif" autocomplete="included">
        @error('included')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="not_included" class="col-md-4 col-form-label text-md-end">{{ __('Not included') }}</label>
    <div class="col-md-6">
        <input id="not_included" type="not_included" class="form-control @error('not_included') is-invalid
                    @enderror" name="not_included" value="{{ old('not_included') }}
        @if(isset($trips->id))
        {{ $trips->not_included }}
        @endif" autocomplete="not_included">
        @error('not_included')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<br />

<div class="row mb-3">
    <label for="discount" class="col-md-4 col-form-label text-md-end">{{ __('Discount') }}</label>
    <div class="col-md-6">
        <input id="discount" type="discount" class="form-control @error('discount') is-invalid
                    @enderror" name="discount" value="{{ old('discount') }}
        @if(isset($trips->id))
        {{ $trips->discount }}
        @endif" autocomplete="discount">
        @error('discount')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Do it') }}
        </button>
    </div>
</div>




















{{--

<div class="row md-3">
    <i class="fas fa-tag"></i>
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}
        @if(isset($tripsCrud->id))
        {{ $tripsCrud->name }}
        @endif" required autocomplete="name" autofocus>
        @error('name')>
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
</div>
<div class="row md-3">
    <i class="fas fa-tag"></i>
    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
               name="title" value="{{ old('name') }}
        @if(isset($tripsCrud->id))
        {{ $tripsCrud->title }}
        @endif" required autocomplete="name" autofocus>
        @error('title')>
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
    <div class="row md-3">
        <i class="fas fa-tag"></i>
        <label for="second_title" class="col-md-4 col-form-label text-md-end">{{ __('Second title') }}</label>
        <div class="col-md-6">
            <input id="second_title" type="second_title"
                   class="form-control @error('second_title') is-invalid @enderror"
                   name="second_title" value="{{ old('second_title') }}
            @if(isset($tripsCrud->id))
            {{ $tripsCrud->second_title }}
            @endif" required autocomplete="name" autofocus>
            @error('second_title')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
    <div class="row md-3">
        <i class="fas fa-tag"></i>
        <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
        <div class="col-md-6">
            <input id="description" type="description"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description" value="{{ old('description') }}
            @if(isset($tripsCrud->id))
            {{ $tripsCrud->description }}
            @endif" required autocomplete="name" autofocus>
            @error('description')>
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <br/>



    <div class="mb-3">
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Do it') }}
            </button>
        </div>
    </div>
</div>  --}}
   {{-- -------------------------------------------------------
    <div class="register-form mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="p-4 text-white">
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <label for="name">{{ __('Name') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="varchar" class="form-control" value="{{$tripsCrud->name}}">
                            @else
                                <input type='varchar' class='form-control' placeholder='Name ...' autocomplete='name'>
                            @endif
                        </div>
                        <p>iiii</p>

                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input id="name" type="varchar" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="
                        @if(isset($tripsCrud->id))
                            {{ $tripsCrud->name }}
                            @endif" required autocomplete="name" autofocus>
                            @error('name')>
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <i class="fas fa-tag"></i>
                            <label for="title">{{ __('title') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="varchar" name="name" class="form-control" @error('title') is-invalid
                                       @enderror value="{{$tripsCrud->title}}">
                            @else
                                <input type='varchar' name="name" class='form-control' @error('title') is-invalid
                                       @enderror placeholder='Title ...' autocomplete='title'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-tags"></i>
                            <label for="second_title">{{ __('second_title') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="varchar" class="form-control" value="{{$tripsCrud->second_title}}">
                            @else
                                <input type="varchar" class="form-control" placeholder="Second title ..."
                                       autocomplete='second_title'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-tags"></i>
                            <label for="overview">{{ __('overview') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="text" class="form-control" value="{{$tripsCrud->overview}}">
                            @else
                                <input type='text' class='form-control' autocomplete='overview'>
                            @endif
                        </div>
                        --}}
                        {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{--
                            <div class="form-group">
                                <i class="fas fa-check"></i>
                                <label for="description">{{ __('description') }}</label>
                                @if (isset($tripsCrud->id))
                                    @if (isset($tripsCrud->description))
                                        <input type="text" class="form-control" value="{{$tripsCrud->description}}">
                                    @endif
                                @else
                                    <input type='text' class='form-control'
                                           autocomplete='description'>
                                @endif
                            </div>

                            --}}
                            {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{--
                        <div class="form-group">
                            <i class="fas fa-check-double"></i>
                            <label for="second_description">{{ __('second_description') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="text" class="form-control" value="{{$tripsCrud->second_description}}">
                            @else
                                <input type='text' class='form-control' placeholder='Second description  ...'
                                       autocomplete='second_description'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-coins"></i>
                            <label for="price_one">{{ __('price_one') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="bigint" class="form-control" value="{{$tripsCrud->price_one}}">
                            @else
                                <input type='bigint' class='form-control' placeholder='Price one ...'
                                       autocomplete='price_one'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-coins"></i>
                            <label for="price_two">{{ __('price_two') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="bigint" class="form-control" value="{{$tripsCrud->price_two}}">
                            @else
                                <input type='bigint' class='form-control' placeholder='Price two ...'
                                       autocomplete='price_two'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-smile"></i>
                            <label for="included">{{ __('included') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="text" class="form-control" value="{{$tripsCrud->included}}">
                            @else
                                <input type='text' class='form-control' placeholder='Included ...'
                                       autocomplete='included'>
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-frown"></i>
                            <label for="not_included">{{ __('not_included') }}</label>
                            @if (isset($tripsCrud->id))
                                <input type="text" class="form-control" value="{{$tripsCrud->not_included}}">
                            @else
                                <input type='text' class='form-control' placeholder='Not included ...'
                                       autocomplete='not_included'>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-info mb-3 mt-3 float-right">Do it</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

--}}
