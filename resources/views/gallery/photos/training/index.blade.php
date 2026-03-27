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
            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">Training photos</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('galleries.create', [$media, $tag]) }}" class="btn btn-primary">Add new training photo</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Training photos</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Year</th>
                <th>Title</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($galleries)
                @foreach($galleries as $gallery)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $gallery->photo_year }}</td>
                    <td>{{ $gallery->photo_title }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ asset('storage/gallery/photos/'.$gallery->image) }}" class="text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" target="_blank" aria-label="View" data-bs-original-title="View"><i class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('galleries.edit', [$media, $tag, 'id' => $gallery->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger galleryremove" galleryid="{{ $gallery->id }}" media="photos" tag="training" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Year</th>
                <th>Title</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection