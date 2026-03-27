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
            <li class="breadcrumb-item active" aria-current="page">Trainers</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trainerImage">Add new trainer image</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Trainers</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Title</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($trainers)
                @foreach($trainers as $tDetails)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Trainer image - {{ $loop->iteration }}</td>
                    <td>{{ Carbon\Carbon::parse($tDetails->created_at)->format('d.m.Y') }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ asset('storage/courses/trainers/'.$tDetails->trainer_image) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View" target="_blank"><i class="bi bi-eye-fill"></i></a>
                        <a href="javascript:;" class="text-danger trainerremove" trainerid="{{ $tDetails->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endisset
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Title</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>

    <!-- Trainer Image Modal -->
    <div class="modal" id="trainerImage">
      <div class="modal-dialog">
        <div class="modal-content">
          <form name="trainerdetailsform" id="trainerdetailsform" action="{{ route('courses.trainers.store') }}">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Course trainer</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="trainerimage" class="form-label">Trainer image<span class="text-danger">*</span></label>
                    <input type="file" name="trainer_image" class="form-control" id="trainerimage" accept="image/*">
                    <div id="trainer_image" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary trainerdetailssave">Save</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Trainer Image Modal -->
@endsection