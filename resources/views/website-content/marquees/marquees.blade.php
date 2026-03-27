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
            <li class="breadcrumb-item active" aria-current="page">Marquees</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group mr-5">
          <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#marquee">Add new marquee</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Marquees</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Page</th>
                <th>Image</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($marquees)
                @foreach($marquees as $marquee)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst(strtolower($marquee->page_type)) }}</td>
					<td><img src="{{ asset('storage/website-content/marquees/'.$marquee->image) }}" class="img-thumbnail w-25 h-25" alt=""></td>
                    <td>{{ Carbon\Carbon::parse($marquee->created_at)->format('d.m.Y') }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-danger marqueeremove" marqueeid="{{ $marquee->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endisset
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Page</th>
                <th>Image</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Marquee Modal -->
  <div class="modal" id="marquee">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="marqueedetailsform" id="marqueedetailsform" action="{{ route('website.content.marquees.store') }}">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Marquee</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Page type<span class="text-danger">*</span></label>
                  <select name="page_type" id="pagetype" class="form-control" data-placeholder="Page type">
                    <option value="">Select page type</option>
                    <option value="HOME">Home</option>
                    <option value="CONSULTING">Consulting</option>
                    <option value="TRAINING">Training</option>
                    <option value="CONFERENCE">Conference</option>
                  </select>
                  <div id="page_type" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mt-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="categoryimage" class="form-label">Marquee image<span class="text-danger">*</span></label>
                  <input type="file" name="marquee_image" class="form-control" id="marqueeimage" accept="image/*">
                  <div id="marquee_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <a href="javascript:void(0)" class="btn btn-primary marqueedetailssave">Save</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Marquee Modal -->
@endsection