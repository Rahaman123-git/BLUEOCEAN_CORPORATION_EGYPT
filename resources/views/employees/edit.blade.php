@extends('layouts.app')

@section('content')
  @if(session('success'))
    <span class="flashstatus d-none">SUCCESS</span> 
    <span class="flashmessage d-none">{{ session('success') }}</span>
  @endif
  @if(session('error'))
    <span class="flashstatus d-none">ERROR</span> 
    <span class="flashmessage d-none">{{ session('error') }}</span>
  @endif
  <div class="loader"></div>
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3 pl-0i">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('events.index') }}">Employees</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="employeedetailsform" id="employeedetailsform" action="{{ route('employees.update', $user->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Employee name<span class="text-danger">*</span></label>
                  <input type="text" name="employee_name" id="employeename" class="form-control" placeholder="Employee name" value="{{ $user->name }}">
                  <div id="employee_name" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Employee email<span class="text-danger">*</span></label>
                  <input type="text" name="employee_email" id="employeeemail" class="form-control" placeholder="Employee email" value="{{ $user->email }}" disabled>
                  <div id="employee_email" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Employee role<span class="text-danger">*</span></label>
                  <select name="employee_role" id="employeerole" class="form-control" data-placeholder="Employee role">
                    <option value="">Select employee role</option>
                    @isset($roles)
                      @foreach($roles as $role)
                        <option value="{{ $role->name }}" {{ ($role->name == $user->roles->first()->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                      @endforeach
                    @endisset
                  </select>
                  <div id="employee_role" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Login username<span class="text-danger">*</span></label>
                  <input type="text" name="login_username" id="loginusername" class="form-control" placeholder="Login username" value="{{ $user->username }}" disabled>
                  <div id="login_username" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Login password<span class="text-danger">*</span></label>
                  <input type="password" name="login_password" id="loginpassword" class="form-control" placeholder="Login password">
                  <div id="login_password" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('employees.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary employeedetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--end row-->
@endsection