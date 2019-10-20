
$(document).ready(function(){
		viewData();
});

function getModal(url,title=null){
	$('#modal').modal();
	$('.modal-title').text(title);
	$('.modal-body').load(url);
}	  	
function viewData(){
	var table = $('#PersonData tbody');
	table.empty();
	$.ajax({
		url: 'route/getData.php',
		type: 'GET',
		dataType: 'json',
		success: function(data){

			var row = '';
			$.each(data, function(index, value){
				row += "<tr>";
				row += '<td>'+value.first_name+" "+value.last_name+'</td>';
				row += '<td>'+value.email+'</td>';
				row += '<td>'+value.contact+'</td>';
				row += '<td><a class="btn btn-success btn-sm m-1" href="javascript:;" onclick="singleView('+value.id+')">View</a><a class="btn btn-info btn-sm m-1," href="javascript:;" onclick="editData('+value.id+')">Edit</a><a class="btn btn-danger btn-sm m-1" href="javascript:;" onclick="deletedata('+value.id+')">Delete</a></td>';
				row += "</tr>";
			});
			table.append(row);
		},
		error: function(){

		}
	});
}

function editData(id)
{
	getModal('modal-form/editPage.php','Edit Data');

	$.ajax({
		url: 'route/editQuery.php',
		method: 'POST',
		dataType: 'json',
		data: {
			'id': id
		},
		success: function(response){
			// console.log(response);
			$('#updateForm').find('#first_name').val(response.first_name);
			$('#updateForm').find('#last_name').val(response.last_name);
			$('#updateForm').find('#email').val(response.email);
			$('#updateForm').find('#dob').val(response.dob);
			$('#updateForm').find('#contact').val(response.contact);
			$('#updateForm').find('#city').val(response.city);
			$('#updateForm').find('#state').val(response.state);
			$('#updateForm').find('#zip').val(response.zip);
			$('#updateForm').find('#gender').val(response.gender);
			$('#updateForm').find('#hidden_id').val(response.id);
			// console.log($data);
		},
		error: function(response){
			console.log(response);
		},
	});
}
		
function deletedata(id){
	// alert(id);
	if(confirm("Are want to delete data !")){
		$.ajax({
			url: 'route/delete.php',
			method: 'POST',
			data: {'id': id},
			success: function(response){
				response = JSON.parse(response);
				console.log(response);
				if (response.status == true) {
					alert(response.message);
					viewData();
				}else {
					alert(response.message);
				}
				 console.log(response);
			},
			error: function(response){
				console.log(response);
			},
		});
	}
}
	
  function submits(){
  	var data = $("#personForm").serializeArray();
  	var stmt = false;
  	var fullEmpty = true;
  	var check = false;
  	var radio = $("input[name='gender']:checked" ).length;
  	var checkbox = $("input[name='status']:checked").length;
  
  	radio > 0 ? $("#gender_msg").hide() : $("#gender_msg").show() ;
  	checkbox > 0 ? $("#gender_msg").hide() : $("#status_msg").show() ;
  	if((radio > 0) && (checkbox > 0)){
  		check = true;
	}
  	$.each(data,function(index,value){
  		if(value.value != ""){
  			fullEmpty = false;
  			stmt = true;
  		}
  		if(value.name == 'email'){
			if(value.value != ""){
				ValidateEmail(value.value);
			}
		}
  	});
  	if(fullEmpty == false){
  		$.each(data,function(index,value){
	  		if(value.value == ""){
	  			stmt = false;
	  			$("#"+value.name+"_msg").show();
	  			
	  		}else{
	  			$("#"+value.name+"_msg").hide();
	  			$("#all_msg").hide();
	  		}
	  	});
	  // 
  	}else{
  		$("#all_msg").show();
  		$("#gender_msg").hide();
  		$("#status_msg").hide();
  	}
  
  	if((stmt==true) && (check==true)){
	  	$.ajax({
	        url: 'route/insert.php',
	        type: 'POST',
	        dataType: 'json',
	        data: data,
	        success: function(data){
	            console.log(data);
	            $("#modal").modal('hide');
	            alert(data.message);
	            viewData();
	        },
	        error: function(){

	        }
		});
  	}

}
function ValidateEmail(inputText)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(inputText.match(mailformat))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		return false;
	}
}

function update(){
    // alert();
    var form  = $("#updateForm");
       formData = form.serialize();
      	
	  $.ajax({
	    url: 'route/updateQuery.php',
	    method: 'POST',
	    dataType: 'json',
	    data: formData ,
	    success: function(data){
	      console.log(data);
	      $("#modal").modal('hide');
	      alert(data.message);
	      // viewData();
	    },
	    error: function(data){
	      console.log(data);
	    },
	  });
 }

 function singleView(id){

 	getModal('modal-form/singleData.php','View The Person');

	$.ajax({
		url: 'route/editQuery.php',
		method: 'POST',
		dataType: 'json',
		data: {
			'id': id
		},
		success: function(response){

			console.log(response);
			  $('#viewForm').find('#full_name').val(response.first_name+' '+response.last_name);
			  $('#viewForm').find('#email').val(response.email);
			  $('#viewForm').find('#dob').val(response.dob);
			  $('#viewForm').find('#contact').val(response.contact);
			  $('#viewForm').find('#city').val(response.city);
			  $('#viewForm').find('#state').val(response.state);
			  $('#viewForm').find('#zip').val(response.zip);
			  $('#viewForm').find('#gender').val(response.gender);
			// console.log($data);
		},
		error: function(response){
			console.log(response);
		},
	});
 }