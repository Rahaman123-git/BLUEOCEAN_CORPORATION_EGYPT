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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('conferences.categories.index') }}">Conference categories</a></li>
          <li class="breadcrumb-item active" aria-current="page">Conference category details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="conferencecategorydetailsform" id="conferencecategorydetailsform" action="{{ route('conferences.categories.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Category short title<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="category_short_title" id="categoryshorttitle" class="form-control" placeholder="Category short title">
                  <div id="category_short_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Category title<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="category_title" id="categorytitle" class="form-control" placeholder="Category title">
                  <div id="category_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Category logo<span class="text-danger">*</span></label>
                  </div>
                  <input type="file" name="category_logo_file" class="form-control" id="categorylogofile" accept="image/*">
                  <div id="category_logo_file" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Category banner<span class="text-danger">*</span></label>
                  </div>
                  <input type="file" name="category_banner_file" class="form-control" id="categorybannerfile" accept="image/*">
                  <div id="category_banner_file" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Category details<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="category_details" class="summernote"></div>
                  <div id="category_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('conferences.categories.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary conferencecategorydetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Info Modal -->
  <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Content Formatting Guidelines</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>To ensure proper rendering on the front end, please follow the structure below when adding content in the editor:</p>
          <ul>
            <li>Only use the following HTML tags: <code>&lt;p&gt;</code>, <code>&lt;ul&gt;</code>, <code>&lt;li&gt;</code></li>
            <li>You can add up to <strong>two</strong> <code>&lt;p&gt;</code> tags (one at the start and one at the end)</li>
            <li>You may include <strong>one</strong> <code>&lt;ul&gt;</code> with any number of <code>&lt;li&gt;</code> items between the <code>&lt;p&gt;</code> tags</li>
            <li>All tags are optional, but only the ones listed above are allowed</li>
          </ul>
          <p class="mt-3"><strong>Example structure:</strong></p>
          <pre>
            <code>
              &lt;p&gt;Intro text&lt;/p&gt;
              &lt;ul&gt;
              &lt;li&gt;Item 1&lt;/li&gt;
              &lt;li&gt;Item 2&lt;/li&gt;
              &lt;li&gt;Item 3&lt;/li&gt;
              &lt;/ul&gt;
              &lt;p&gt;Closing text&lt;/p&gt;
            </code>
          </pre>
        </div>
      </div>
    </div>
  </div>
  <!--Info Modal-->
@endsection