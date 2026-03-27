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
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog.events.index') }}">Blogs</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog.events.edit', $blog->id) }}">Blog details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('blog.events.events.create', $blog->id) }}" class="btn btn-primary ml-5">Add new blog event</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Blog events</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Blog title</th>
                <th>Event title</th>
                <th>Highlighted event</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($blogEvents)
                @foreach($blogEvents as $blogEvent)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blogEvent->blog->blog_title }}</td>
                    <td>{{ $blogEvent->event_title }}</td>
                    <td>{{ ucfirst(strtolower($blogEvent->is_highlighted_event)) }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ route('blog.events.events.edit', [$blog->id, $blogEvent->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger blogeventremove" blogid="{{ $blog->id }}" blogeventid="{{ $blogEvent->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endisset
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Blog title</th>
                <th>Event title</th>
                <th>Highlighted event</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection