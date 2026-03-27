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
            <li class="breadcrumb-item active" aria-current="page">Affiliations</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('courses.affiliations.create') }}" class="btn btn-primary">Add new course affiliation</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Course affiliations</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Icon</th>
                <th>Short name</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($affiliations)
                @foreach($affiliations as $affiliation)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      @if($affiliation->image)
                        <img src="{{ asset('storage/courses/affiliations/'.$affiliation->image) }}" class="w-50" alt="{{ $affiliation->short_name_en }}" srcset="{{ asset('storage/courses/affiliations/'.$affiliation->image) }}">
                      @endif
                    </td>
                    <td>{{ $affiliation->short_name_en }}</td>
                    <td>{!! $affiliation->getShortDescription() !!}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ route('courses.affiliations.edit', $affiliation->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger courseaffiliationremove" courseaffiliationid="{{ $affiliation->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Icon</th>
                <th>Short name</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection