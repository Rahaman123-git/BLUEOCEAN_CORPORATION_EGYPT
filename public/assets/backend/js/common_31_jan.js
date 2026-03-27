console.log('common.js loaded @', new Date().toISOString());
// JavaScript Document
'use strict';
const baseUrl = window.location.origin+'/';

var flashstatus = jQuery('span.flashstatus').text();
var flashmessage = jQuery('span.flashmessage').text();
var pagetype = jQuery('input[name="pagetype"]').val(); 
var subpagetype = jQuery('input[name="subpagetype"]').val(); 

jQuery(document).ready(function(e){
	jQuery.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
    'X-Requested-With': 'XMLHttpRequest'
  },
  beforeSend: function(){ jQuery('.loader').show(); },
  complete: function(){ jQuery('.loader').hide(); }
});

	// DataTables
if (jQuery.fn.DataTable && jQuery('#dataTable').length) {
  jQuery('#dataTable').DataTable();
}

// Select2  (fixes the old jQuery(this) misuse too)
if (jQuery.fn.select2 && jQuery('.multiple-select').length) {
  jQuery('.multiple-select').each(function () {
    jQuery(this).select2({
      theme: 'bootstrap4',
      width: jQuery(this).data('width')
        ? jQuery(this).data('width')
        : jQuery(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: jQuery(this).data('placeholder'),
      allowClear: Boolean(jQuery(this).data('allow-clear')),
    });
  });
}

// bootstrapMaterialDatePicker (date only)
if (jQuery.fn.bootstrapMaterialDatePicker && jQuery('.datepicker').length) {
  jQuery('.datepicker').bootstrapMaterialDatePicker({
    time: false,
    format: 'DD.MM.YYYY'
  });
}

// bootstrapMaterialDatePicker (datetime)
if (jQuery.fn.bootstrapMaterialDatePicker && jQuery('.datetimepicker').length) {
  jQuery('.datetimepicker').bootstrapMaterialDatePicker({
    format: 'DD.MM.YYYY HH:mm'
  });
}

// Summernote
if (jQuery.fn.summernote && jQuery('.summernote').length) {
  jQuery('.summernote').summernote({
    placeholder: '',
    tabsize: 2,
    height: 250,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['codeview', 'help']]
    ]
  });
}

	
	if(flashstatus == 'SUCCESS'){
		jQuery.toast({
			heading: 'Success',
			text: flashmessage,
			loader: true,
			icon: 'success',
			position : 'top-right'
		});
	}
	
	if(flashstatus == 'ERROR'){
		jQuery.toast({
			heading: 'Error',
			text: flashmessage,
			loader: true,
			icon: 'error',
			position : 'top-right'
		});
	}

	jQuery(document).on('click', '.changepassworddetailssave', function(){
		jQuery('#changepassworddetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#changepassworddetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="changepassworddetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#changepassworddetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.employeedetailssave', function(){
		jQuery('#employeedetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#employeedetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="employeedetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#employeedetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.employeeremove', function(){
		var employeeid = jQuery(this).attr('employeeid');
		
		if(employeeid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'employees/'+employeeid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.coursecategorydetailssave', function(){
		jQuery('#coursecategorydetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#coursecategorydetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="coursecategorydetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#coursecategorydetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'category_description_en' || key == 'category_description_ar'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.coursecategoryremove', function(){
		var coursecategoryid = jQuery(this).attr('coursecategoryid');
		
		if(coursecategoryid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'courses/categories/'+coursecategoryid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	if(jQuery('input[name="affiliation_text_bg_color_code"]').length){
		const palette = jQuery('#palette')
		const colorvalue = jQuery('input[name="affiliation_text_bg_color_code"]');
		const colordisplay = jQuery('input[name="affiliation_text_bg_color"]');
	
		jQuery(palette).sbxColorChoice({
			selecionarCor: (color) => {
				$(colorvalue).val(color)
				colordisplay.css('background-color', color)
			},
			reseteCor: '#FFFFFF',
			// textResetColorButton: 'Custom text',
			// removePallet: '.co-hue-1, .co-hue-2, .co-hue-3, .co-hue-4'
		});
	}

	jQuery(document).on('click', '.courseaffiliationdetailssave', function(){
		jQuery('#courseaffiliationdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#courseaffiliationdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="courseaffiliationdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#courseaffiliationdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'affiliation_description_en' || key == 'affiliation_description_ar'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.courseaffiliationremove', function(){
		var courseaffiliationid = jQuery(this).attr('courseaffiliationid');
		
		if(courseaffiliationid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'courses/affiliations/'+courseaffiliationid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('change', 'select[name="course_type"]', function(){
		var coursecategorieshtml = '<option value="">Select course category</option>';

		if(jQuery(this).val() && jQuery('option:selected', this).attr('coursecategories')){
			var coursecategories = JSON.parse(jQuery('option:selected', this).attr('coursecategories'));
			
			jQuery(coursecategories).each(function(key, value){
				coursecategorieshtml = coursecategorieshtml + '<option value="'+ value.id +'">'+ value.name +'</option>';
			});
		}

		jQuery('select[name="course_category_id"]').html(coursecategorieshtml);
	});

	jQuery(document).on('click', '.coursedetailssave', function(){
		jQuery('#coursedetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#coursedetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="coursedetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#coursedetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'course_languages'){
							jQuery('[name="'+ key +'[]"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else if(
							key == 'course_overview_en' || key == 'course_overview_ar' || 
							key == 'course_outline_en' || key == 'course_outline_ar' || 
							key == 'course_association_en' || key == 'course_association_ar'
						){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	var currentindex = parseInt(jQuery('input[name="coursemodulecurrentindex"]').val()); 
	jQuery(document).on('click', '.coursemoduleadd', function(){
		var module = '';
		currentindex = (currentindex + 1);

		jQuery('ul.nav > li.nav-item > a.nav-link').each(function(){
			if(jQuery(this).hasClass('active')){
				module = jQuery(this).attr('module');
			}
		});
		
		var html = '<div class="row mb-3 coursemoduletitle"><div class="col-md-10"><div class="form-group"><label class="control-label">Course module title<span class="text-danger">*</span></label><input type="text" name="course_module_title_en['+module+']['+currentindex+']" class="form-control" placeholder="Course module title"><div id="course_module_title_en_'+module+'_'+currentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-2 mt-3 coursemoduleaction"><a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a><a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a></div></div><div class="row mb-3 coursemoduledetails"><div class="col-md-12"><div class="form-group"><label class="control-label">Course module details<span class="text-danger">*</span></label><div name="course_module_details_en['+module+']['+currentindex+']" class="summernote"></div><div id="course_module_details_en_'+module+'_'+currentindex+'" class="invalid-feedback"></div></div></div></div>';
		
		jQuery('div#'+module).find('div.coursemoduledetails:last').after(html);
		
		if(jQuery('div#'+module).find('.coursemoduletitle').length >= 2){
			if(jQuery('div#'+module).find('.coursemoduletitle').length == 2){
				jQuery(this).parent('div.coursemoduleaction').html('<a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a>');
			}

			jQuery(this).remove();
			jQuery('.summernote').summernote({
				placeholder: '',
				tabsize: 2,
				height: 250,
				toolbar: [
					['style', ['style']],
					['font', ['bold', 'underline', 'clear']],
					['color', ['color']],
					['para', ['ul', 'ol', 'paragraph']],
					['table', ['table']],
					['insert', ['link', 'picture', 'video']],
					['view', ['codeview', 'help']]//'fullscreen', 
				]
			});
		}
	});
	
	jQuery(document).on('click', '.coursemoduleremove', function(){
		var module = '';
		var $this = jQuery(this);

		jQuery('ul.nav > li.nav-item > a.nav-link').each(function(){
			if(jQuery(this).hasClass('active')){
				module = jQuery(this).attr('module');
			}
		});

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if(willDelete){
				$this.parent('div').parent('div.coursemoduletitle').next('div').remove();
				$this.parent('div').parent('div.coursemoduletitle').remove();
				
				if(jQuery('div#'+module).find('.coursemoduletitle').length == 1){
					jQuery(document).find('div#'+module).find('div.coursemoduletitle:eq(0)').find('div.coursemoduleaction').html('<a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a>');
				}else if(jQuery('div#'+module).find('.coursemoduletitle').length == 2){
					jQuery(document).find('div#'+module).find('div.coursemoduletitle:eq(0)').find('div.coursemoduleaction').html('<a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a>');
					jQuery(document).find('div#'+module).find('div.coursemoduletitle:eq(1)').find('div.coursemoduleaction').html('<a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a><a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a>');	
				}else if(jQuery('div#'+module).find('.coursemoduletitle').length > 2){
					jQuery(document).find('div#'+module).find('div.coursemoduletitle:last').find('div.coursemoduleaction').html('<a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a><a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a>');	
				}
			}
		});
	});

	jQuery(document).on('click', '.coursemoduledetailssave', function(){
		jQuery('#coursemoduledetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#coursemoduledetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="coursemoduledetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#coursemoduledetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						var baseKey = key.split('.')[0]; 
						var index = key.split('.')[1] || 0;
						
						if(key.match(/^course_module_(title|details)_en\.(\S+)\.(\d+)$/)) {
							var baseKey = key.split('.')[0];
							var dynamicString = key.split('.')[1];
							var index = key.split('.')[2];
							
							jQuery('[name="'+baseKey+'['+dynamicString+']['+index+']"]').addClass('is-invalid'); 
						    jQuery('div#'+baseKey+'_'+dynamicString+'_'+index).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery(document).find('[name="'+baseKey+'['+index+']"]').addClass('is-invalid'); 
							jQuery('div#'+baseKey+'_'+index).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.coursefullyearcalendardetailssave', function(){
		jQuery('#coursefullyearcalendardetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#coursefullyearcalendardetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="coursefullyearcalendardetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#coursefullyearcalendardetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){

					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.courseremove', function(){
		var courseid = jQuery(this).attr('courseid');
		
		if(courseid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'courses/'+courseid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.courseseminardetailssave', function(){
		jQuery('#courseseminardetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#courseseminardetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="courseseminardetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#courseseminardetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'seminar_description'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.courseseminarremove', function(){
		var courseseminarid = jQuery(this).attr('courseseminarid');
		
		if(courseseminarid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'courses/seminars/'+courseseminarid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.trainerdetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData($form[0]);

        jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.trainerremove', function(){
		var trainerid = jQuery(this).attr('trainerid');
		
		if(trainerid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'courses/trainers/'+trainerid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('change', 'select[name="testimonial_type"]', function(){
		if(jQuery(this).val() == 'TEXT_TESTIMONIAL'){
			jQuery('.texttestimonial').removeClass('d-none');
			jQuery('.videotestimonial').addClass('d-none');
		}else if(jQuery(this).val() == 'VIDEO_TESTIMONIAL'){
			jQuery('.texttestimonial').addClass('d-none');
			jQuery('.videotestimonial').removeClass('d-none');
		}else{
			jQuery('.videotestimonial').addClass('d-none');
			jQuery('.videotestimonial').removeClass('d-none');
		}
	});

	jQuery(document).on('change', 'select[name="testimonial_course_type"]', function(){
		var courseshtml = '<option value="">Select course</option>';

		if(jQuery(this).val() && jQuery('option:selected', this).attr('courses')){
			var courses = JSON.parse(jQuery('option:selected', this).attr('courses'));

			jQuery(courses).each(function(key, value){
				courseshtml = courseshtml + '<option value="'+ value.id +'">'+ value.course_title_en +'</option>';
			});
		}

		jQuery('select[name="course_id"]').html(courseshtml);
    
	});

	jQuery(document).on('click', '.coursetestimonialdetailssave', function(){
		jQuery('#coursetestimonialdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#coursetestimonialdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="coursetestimonialdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#coursetestimonialdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'client_testimonial'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.consultingcompanydetailssave', function(){
		jQuery('#consultingcompanydetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#consultingcompanydetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="consultingcompanydetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#consultingcompanydetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.consultingdetailssave', function(){
		jQuery('#consultingdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#consultingdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="consultingdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#consultingdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'boc_engagement_approach' || key == 'solutions_designed_delivered' || key == 'business_impact_delivered'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});
	
	jQuery(document).on('click', '.consultingtestimonialdetailssave', function(){
		jQuery('#consultingtestimonialdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#consultingtestimonialdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="consultingtestimonialdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#consultingtestimonialdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						if(key == 'client_testimonial'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.consultingtestimonialremove', function(){
		var consultingtestimonialid = jQuery(this).attr('consultingtestimonialid');
		
		if(consultingtestimonialid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'case-studies/testimonials/'+consultingtestimonialid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

jQuery(document).on('click', '.consultingremove', function(){
    var consultingid = jQuery(this).attr('consultingid');

    if(consultingid != ''){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                jQuery.ajax({
                    url: baseUrl + 'case-studies/' + consultingid,
                    data:{'_method': 'delete'},
                    type:"POST",
                    cache:false,
                    dataType:"json",
                    success: function(response){
                        if(response.status == 'success'){
                            window.location.reload();
                        }else if(response.status == 'error'){
                            window.location.reload();
                        }
                    },
                    error: function(xhr){
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    }
});


	jQuery(document).on('click', '.conferencecategorydetailssave', function(){
		jQuery('#conferencecategorydetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#conferencecategorydetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="conferencecategorydetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#conferencecategorydetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.conferencecategoryremove', function(){
		var conferencecategoryid = jQuery(this).attr('conferencecategoryid');
		
		if(conferencecategoryid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'events/categories/'+conferencecategoryid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.conferencesdetailssave', function(){
		jQuery('#conferencedetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#conferencedetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="conferencedetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#conferencedetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	var sponsorcurrentindex = parseInt(jQuery('input[name="sponsorcurrentindex"]').val()); 
	jQuery(document).on('click', '.newsponsorcategorydetailsrow', function(){
		sponsorcurrentindex = (sponsorcurrentindex + 1);
		var html = '<div class="row mb-3 sponsor"><div class="col-md-6"><div class="form-group"><label class="control-label">Sponsor category<span class="text-danger">*</span></label><select name="sponsor_category['+sponsorcurrentindex+']" class="form-control" data-placeholder="Sponsor category"><option value="">Select sponsor category</option><option value="Gold Sponsor">Gold Sponsor</option><option value="Silver Sponsor">Silver Sponsor</option><option value="GSupporting Sponsor">GSupporting Sponsor</option><option value="Knowledge Partner">Knowledge Partner</option></select><div id="sponsor_category_'+sponsorcurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-5"><div class="form-group"><label class="control-label">Sponsors logo</label><input type="file" name="sponsors_logo['+sponsorcurrentindex+']" class="form-control" accept="image/*"><div id="sponsors_logo_'+sponsorcurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-1 mt-20"><a href="javascript:void(0)" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a><a href="javascript:void(0)" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a></div></div>';
		
		jQuery('.sponsor:last').after(html);
		if(jQuery('.sponsor').length >= 2){
			jQuery(this).parent('div').html('<a href="javascript:void(0)" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a>');
		}
	});

	jQuery(document).on('click', '.removesponsorcategorydetailsrow', function(){
		var $this = jQuery(this);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if(willDelete){
				$this.parent('div').parent('div.sponsor').remove();
				
				if(jQuery('div.sponsor').length == 1){
					jQuery(document).find('div.sponsor:eq(0)').find('div:last').html('<a href="javascript:;" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a>');
				}else if(jQuery('div.sponsor').length == 2){
					jQuery(document).find('div.sponsor:eq(0)').find('div:last').html('<a href="javascript:;" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a>');
					jQuery(document).find('div.sponsor:eq(1)').find('div:last').html('<a href="javascript:;" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a><a href="javascript:;" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a>');	
				}else if(jQuery('div.sponsor').length > 2){
					jQuery(document).find('div.sponsor:last').find('div:last').html('<a href="javascript:;" class="newsponsorcategorydetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new sponsor category"></i></a><a href="javascript:;" class="removesponsorcategorydetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this sponsor category details"></i></a>');	
				}
			}
		});
	});

	jQuery(document).on('click', '.conferencesponsordetailssave', function(){
		jQuery('#conferencesponsordetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#conferencesponsordetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="conferencesponsordetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#conferencesponsordetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						var baseKey = key.split('.')[0]; 
						var index = key.split('.')[1] || 0;
						
						jQuery(document).find('[name="'+baseKey+'['+index+']"]').addClass('is-invalid'); 
						jQuery('div#'+baseKey+'_'+index).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	var keynotetopiccurrentindex = parseInt(jQuery('input[name="keynotetopiccurrentindex"]').val()); 
	jQuery(document).on('click', '.newkeynotetopicdetailsrow', function(){
		keynotetopiccurrentindex = (keynotetopiccurrentindex + 1);
		var html = '<div class="row mb-3 keynotetopic"><div class="col-md-6"><div class="form-group"><label class="control-label">Topic title<span class="text-danger">*</span></label><input type="text" name="topic_title['+keynotetopiccurrentindex+']" class="form-control" placeholder="Topic title"><div id="topic_title_'+keynotetopiccurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-5"><div class="form-group"><label class="control-label">Topic image</label><input type="file" name="topic_image['+keynotetopiccurrentindex+']" class="form-control" accept="image/*"><div id="topic_image_'+keynotetopiccurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-1 mt-20"><a href="javascript:void(0)" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a><a href="javascript:void(0)" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a></div></div><div class="row mb-3 keynotetopic"><div class="col-md-12"><div class="form-group"><label class="form-label">Topic details<span class="text-danger">*</span></label><div name="topic_details['+keynotetopiccurrentindex+']" class="summernote"></div><div id="topic_details_'+keynotetopiccurrentindex+'" class="invalid-feedback"></div></div></div></div>';
		
		jQuery('.keynotetopic:last').after(html);
		if(jQuery('.keynotetopic').length >= 4){
			jQuery(this).parent('div').html('<a href="javascript:void(0)" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');
		}

		jQuery('.summernote').summernote({
			placeholder: '',
			tabsize: 2,
			height: 250,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture', 'video']],
				['view', ['codeview', 'help']]//'fullscreen', 
			]
		});
	});

	jQuery(document).on('click', '.removekeynotetopicdetailsrow', function(){
		var $this = jQuery(this);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if(willDelete){
				$this.parent('div').parent('div.keynotetopic').next('div.keynotetopic').remove();
				$this.parent('div').parent('div.keynotetopic').remove();
				
				if(jQuery('div.keynotetopic').length == 2){
					jQuery(document).find('div.keynotetopic:eq(0)').find('div:last').html('<a href="javascript:;" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a>');
				}else if(jQuery('div.keynotetopic').length == 4){
					jQuery(document).find('div.keynotetopic:eq(0)').find('div:last').html('<a href="javascript:;" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');
					jQuery(document).find('div.keynotetopic:eq(2)').find('div:last').html('<a href="javascript:;" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a><a href="javascript:;" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');	
				}else if(jQuery('div.keynotetopic').length > 4){
					jQuery(document).find('div.keynotetopic').eq(-2).find('div:last').html('<a href="javascript:;" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a><a href="javascript:;" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');	
				}
			}
		});
	});

	jQuery(document).on('click', '.conferencekeynotetopicdetailssave', function(){
		jQuery('#conferencekeynotetopicdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#conferencekeynotetopicdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="conferencekeynotetopicdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#conferencekeynotetopicdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						var baseKey = key.split('.')[0]; 
						var index = key.split('.')[1] || 0;
						
						jQuery(document).find('[name="'+baseKey+'['+index+']"]').addClass('is-invalid'); 
						jQuery('div#'+baseKey+'_'+index).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});
	
	var speakercurrentindex = parseInt(jQuery('input[name="speakercurrentindex"]').val()); 
	jQuery(document).on('click', '.newspeakerdetailsrow', function(){
		speakercurrentindex = (speakercurrentindex + 1);
		var html = '<div class="row mb-3 speaker"><div class="col-md-6"><div class="form-group"><label class="control-label">Speaker name<span class="text-danger">*</span></label><input type="text" name="speaker_name['+speakercurrentindex+']" class="form-control" placeholder="Speaker name"><div id="speaker_name_'+speakercurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-6"><div class="form-group"><label class="control-label">Speaker designation<span class="text-danger">*</span></label><input type="text" name="speaker_designation['+speakercurrentindex+']" class="form-control" placeholder="Speaker designation"><div id="speaker_designation_'+speakercurrentindex+'" class="invalid-feedback"></div></div></div></div><div class="row mb-3 speaker"><div class="col-md-12"><div class="form-group"><label class="form-label">Speaker details</label><div name="speaker_details['+speakercurrentindex+']" class="summernote"></div><div id="speaker_details_['+speakercurrentindex+']" class="invalid-feedback"></div></div></div></div><div class="row mb-3 speaker"><div class="col-md-5"><div class="form-group"><label class="control-label">Speaker image</label><input type="file" name="speaker_image['+speakercurrentindex+']" class="form-control" accept="image/*"><div id="speaker_image_'+speakercurrentindex+'" class="invalid-feedback"></div></div></div><div class="col-md-1 mt-20"><a href="javascript:void(0)" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new speaker"></i></a><a href="javascript:void(0)" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this speaker details"></i></a></div></div>';
		
		jQuery('.speaker:last').after(html);
		if(jQuery('.speaker').length >= 6){
			jQuery(this).parent('div').html('<a href="javascript:void(0)" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this speaker details"></i></a>');
		}

		jQuery('.summernote').summernote({
			placeholder: '',
			tabsize: 2,
			height: 250,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture', 'video']],
				['view', ['codeview', 'help']]//'fullscreen', 
			]
		});
	});

	jQuery(document).on('click', '.removespeakerdetailsrow', function(){
		var $this = jQuery(this);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if(willDelete){
				$this.parent('div').parent('div.speaker').prev('div.speaker').prev('div.speaker').remove();
				$this.parent('div').parent('div.speaker').prev('div.speaker').remove();
				$this.parent('div').parent('div.speaker').remove();
				
				if(jQuery('div.speaker').length == 3){
					jQuery(document).find('div.speaker:eq(2)').find('div:last').html('<a href="javascript:;" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a>');
				}else if(jQuery('div.speaker').length == 6){
					jQuery(document).find('div.speaker:eq(2)').find('div:last').html('<a href="javascript:;" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');
					jQuery(document).find('div.speaker:eq(5)').find('div:last').html('<a href="javascript:;" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a><a href="javascript:;" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');	
				}else if(jQuery('div.speaker').length > 6){
					jQuery(document).find('div.speaker').eq(-1).find('div:last').html('<a href="javascript:;" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a><a href="javascript:;" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>');	
				}
			}
		});
	});

	jQuery(document).on('click', '.conferencespeakerdetailssave', function(){
		jQuery('#conferencespeakerdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#conferencespeakerdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="conferencespeakerdetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: jQuery('#conferencespeakerdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						var baseKey = key.split('.')[0]; 
						var index = key.split('.')[1] || 0;
						
						jQuery(document).find('[name="'+baseKey+'['+index+']"]').addClass('is-invalid'); 
						jQuery('div#'+baseKey+'_'+index).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.conferenceremove', function(){
		var conferenceid = jQuery(this).attr('conferenceid');
		
		if(conferenceid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'events/'+conferenceid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.newsdetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData($form[0]);

        jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.newsremove', function(){
		var newsid = jQuery(this).attr('newsid');
		
		if(newsid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'news/'+newsid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.blogdetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData($form[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

        jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
    					const fieldKey = key.includes('.') ? key.split('.').join('\\.') : key;
						
						if(fieldKey == 'banner_images'){
							jQuery('[name="banner_images[]"]').addClass('is-invalid'); 
							jQuery('div#' + fieldKey).html(value[0]).addClass('invalid-feedback');
						}else if(key == 'introduction_details' || key == 'blog_details'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback');
						} 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.blogremove', function(){
		var blogid = jQuery(this).attr('blogid');
		
		if(blogid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'blog-events/'+blogid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.blogeventdetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData($form[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

        jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
    					const fieldKey = key.includes('.') ? key.split('.').join('\\.') : key;
						
						if(fieldKey == 'banner_images'){
							jQuery('[name="banner_images[]"]').addClass('is-invalid'); 
							jQuery('div#' + fieldKey).html(value[0]).addClass('invalid-feedback');
						}else if(key == 'event_details' || key == 'event_highlighted_details'){
							jQuery(document).find('[name="'+key+'"]').next('div.note-editor').addClass('form-control is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback');
						} 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.blogeventremove', function(){
		var blogid = jQuery(this).attr('blogid');
		var blogeventid = jQuery(this).attr('blogeventid');
		
		if(blogid != '' && blogeventid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'blog-events/'+blogid+'/'+blogeventid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.advisorydetailssave', function(e){
  e.preventDefault(); // good practice
  var $form = jQuery(this).closest('form');
  $form.find(".is-invalid").removeClass('is-invalid');
  $form.find("div.invalid-feedback").html('');

 $form.find('.summernote').each(function () {
    var $el = jQuery(this);
    var html = $el.summernote('code');
    $el.val(html === '<p><br></p>' ? '' : html);
  });

  var formData = new FormData($form[0]);

  // overwrite Summernote values
  $form.find('.summernote').each(function(){
    var name = jQuery(this).attr('name');
    var html = jQuery(this).summernote('code');
    formData.set(name, html === '<p><br></p>' ? '' : html);
  });

  jQuery.ajax({
    url: $form.attr('action'),
    data: formData,
    type: "POST",
    dataType : "json",
    contentType: false,
    processData: false,
    cache: false,
    global: false,
    success: function(response){
      if(response.status == 'success'){
        window.location.href = response.redirectUrl;
      }
    },
    error: function(xhr){
      if(xhr.status === 422){
        let errors = xhr.responseJSON.errors;
        jQuery.each(errors, function(key, value){
          jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
          jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
        });
      } else {
        window.location.reload();
      }
    }
  });
});


	jQuery(document).on('click', '.advisoryremove', function(){
		var advisoryid = jQuery(this).attr('advisoryid');
		
		if(advisoryid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'advisories/'+advisoryid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.awardcategorydetailssave', function(){
		jQuery('#awardcategorydetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#awardcategorydetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="awardcategorydetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#awardcategorydetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});
	
	jQuery(document).on('click', '.awardcategoryremove', function(){
		var awardcategoryid = jQuery(this).attr('awardcategoryid');
		
		if(awardcategoryid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'awards/categories/'+awardcategoryid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.awarddetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="awarddetailsform"]')[0]);

		jQuery('.summernote').each(function(){
			if(jQuery(this).summernote('code') == '<p><br></p>'){
				formData.append(jQuery(this).attr('name'), '');
			}else{
				formData.append(jQuery(this).attr('name'), jQuery(this).summernote('code'));
			}
		});

		jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
    					const fieldKey = key.includes('.') ? key.split('.').join('\\.') : key;
						
						if(fieldKey == 'award_image'){
							jQuery('[name="award_image[]"]').addClass('is-invalid'); 
							jQuery('div#' + fieldKey).html(value[0]).addClass('invalid-feedback');
						}else{
							jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
							jQuery('div#'+key).html(value[0]).addClass('invalid-feedback');
						} 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.awardremove', function(){
		var awardid = jQuery(this).attr('awardid');
		
		if(awardid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'awards/'+awardid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.gallerydetailssave', function(){
		jQuery('#eventdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#gallerydetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="gallerydetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#gallerydetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.galleryremove', function(){
		var galleryid = jQuery(this).attr('galleryid');
		var media = jQuery(this).attr('media');
		var tag = jQuery(this).attr('tag');
		
		if(galleryid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'galleries/'+media+'/'+tag+'/'+galleryid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.leadremove', function(){
		var leadid = jQuery(this).attr('leadid');
		
		if(leadid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'leads/'+leadid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});
	
	jQuery(document).on('click', '.pagesettingdetailssave', function(){
		jQuery('#pagesettingdetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#pagesettingdetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="pagesettingdetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#pagesettingdetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.pagesettingremove', function(){
		var pagesettingid = jQuery(this).attr('pagesettingid');
		
		if(pagesettingid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'website-content/page-settings/'+pagesettingid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.marqueedetailssave', function(){
		jQuery('#marqueedetailsform').find(".is-invalid").removeClass('is-invalid');
		jQuery('#marqueedetailsform').find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="marqueedetailsform"]')[0]);

		jQuery.ajax({
			url: jQuery('#marqueedetailsform').attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.marqueeremove', function(){
		var marqueeid = jQuery(this).attr('marqueeid');
		
		if(marqueeid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'website-content/marquees/'+marqueeid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});

	jQuery(document).on('click', '.locationdetailssave', function(){
		var $form = jQuery(this).closest('form');
		$form.find(".is-invalid").removeClass('is-invalid');
		$form.find("div.invalid-feedback").html('');
		var formData = new FormData(jQuery('form[name="locationdetailsform"]')[0]);

		jQuery.ajax({
			url: $form.attr('action'),
			data:formData,
			type: "POST",
            dataType : "json",	
			contentType: false,
			processData: false,
			cache: false,
  			global: false,
			success: function(response){
				if(response.status == 'success'){
					window.location.href = response.redirectUrl;
				}
			},
			error: function(xhr, status, error){
				if(xhr.status === 422){
					let errors = xhr.responseJSON.errors;
					jQuery.each(errors, function(key, value){
						jQuery('[name="'+ key +'"]').addClass('is-invalid'); 
						jQuery('div#'+key).html(value[0]).addClass('invalid-feedback'); 
					});
				}else{
					window.location.reload();
				}
			}
		});
	});

	jQuery(document).on('click', '.locationremove', function(){
		var locationid = jQuery(this).attr('locationid');
		
		if(locationid != ''){
			swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if(willDelete){
					jQuery.ajax({
						url: baseUrl + 'website-content/locations/'+locationid,
						data:{'_method': 'delete'},
						type:"POST",
						cache:false,
						dataType:"json",
						success: function(response){
							if(response.status == 'success'){
								window.location.reload();
							}else if(response.status == 'error'){
								window.location.reload();
							}
						},
						error: function(){
							console.log("Error");
						}
					});
				}
			});
		}
	});
});