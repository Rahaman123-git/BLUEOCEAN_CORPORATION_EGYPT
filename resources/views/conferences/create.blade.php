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
          <li class="breadcrumb-item active" aria-current="page">Event details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="conferencedetailsform" id="conferencedetailsform" action="{{ route('conferences.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event category<span class="text-danger">*</span></label>
                  </div>
                  <select name="event_category" id="eventcategory" class="form-control" data-placeholder="Event category">
                    <option value="">Select event category</option>
                    <option value="IPSC">IPSC</option>
                    <option value="IHRC">IHRC</option>
                    <option value="CXO">CXO</option>
                    <option value="BOWLD">BOWLD</option>
                  </select>
                  <div id="event_category" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event title<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="event_title" id="eventtitle" class="form-control" placeholder="Event title">
                  <div id="event_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event logo<span class="text-danger">*</span></label>
                  </div>
                  <input type="file" name="event_logo" class="form-control" id="eventlogo" accept="image/*">
                  <div id="event_logo" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">First line text beside logo<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="text" name="first_line_text_beside_logo" id="firstlinetextbesidelogo" class="form-control" placeholder="First line text beside logo">
                  <div id="first_line_text_beside_logo" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Second line text beside logo<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="text" name="second_line_text_beside_logo" id="secondlinetextbesidelogo" class="form-control" placeholder="Second line text beside logo">
                  <div id="second_line_text_beside_logo" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Banner image/video<span class="text-danger">*</span></label>
                  </div>
                  <input type="file" name="banner_file" class="form-control" id="bannerfile" accept="image/*,video/mp4">
                  <div id="banner_file" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Home page banner image<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="file" name="home_page_banner_file" class="form-control" id="homepagebannerfile" accept="image/*">
                  <div id="home_page_banner_file" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event category page banner image<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="file" name="event_category_page_banner_file" class="form-control" id="eventcategorypagebannerfile" accept="image/*,video/mp4">
                  <div id="event_category_page_banner_file" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Summary text beside logo<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <textarea name="summary_text_beside_logo" id="summarytextbesidelogo" class="form-control" placeholder="Summary text beside logo"></textarea>
                  <div id="summary_text_beside_logo" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event hotel image<span class="text-danger">*</span></label>
                  </div>
                  <input type="file" name="event_hotel_image" class="form-control" id="eventhotelimage" accept="image/*">
                  <div id="event_hotel_image" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event hotel name<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="event_hotel_name" id="eventhotelname" class="form-control" placeholder="Event hotel name">
                  <div id="event_hotel_name" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event location<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="event_location" id="eventlocation" class="form-control" placeholder="Event location">
                  <div id="event_location" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Event date<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="event_date" id="eventhotelname" class="form-control datepicker" placeholder="Event date">
                  <div id="event_date" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">First line text beside event hotel image<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="text" name="first_line_text_beside_event_hotel_image" id="firstlinetextbesideeventhotelimage" class="form-control" placeholder="First line text beside event hotel image">
                  <div id="first_line_text_beside_event_hotel_image" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Second line text beside event hotel image<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <input type="text" name="second_line_text_beside_event_hotel_image" id="secondlinetextbesideeventhotelimage" class="form-control" placeholder="Event location">
                  <div id="second_line_text_beside_event_hotel_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">No of delegates<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="no_of_delegates" id="noofdelegates" class="form-control" placeholder="No of delegates">
                  <div id="no_of_delegates" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">No of organizations<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="no_of_organizations" id="nooforganizations" class="form-control" placeholder="No of organizations">
                  <div id="no_of_organizations" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">No of speakers<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="no_of_speakers" id="noofspeakers" class="form-control" placeholder="No of speakers">
                  <div id="no_of_speakers" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Registration fees<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="registration_fees" id="registrationfees" class="form-control" placeholder="Registration fees">
                  <div id="registration_fees" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Participant sectors<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="participan_sectors" class="summernote"></div>
                  <div id="participan_sectors" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Conference opportunities<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="conference_opportunities" class="summernote"></div>
                  <div id="conference_opportunities" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Sponsor advantages<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="sponsor_advantages" class="summernote"></div>
                  <div id="sponsor_advantages" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Individual award categories<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="individual_award_categories" class="summernote"></div>
                  <div id="individual_award_categories" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Organization award categories<span class="text-danger">*</span></label>
                    <i class="bi bi-info-circle-fill text-primary ms-2" role="button" data-bs-toggle="modal" data-bs-target="#infoModal"></i>
                  </div>
                  <div name="organization_award_categories" class="summernote"></div>
                  <div id="organization_award_categories" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="control-label mb-0">Registration ZOHO url<span class="text-danger">*</span></label>
                  </div>
                  <input type="text" name="registration_url" id="registrationurl" class="form-control" placeholder="Registration ZOHO url">
                  <div id="registration_url" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('conferences.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary conferencesdetailssave">Save</a>
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
          <h5 class="modal-title">Reference area in the frontend</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body text-center"></div>
      </div>
    </div>
  </div>
  <!--Info Modal-->
@endsection