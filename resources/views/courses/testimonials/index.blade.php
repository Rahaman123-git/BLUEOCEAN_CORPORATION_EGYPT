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
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('courses.testimonials.create') }}" class="btn btn-primary">Add new course testimonial</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Course testimonials</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Testimonial type</th>
                <th>Course</th>
                <th>Name</th>
                <th>Testimonial</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($testimonials)
                @foreach($testimonials as $testimonial)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ($testimonial->testimonial_type == 'TEXT_TESTIMONIAL' ? 'Text' : 'Video') }}</td>
                    <td title="{{ $testimonial->course->course_title_en }}">{{ $testimonial->course->course_short_title_en }}</td>
                    <td>{{ $testimonial->client_name }}</td>
                    @if($testimonial->testimonial_type == 'TEXT_TESTIMONIAL')
                      <td>{!! $testimonial->getShortDescription() !!}</td>
                    @else
                      <td>{{ $testimonial->client_testimonial_video_url }}</td>
                    @endif
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ route('courses.testimonials.edit', $testimonial->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger coursetestimonialremove" coursetestimonialid="{{ $testimonial->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Testimonial type</th>
                <th>Course</th>
                <th>Name</th>
                <th>Testimonial</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection