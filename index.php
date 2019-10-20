<?php include('_partial/top.php'); ?>

<div class="container">
		<div class="card mt-4">
			<div class="card-header d-flex justify-content-between">
				<h2>Ajax Javascript CRUD</h2>
				<button class="btn btn-primary float-right" onclick=" getModal('modal-form/addform.php','Add New Data') " id="add-data">Add</button>
    			</div>
  			<div class="card-body">
  				  <table class="table table-striped" id="PersonData">
  			       <thead>
  			         <tr>
        			      <th>Name</th>
        			      <th>Email</th>
        			      <th>Contact</th>
        			      <th>Action</th>
  			         </tr>
  			       </thead>
  			         <tbody>
  			         </tbody>
  			   </table>
  			</div>
    </div>
</div>


<!-- Large modal -->

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      </div>
    </div>
  </div>
</div>
<?php include('_partial/bottom.php'); ?>
    

