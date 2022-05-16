<div class="content-wrapper" style="min-height: 1273px !important; height: 2418px;">	 
		<div class="body-overlay" style="display: none;">
		  <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
		</div>
		 <script>
		   $(".body-overlay").css("display","block");
		   $("body").css("overflow-y","hidden");
		 </script>
			            <link rel="stylesheet" href="/dasinfoau/php/gym/css/bootstrap-multiselect.css"><script src="/dasinfoau/php/gym/js/bootstrap-multiselect.js"></script><script type="text/javascript">
$(document).ready(function() {
	var m_id = $('.membership_id').val();
	var ajaxurl = $("#mem_class_url").val();
	var group = "";
	var curr_data = { m_id : m_id,group:group};
	
	$(".class_list").html("");
	$.ajax({
		url : ajaxurl,
		type : "POST",
		data : curr_data,
		success : function(response){
			$(".class_list").append(response);
			$(".class_list").multiselect("rebuild");
			
			return false;
		},
		error : function(e){

			console.log(e.responseText);
		}
	});


	$('.inquiry_date').on('change',function(){
		var date = $('.inquiry_date').datepicker('getDate'); 
		date.setDate(date.getDate());
			$(".trial_end_date").datepicker("option","minDate", date); 
	})
});
$(document).ready(function() {
	
			
		
		
	$('.group_list').multiselect({
		includeSelectAllOption: true	
	});
	
	var box_height = $(".box").height();
	var box_height = box_height + 100 ;
	$(".content-wrapper").css("height",box_height+"px");
	
	$('.class_list').multiselect({
		includeSelectAllOption: true		
	});
	
	
	$(".mem_valid_from").on("change",function(ev){
				
		var ajaxurl = $("#mem_date_check_path").val();
		
		var date = $('.mem_valid_from').datepicker('getDate');  
		date.setDate(date.getDate());
		date1=formatDate(date);
	
		var membership = $(".membership_id option:selected").val();	
		
		if(membership != "")
		{
			var curr_data = { date : date1, membership:membership};
			$(".valid_to").val("Calculating date..");
			$.ajax({
				url :ajaxurl,
				type : 'POST',
				data : curr_data,
				success : function(response)
				{
			
					$(".valid_to,.check").datepicker({ language: "en",
						 dateFormat :"MM d, yy",
						 
					});
					$(".valid_to,.check").datepicker($.datepicker.regional['en']);
					$( ".valid_to,.check" ).datepicker( "setDate",  new Date(response) );
				}
			});
		}else{
			$(".valid_to").val("Select Membership");
		}
	});		
});

function validate_multiselect()
{		
		var classes = $("#class_list").val();
		if(classes == null)
		{
			var message = "Please Select Class or Add class class first.";
			alert(message);
			return false;
		}else{
			return true;
		}		
}
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

</script>

