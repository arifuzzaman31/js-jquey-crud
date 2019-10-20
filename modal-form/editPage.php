<div class="card mt-4">
  <div class="card-body">
  <form class="" id="updateForm">
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom01">First name</label>
        <input type="text" class="form-control" name="first_name" id="first_name">
        <div id="first_name_msg">
          	
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom02">Last name</label>
        <input type="text" class="form-control" name="last_name" id="last_name">
        <div id="last_name_msg">
          	
        </div>
      </div>
    </div>
     <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom03">Email</label>
        <input type="text" class="form-control" name="email" id="email">
        <div id="email_msg">
          
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom04">Date of Birth</label>
        <input type="text" class="form-control" name="dob" id="dob">
        <div id="dob_msg">
        
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustomUsername">Contact No.</label>
        <div class="input-group">
          <input type="text" class="form-control" name="contact" id="contact">
          <div id="contact_msg">
            
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom">City</label>
        <div class="input-group">
          <input type="text" class="form-control" name="city" id="city">
        <div id="city_msg">
          
        </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
       <label for="validationCustom06">State</label>
        <input type="text" class="form-control" name="state" id="state">
        <div id="state_msg">
          
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <label for="validationCustom07">Zip</label>
        <input type="text" class="form-control" name="zip" id="zip">
        <div id="zip_msg">
          
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
          <select class="form-control" id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
          </select>
      </div>
    </div>
      
    <input type="hidden" name="hidden_id" id="hidden_id">
  	<button class="btn btn-primary float-right  mt-1" id="updaterecord" onclick="update()" type="submit">Update</button>
  </form>
</div>
</div>