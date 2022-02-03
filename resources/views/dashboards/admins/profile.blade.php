@extends('layouts.adminApp')
@section('pageTitle','Profile')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle admin_picture"
                                     src="{{asset(Auth::user()->avatar)}}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center admin_name">{{Auth::user()->name}}</h3>
                            <p class="text-muted text-center">Admin</p>
                            <input type="file" name="admin_image" id="admin_image"
                                   style="opacity: 0;height:1px;display:none">
                            <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Change
                                    picture</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="#"
                                          id="updateProfile">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                       placeholder="Name"
                                                       value="{{ Auth::user()->name }}" name="name">
                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputMiddleName" class="col-sm-2 col-form-label">Middle
                                                name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputMiddleName"
                                                       placeholder="Middle name" value="{{ Auth::user()->middle_name }}"
                                                       name="middle_name">
                                                <span class="text-danger error-text middle_name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputLatsName" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputLastName"
                                                       placeholder="Last Name" value="{{ Auth::user()->last_name }}"
                                                       name="last_name">
                                                <span class="text-danger error-text last_name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail"
                                                       placeholder="Email"
                                                       value="{{ Auth::user()->email }}" name="email">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputRole"
                                                       placeholder="Role"
                                                       value="{{ Auth::user()->role }}" name="role">
                                                <span class="text-danger error-text role_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputGender" class="col-sm-2 col-form-label">gender</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputGender"
                                                       placeholder="Favorite color" value="{{ Auth::user()->gender }}"
                                                       name="gender">
                                                <span class="text-danger error-text gender_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="change_password">
                                    {{--   <form class="form-horizontal" action="{{ route('adminChangePassword') }}" method="POST" id="changePasswordAdminForm">  --}}
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Old Passord</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputName"
                                                   placeholder="Enter current password" name="oldpassword">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="newpassword"
                                                   placeholder="Enter new password" name="newpassword">
                                            <span class="text-danger error-text newpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Confirm New
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="cnewpassword"
                                                   placeholder="ReEnter new password" name="cnewpassword">
                                            <span class="text-danger error-text cnewpassword_error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update Password</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
