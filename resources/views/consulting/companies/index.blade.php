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
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('consulting.index') }}">Consulting</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consulting companies</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group mr-5">
          <a href="{{ route('consulting.companies.create') }}" class="btn btn-primary">Add new consulting company</a>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Consulting companies</h6>
    <hr/>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Company</th>
                <th>Registerd on</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @isset($consultingCompanies)
                @foreach($consultingCompanies as $consultingCompany)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $consultingCompany->company }}</td>
                    <td>{{ Carbon\Carbon::parse($consultingCompany->created_at)->format('d.m.Y') }}</td>
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <a href="{{ route('consulting.companies.edit', $consultingCompany->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <a href="javascript:;" class="text-danger consultingcompanyremove" consultingcompanyid="{{ $consultingCompany->id }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
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
  </div>
@endsection