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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('conferences.index') }}">Conferences</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('conferences.edit', $conference->id) }}">Event details</a></li>
          <li class="breadcrumb-item active" aria-current="page">Event sponsors</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="conferencesponsordetailsform" id="conferencesponsordetailsform" action="{{ route('conferences.update.sponsors', $conference->id) }}" enctype="multipart/form-data">
          @method('PUT')
          <div class="card-body">
            @if(isset($conferenceSponsors) && count($conferenceSponsors))
              @foreach($conferenceSponsors as $cKey => $conferenceSponsor)
                <div class="row mb-3 sponsor">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Sponsor category<span class="text-danger">*</span></label>
                      <select name="sponsor_category[{{ $cKey }}]" class="form-control" data-placeholder="Sponsor category">
                        <option value="">Select event category</option>
                        <option value="Gold Sponsor" {{ ($conferenceSponsor->sponsor_category == 'Gold Sponsor') ? 'selected': '' }}>Gold Sponsor</option>
                        <option value="Silver Sponsor" {{ ($conferenceSponsor->sponsor_category == 'Silver Sponsor') ? 'selected': '' }}>Silver Sponsor</option>
                        <option value="GSupporting Sponsor" {{ ($conferenceSponsor->sponsor_category == 'GSupporting Sponsor') ? 'selected': '' }}>GSupporting Sponsor</option>
                        <option value="Knowledge Partner" {{ ($conferenceSponsor->sponsor_category == 'Knowledge Partner') ? 'selected': '' }}>Knowledge Partner</option>
                      </select>
                      <div id="sponsor_category_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="{{ ($conferenceSponsor->sponsors_logo) ? 'col-md-4' : 'col-md-5' }}">
                    <div class="form-group">
                      <label class="control-label">Sponsor logo</label>
                      <input type="file" name="sponsors_logo[{{ $cKey }}]" class="form-control" accept="image/*">
                      <div id="sponsors_logo_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  @if($conferenceSponsor->sponsors_logo)
                    <div class="col-md-1 mt-35">
                      <div class="form-group">
                        <a href="{{ asset('storage/conferences/sponsor/'.$conferenceSponsor->sponsors_logo) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                        <input type="hidden" name="existing_sponsors_logo[{{ $cKey }}]" value="{{ $conferenceSponsor->sponsors_logo }}">
                      </div>
                    </div>
                  @endif
                  <div class="col-md-1 mt-20">
                    @if($loop->last)
                      <a href="javascript:void(0)" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a>
                    @endif
                    @if(count($conferenceSponsors) > 1)
                      <a href="javascript:void(0)" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a>
                    @endif
                  </div>
                </div>
              @endforeach
              <input type="hidden" name="sponsorcurrentindex" value="{{ (count($conferenceSponsors) - 1) }}">
            @else
              <div class="row mb-3 sponsor">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Sponsor category<span class="text-danger">*</span></label>
                    <select name="sponsor_category[0]" class="form-control" data-placeholder="Sponsor category">
                      <option value="">Select event category</option>
                      <option value="Gold Sponsor">Gold Sponsor</option>
                      <option value="Silver Sponsor">Silver Sponsor</option>
                      <option value="GSupporting Sponsor">GSupporting Sponsor</option>
                      <option value="Knowledge Partner">Knowledge Partner</option>
                    </select>
                    <div id="sponsor_category_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="control-label">Sponsor logo</label>
                    <input type="file" name="sponsors_logo[0]" class="form-control" accept="image/*">
                    <div id="sponsors_logo_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-1 mt-20">
                  <a href="javascript:void(0)" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a>
                </div>
              </div>
              <input type="hidden" name="sponsorcurrentindex" value="0">
            @endif
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary conferencesponsordetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection