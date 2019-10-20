<div class="card mt-4">
	<div class="card-body">
		<form class="needs-validation" novalidate id="personForm">
			<div id="all_msg" class="alert alert-danger" style="display: none"> 	All field are required !
		    </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom01">First name</label>
		      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
		      <div id="first_name_msg" class="text-danger" style="display: none"> 	Fillup the First Name Field
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom02">Last name</label>
		      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
		      <div id="last_name_msg"  class="text-danger" style="display: none">	Fillup the Last Name Field
		      </div>
		    </div>
		  </div>
		   <div class="form-row">
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom01">Email</label>
		      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
		      <div id="email_msg"  class="text-danger" style="display: none">Enter Your Email
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom02">Date of Birth</label>
		      <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
		      <div id="dob_msg"  class="text-danger" style="display: none">Input Your Birth Date
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustomUsername">Contact No.</label>
		        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">
		        <div id="contact_msg"  class="text-danger" style="display: none"> 	Fillup the Contact field
		        </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustomUsername">City</label>
		        <input type="text" class="form-control" name="city" id="city" placeholder="City">
		      <div id="city_msg"  class="text-danger" style="display: none">
		        Fillup the City field
		      </div>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		     <label for="validationCustom04">State</label>
		      <input type="text" class="form-control" name="state" id="state" placeholder="State">
		      <div id="state_msg"  class="text-danger" style="display: none">     Fillup the state field
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom05">Zip</label>
		      <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
		      <div id="zip_msg"  class="text-danger" style="display: none">
		      	please, Give the zip Code.  
		      </div>
		    </div>
		  </div>
		  <div class="form-check">
			  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
			  <label class="form-check-label">
			    Male
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
			  <label class="form-check-label">
			    Female
			  </label>
			</div>
			<div id="gender_msg"  class="text-danger" style="display: none"> Please, select the Gender 
		    </div>
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" name="status" id="status" value="1">
		      <label class="form-check-label">
		        Agree to terms and conditions
		      </label>
		    </div> 
		    	<div id="status_msg"  class="text-danger" style="display: none">
		        	Please, Check the term & Condition
		      </div>
		  </div>
        <button type="button" id="addrecord" class="btn btn-primary float-right" onclick="submits()">Submit</button>
	</form>
	</div>
</div>