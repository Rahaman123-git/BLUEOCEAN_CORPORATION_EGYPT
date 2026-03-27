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
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('awards.index') }}">Awards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Award Categories</a></li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group mr-5">
          <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#awardCategory">Add new award category</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Award categories</h6>
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
              @isset($awardCategories)
                @foreach($awardCategories as $awardCategory)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $awardCategory->category }}</td>
                    <td>{{ Carbon\Carbon::parse($awardCategory->created_at)->format('d.m.Y') }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-danger awardcategoryremove" awardcategoryid="{{ $awardCategory->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
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

    <!-- Award Category Modal -->
    <div class="modal" id="awardCategory">
      <div class="modal-dialog">
        <div class="modal-content">
          <form name="awardcategorydetailsform" id="awardcategorydetailsform" action="{{ route('awards.categories.store') }}">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Award category</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Category name<span class="text-danger">*</span></label>
                    <input type="text" name="category_name" id="categoryname" class="form-control" placeholder="Category name">
                    <div id="category_name" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <a href="javascript:void(0)" class="btn btn-primary awardcategorydetailssave">Save</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Award Category Modal -->
@endsection