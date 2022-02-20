@extends('layouts.adminApp')
@section('pageTitle','New tripsCrud')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create trip
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form method="POST" action="{{ route('admin.tripsCrud.tripsUpdate', $trips->id) }}" enctype="multipart/form-data">
            @include('dashboards.admins.parts.formTrips', ['create' => true])
        </form>
    </div>

    {{--
       <h3>Add New Trips</h3>
       <div class="m-auto w-4/8 py-24">
           <div class="text-center">
               <h1 class="text-5xl uppercase bold">
                   Update trip
               </h1>
           </div>
       </div>
       <div class="flex justify-center pt-20">
            <form method="POST" action="{{ route('admin.tripsCrud.tripsUpdate', $trips->id) }}" enctype="multipart/form-data">--}}

        {{-- ---------------------------------------------------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------------------------------------------------

        <form method="POST" action="{{ route('admin.tripsCrud.tripsUpdate', $trips->id) }}" enctype="multipart/form-data">
            <div>
                <input type="text" name="name" id="name" placeholder=" " pattern="" required>
                <label for="name">Name</label>
            </div>
            <div>
                <input type="text" name="title" id="title" placeholder=" " pattern="" required>
                <label for="title">Title</label>
            </div>
            <div>
                <div>
                    <input type="text" name="second_title" id="second_title" placeholder=" " pattern="" required>
                    <label for="second_title">Second title</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="overview" id="overview" placeholder=" " pattern="" required>
                    <label for="overview">Overview</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="description" id="description" placeholder=" " pattern="" required>
                    <label for="description">Description</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="second_description" id="second_description" placeholder=" " pattern="" required>
                    <label for="second_description">Second Description</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="price_one" id="price_one" placeholder=" " pattern="" required>
                    <label for="price_one">Price One</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="price_two" id="price_two" placeholder=" " pattern="" required>
                    <label for="price_two">Price Two</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="included" id="included" placeholder=" " pattern="" required>
                    <label for="included">Included</label>
                </div>
            </div>
            <div>
                <div>
                    <input type="text" name="not_included" id="not_included" placeholder=" " pattern="" required>
                    <label for="not_included">Not Included</label>
                </div>
            </div>--}}

{{--
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
        {{-- ------------------------------------------------------------------------------ --}}
        {{-- -------------------------------Types -----------------------------------------

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
            <input type="submit" value="Do it"/>
        </form>--}}


        {{-- ---------------------------------------------------------------------------------------------------- --}}
        {{-- ---------------------------------------------------------------------------------------------------- --}}
        {{--   @include('dashboards.admins.parts.formTrips', ['create' => true])
           <div class="row mb-0">
               <div class="col-md-6 offset-md-4">
                   <button type="submit" class="btn btn-primary">
                       {{ __('Do it') }}
                   </button>
               </div>
           </div>

       </form>--}}

        {{-- -------------------------------------------------------------------------------- --}}
        {{-- ---------------------------------------------------------------------------------
        @include('dashboards.admins.parts.formTrips')-}}
        {{-- -------------------------------------------------------------------------------- --}}
        {{-- --------------------------------------------------------------------------------
    </div>--}}


@endsection



