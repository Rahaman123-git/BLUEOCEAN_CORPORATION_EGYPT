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
            <li class="breadcrumb-item active" aria-current="page">News</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group mr-5">
          <a href="javascript:void(0)" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#newsDigitalMediaURL">Add new news digital media url</a>
        </div>
        <div class="btn-group">
          <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#featuredNews">Add new featured news</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">News</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Category</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($news)
                @foreach($news as $nDetails)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ($nDetails->category == 'featured') ? 'Featured News' : 'Digital media URL' }}</td>
                    <td>{{ Carbon\Carbon::parse($nDetails->created_at)->format('d.m.Y') }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        @if($nDetails->category == 'featured')
                          <a href="{{ asset('storage/news/'.$nDetails->featured_news_image) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View" target="_blank"><i class="bi bi-eye-fill"></i></a>
                        @else
                          <a href="{{ $nDetails->digital_media_url }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View" target="_blank"><i class="bi bi-eye-fill"></i></a>
                        @endif
                        <a href="javascript:;" class="text-danger newsremove" newsid="{{ $nDetails->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endisset
            </tbody>
            <tfoot>
              <tr>
                <th>Sr. no.</th>
                <th>Name</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>

    <!-- Featured News Modal -->
    <div class="modal" id="featuredNews">
      <div class="modal-dialog">
        <div class="modal-content">
          <form name="newsdetailsform" id="newsdetailsform" action="{{ route('news.store', ['newsCategory' => 'featured']) }}">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Featured news</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="featurednewsimage" class="form-label">Featured news image<span class="text-danger">*</span></label>
                    <input type="file" name="featured_news_image" class="form-control" id="featurednewsimage" accept="image/*">
                    <div id="featured_news_image" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary newsdetailssave">Save</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Featured News Modal -->

    <!-- Digital Media Link News Modal -->
    <div class="modal" id="newsDigitalMediaURL">
      <div class="modal-dialog">
        <div class="modal-content">
          <form name="newsdetailsform" id="newsdetailsform" action="{{ route('news.store', ['newsCategory' => 'digitalMediaLink']) }}">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">News digital media URL</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Digital media URL<span class="text-danger">*</span></label>
                    <input type="text" name="digital_media_url" id="digitalmediaurl" class="form-control" placeholder="Digital media URL">
                    <div id="digital_media_url" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary newsdetailssave">Save</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Digital Media Link News Modal -->
@endsection