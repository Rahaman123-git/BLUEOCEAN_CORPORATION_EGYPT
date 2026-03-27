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
            <li class="breadcrumb-item active" aria-current="page">Courses</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group mr-5">
          <a href="javascript:void(0)" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fullYearCalendarModal">Upload full year calendar PDF</a>
        </div>
        <div class="btn-group mr-5">
          <a href="{{ route('courses.sync.schedule') }}" class="btn btn-success">Sync course calendar with ZOHO</a>
        </div>
        <div class="btn-group">
          <a href="{{ route('courses.create') }}" class="btn btn-primary ml-5">Add new course</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Courses</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Course type</th>
                <th>Course title</th>
                <th>Course category</th>
                <th>Course affiliation</th>
                <th>Course language</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($courses)
                @foreach($courses as $course)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ($course->course_type == 'CERTIFICATION_TRAINING') ? 'Certification program (retail)' : 'Corporate training' }}</td>
                    <td title="{{ $course->course_title_en }}">{{ $course->course_short_title_en }}</td>
                    <td>{{ $course->category->name_en }}</td>
                    <td>{{ $course->affiliation ? $course->affiliation->short_name_en : 'N/A' }}</td>
                    <td>{{ $course->course_language }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ route('courses.edit', $course->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger courseremove" courseid="{{ $course->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endisset
            </tbody>
            <tfoot>
              <tr>
              <th>Sr. no.</th>
                <th>Course type</th>
                <th>Course title</th>
                <th>Course category</th>
                <th>Course affiliation</th>
                <th>Course language</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="fullYearCalendarModal" tabindex="-1" aria-labelledby="fullYearCalendarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="fullYearCalendarModalLabel">Full year course calendar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form name="coursefullyearcalendardetailsform" id="coursefullyearcalendardetailsform" action="{{ route('courses.full.year.calendar.store') }}">
            <div class="row mb-3">
              <div class="{{ (isset($courseCalendarFiles['certificate']) && $courseCalendarFiles['certificate']) ? 'col-md-11' : 'col-md-12' }}">
                <div class="form-group">
                  <label for="certificatecalendar" class="control-label">Certificate (retail) calendar</label>
                  <input type="file" name="certificate_calendar" class="form-control" id="certificatecalendar" accept=".pdf">
                  <div id="certificate_calendar" class="invalid-feedback"></div>
                </div>
              </div>
              @if(isset($courseCalendarFiles['certificate']) && $courseCalendarFiles['certificate'])
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/calendar/'.$courseCalendarFiles['certificate']) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_certificate_calendar" value="{{ $courseCalendarFiles['certificate'] }}">
                  </div>
                </div>
              @endif
            </div>
            <div class="row mb-3">
              <div class="{{ (isset($courseCalendarFiles['corporate']) && $courseCalendarFiles['corporate']) ? 'col-md-11' : 'col-md-12' }}">
                <div class="form-group">
                  <label for="corporatecalendar" class="control-label">Corporate calendar</label>
                  <input type="file" name="corporate_calendar" class="form-control" id="corporatecalendar" accept=".pdf">
                  <div id="corporate_calendar" class="invalid-feedback"></div>
                </div>
              </div>
              @if(isset($courseCalendarFiles['corporate']) && $courseCalendarFiles['corporate'])
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/calendar/'.$courseCalendarFiles['corporate']) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_corporate_calendar" value="{{ $courseCalendarFiles['corporate'] }}">
                  </div>
                </div>
              @endif
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary coursefullyearcalendardetailssave">Upload</button>
        </div>
      </div>
    </div>
  </div>
@endsection