<section class="content">
	<br>
	<div class="col-md-12 box box-default" style="border-top: 3px solid rgb(175, 29, 29);">		
		<div class="box-header">
			<section class="content-header">
			  <h1>
				<i class="fa fa-user"></i>
				Add Member				<small>Member</small>
			  </h1>
			  <ol class="breadcrumb">
				<a href="/dasinfoau/php/gym/gym-member/member-list" class="btn btn-flat btn-custom"><i class="fa fa-bars"></i> Members List</a>
			  </ol>
			</section>
		</div>
		<hr>
		<div class="box-body">
		<form enctype="multipart/form-data" method="post" accept-charset="utf-8" class="validateForm form-horizontal" role="form" onsubmit="return validate_multiselect()" id="form" action="/dasinfoau/php/gym/gym-member/addMember/"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><fieldset><legend>Personal Information</legend><div class="form-group"><label class="control-label col-md-2" for="member_id">Member ID</label><div class="col-md-6"><div class="input text"><input type="text" name="member_id" class="form-control" disabled="disabled" id="member_id" value="M50522"></div></div></div><div class="form-group"><label class="control-label col-md-2" for="first_name">First Name<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="first_name" class="form-control validate[required,custom[onlyLetterSp],maxSize[30]]" id="first_name" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="middle_name">Middle Name</label><div class="col-md-6"><div class="input text"><input type="text" name="middle_name" class="form-control validate[custom[onlyLetterSp],maxSize[30]]" id="middle_name" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="last_name">Last Name<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="last_name" class="form-control validate[required,custom[onlyLetterSp],maxSize[30]]" id="last_name" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="gender">Gender<span class="text-danger"> *</span></label><div class="col-md-6 checkbox"><input type="hidden" name="gender" value=""><label for="gender-male"><input type="radio" name="gender" value="male" class="gender" id="gender-male" checked="checked"> Male</label><label for="gender-female"><input type="radio" name="gender" value="female" class="gender" id="gender-female"> Female</label></div></div><div class="form-group"><label class="control-label col-md-2" for="birth_date">Date of birth<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="birth_date" autocomplete="off" class="dob form-control  validate[required]  hasDatepicker" id="birth_date" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="assign_group">Group</label><div class="col-md-6 module_padding"><input type="hidden" name="assign_group" value=""><select name="assign_group[]" multiple="multiple" class="form-control group_list" id="assign_group" style="display: none;"><option value="1">Body Building</option><option value="2">Aerobics</option><option value="3">General Training</option><option value="4">Weight Gain</option><option value="5">Weight Loss</option><option value="6">Yoga</option></select><div class="btn-group open"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" aria-expanded="true"><span class="multiselect-selected-text">None selected</span> <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all">  Select all</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="1"> Body Building</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="2"> Aerobics</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="3"> General Training</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="4"> Weight Gain</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="5"> Weight Loss</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="6"> Yoga</label></a></li></ul></div></div><div class="col-md-2"><a href="/dasinfoau/php/gym/GymGroup/addGroup/" class="btn btn-flat btn-default">Add Group</a></div></div></fieldset><fieldset><legend>Contact Information</legend><div class="form-group"><label class="control-label col-md-2" for="address">Address<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="address" class="form-control validate[required,maxSize[150]]" id="address" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="city">City<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="city" class="form-control validate[required,custom[onlyLetterSp],maxSize[20]]" id="city" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="state">State</label><div class="col-md-6"><div class="input text"><input type="text" name="state" class="form-control validate[custom[onlyLetterSp],maxSize[20]]" id="state" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="zipcode">Zip code<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="zipcode" class="form-control validate[required,custom[onlyNumberSp],maxSize[10]]" id="zipcode" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="mobile">Mobile Number<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input-group"><div class="input-group-addon">+61</div><div class="input text"><input type="text" name="mobile" class="form-control validate[required,custom[onlyNumberSp],maxSize[15]]" id="mobile" value=""></div></div></div></div><div class="form-group"><label class="control-label col-md-2" for="phone">Phone</label><div class="col-md-6"><div class="input text"><input type="text" name="phone" class="form-control validate[custom[onlyNumberSp],maxSize[15]]" id="phone" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="email">Email<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="email" class="form-control validate[required,custom[email]]" id="email" value=""></div></div></div></fieldset><fieldset><legend>Physical Information</legend><div class="form-group"><label class="control-label col-md-2" for="weight">Weight</label><div class="col-md-6"><div class="input text"><input type="text" name="weight" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="KG" id="weight" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="height">Height</label><div class="col-md-6"><div class="input text"><input type="text" name="height" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Centimeter" id="height" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="chest">Chest</label><div class="col-md-6"><div class="input text"><input type="text" name="chest" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Inches" id="chest" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="waist">Waist</label><div class="col-md-6"><div class="input text"><input type="text" name="waist" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Inches" id="waist" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="thing">Thigh</label><div class="col-md-6"><div class="input text"><input type="text" name="thing" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Inches" id="thing" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="arms">Arms</label><div class="col-md-6"><div class="input text"><input type="text" name="arms" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Inches" id="arms" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="fat">Fat</label><div class="col-md-6"><div class="input text"><input type="text" name="fat" class="form-control validate[custom[onlyNumberSp],maxSize[3]]" placeholder="Percentage" id="fat" value=""></div></div></div></fieldset><fieldset><legend>Login Information</legend><div class="form-group"><label class="control-label col-md-2" for="username">Username<span class="text-danger"> *</span></label><div class="col-md-6"><div class="input text"><input type="text" name="username" class="form-control validate[required]" id="username" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="password">Password<span class="text-danger"> *</span></label><div class="col-md-6"><input type="password" name="password" class="form-control validate[required]" id="password" value=""></div></div><div class="form-group"><label class="control-label col-md-2" for="image">Display Image</label><div class="col-md-4"><input type="file" name="image" class="form-control" id="imgInp">
				<script>
					function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();
					
							reader.onload = function (e) {
								$('#blah').attr('style', 'display:inline');
								$('#blah').attr('src', e.target.result);
							}
					
							reader.readAsDataURL(input.files[0]);
						}
					}
					
					$('#imgInp').change(function(){
						readURL(this);
					});
				</script>
			<br><img src="/dasinfoau/php/gym/webroot/upload/Thumbnail-img.png" class="img-responsive" id="blah" height="100px" width="150px"></div></div></fieldset><fieldset><legend>More Information</legend><div class="form-group"><label class="control-label col-md-2" for="assign_staff_mem">Select Staff Member<span class="text-danger"> *</span></label><div class="col-md-6 module_padding"><select name="assign_staff_mem" class="form-control validate[required]" id="assign_staff_mem"><option value="">Select Staff Member</option><option value="2">Sergio Romero</option></select></div><div class="col-md-2"><a href="/dasinfoau/php/gym/StaffMembers/addStaff/" class="btn btn-flat btn-default">Add Staff</a></div></div><div class="form-group"><label class="control-label col-md-2" for="intrested_area">Interested Area</label><div class="col-md-6 module_padding"><select name="intrested_area" class="form-control interest_list" id="intrested_area"><option value="">Select Interest</option><option value="1">Body Build</option></select></div><div class="col-md-2"><a href="javascript:void(0)" class="btn btn-flat btn-default interest-list" data-url="/dasinfoau/php/gym/GymAjax/interestList">Add/Remove</a></div></div><div class="form-group"><label class="control-label col-md-2" for="g_source">Source</label><div class="col-md-6 module_padding"><select name="g_source" class="form-control source_list" id="g_source"><option value="">Select Source</option><option value="1">News Paper</option></select></div><div class="col-md-2"><a href="javascript:void(0)" class="btn btn-flat btn-default source-list" data-url="/dasinfoau/php/gym/GymAjax/sourceList">Add/Remove</a></div></div><div class="form-group"><label class="control-label col-md-2" for="referrer_by">Referred By</label><div class="col-md-6 module_padding"><select name="referrer_by" class="form-control" id="referrer_by"><option value="">Select Staff Member</option><option value="2">Sergio Romero</option></select></div><div class="col-md-2"><a href="/dasinfoau/php/gym/StaffMembers/addStaff/" class="btn btn-flat btn-default">Add Staff</a></div></div><div class="form-group"><label class="control-label col-md-2" for="email">Inquiry Date</label><div class="col-md-6"><div class="input text"><input type="text" name="inquiry_date" autocomplete="off" class="form-control inquiry_date date hasDatepicker" id="dp1651750860175" value=""></div></div></div><div class="form-group"><label class="control-label col-md-2" for="email">Trial End Date</label><div class="col-md-6"><div class="input text"><input type="text" name="trial_end_date" autocomplete="off" class="form-control trial_end_date date hasDatepicker" id="dp1651750860176" value=""></div></div></div>			
			<div class="form-group">
				<div class="control-label col-md-2">
					<label>Member Type</label>
				</div>
				<div class="col-md-6">
					<label class="radio-inline"><input type="radio" name="member_type" value="Member" class="membership_status_type" checked="">Member</label>
					<label class="radio-inline"><input type="radio" name="member_type" value="Prospect" class="membership_status_type">Prospect</label>
					<label class="radio-inline"><input type="radio" name="member_type" value="Alumni" class="membership_status_type">Alumni</label>
				</div>
			</div>	
			
			<div class="form-group class-member"><label class="control-label col-md-2" for="email">Membership<span class="text-danger"> *</span></label><div class="col-md-6 module_padding"><select name="selected_membership" class="form-control validate[required] membership_id"><option value="">Select Membership</option><option value="1">Platinum Membership</option><option value="2">Gold Membership</option><option value="3">Silver Membership</option></select></div><div class="col-md-2"><a href="/dasinfoau/php/gym/Membership/add/" class="btn btn-flat btn-default">Add Membership</a></div></div><div class="form-group"><label class="control-label col-md-2" for="email">Class<span class="text-danger"> *</span></label><div class="col-md-6 module_padding"><input type="hidden" name="assign_class" value=""><select name="assign_class[]" multiple="multiple" class="class_list form-control" id="class_list" style="display: none;"></select><div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected"><span class="multiselect-selected-text">None selected</span> <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"></ul></div></div><div class="col-md-2"><a href="/dasinfoau/php/gym/ClassSchedule/addClass/" class="btn btn-flat btn-default">Add Class</a></div></div><div class="form-group class-member"><label class="control-label col-md-2" for="email">Membership Valid From<span class="text-danger">*</span></label><div class="col-md-2"><div class="input text"><input type="text" name="membership_valid_from" autocomplete="off" class="form-control validate[required] date mem_valid_from hasDatepicker" id="dp1651750860177" value=""></div></div><div class="col-md-1 no-padding text-center">To</div><div class="col-md-2"><div class="input text"><input type="text" name="membership_valid" class="form-control validate[required] valid_to" disabled="disabled" id="" value=""></div>			<input type="hidden" name="membership_valid_to" class="check" value="">
			</div></div><div class="form-group"><label class="control-label col-md-2" for="email">First Payment Date</label><div class="col-md-6"><div class="input text"><input type="text" name="first_pay_date" autocomplete="off" class="form-control first_pay_date date hasDatepicker" id="dp1651750860178" value=""></div></div></div></fieldset><br><button class="col-md-offset-2 btn btn-flat btn-success submit_button" name="add_member" id="submitButton" type="submit" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);">Save Member</button></form>		<input type="hidden" value="/dasinfoau/php/gym/GymAjax/get_membership_end_date" id="mem_date_check_path">
		<input type="hidden" value="/dasinfoau/php/gym/GymAjax/get_membership_classes" id="mem_class_url">
		</div>	
		<div class="overlay gym-overlay" style="display: none;">
		  <i class="fa fa-refresh fa-spin"></i>
		</div>
	</div>
</section>
<script>
	// Disable button after click 
	$(document).on('submit','#form',function(){
		var valid = $("#form").validationEngine('validate')
            if (valid == true) {
                $(".submit_button").attr('disabled', 'disabled');
            } 		
	});
	// $('#form').submit(function(e){
	// 	$(this).children('button[type=submit]').attr('disabled', 'disabled');			
	// });

	$(".membership_status_type").change(function() {
		if($(this).val() == "Prospect" || $(this).val() == "Alumni" ) {
			$(".class-member").hide("SlideDown");
			$(".class-member input,.class-member select").attr("disabled", "disabled");				
		}else {
			$(".class-member").show("SlideUp");
			$(".class-member input,.class-member select").removeAttr("disabled");	
			$("#available_classes").attr("disabled", "disabled");
		}
	});
	if($(".membership_status_type:checked").val() == "Prospect" || $(".membership_status_type:checked").val() == "Alumni") { 
		$(".class-member").hide("SlideDown");
		$(".class-member input,.class-member select").attr("disabled", "disabled");		
	}

	
</script>	
			<div class="modal fade gym-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg gym-modal">
				<div class="modal-content">			
				
				</div>
			  </div>
			</div>
      </div>