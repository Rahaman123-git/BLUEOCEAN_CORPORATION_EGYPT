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
  <div class="container-fluid"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="ps-3 pl-0i">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Leads</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Leads</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Register date</th>
                <th>Lead source</th>
                <th>Course</th>
                <th>User</th>
                <th>Email id.</th>
                <th>Phone no.</th>
                <th>Designation</th>
                <th>City</th>
                <th>Country</th>
                <th>Website</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($leads)
                @foreach($leads as $lead)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ \Carbon\Carbon::parse($lead->created_at)->format('d.m.Y') }}</td>
                    <td>{{ (($lead->lead_source == 'courseRegistration') ? 'Course registration' : (($lead->lead_source == 'courseBrochure') ? 'Course brochure download' : (($lead->lead_source == 'courseCalendar') ? 'Course calendar' : ''))) }}</td>
                    <td>{{ $lead->course ? $lead->course->course_short_title_en : 'N/A' }}</td>
                    <td>{{ $lead->first_name }} {{ $lead->last_name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->phone_no }}</td>
                    <td>{{ $lead->designation }}</td>
                    <td>{{ $lead->city }}</td>
                    <td>{{ $lead->country }}</td>
                    <td>{{ $lead->website }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-danger leadremove" leadid="{{ $lead->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Register date</th>
                <th>Lead source</th>
                <th>Course</th>
                <th>User</th>
                <th>Email id.</th>
                <th>Phone no.</th>
                <th>Designation</th>
                <th>City</th>
                <th>Country</th>
                <th>Website</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection