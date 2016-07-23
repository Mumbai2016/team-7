<div class="col-lg-6">
      <div class="modal-body">
	 
        <form id="edit_job" method="POST"  class="clearfix" action="" >	
		        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>">
		<div class="col-md-6">
		    <label for="company_id" class="control-label">Company</label>
			<select class="form-control" name="company_id" id="company_id">				
				<option value="1">company1</option>
                <option value="2">company2</option>
                <option value="3">company3</option>
            </select>
		</div>
		<div class="col-md-6">
			<label for="job_type_id" class="control-label">Job Type</label>
			<select class="form-control" name="job_type_id" id="job_type_id">
                <option value="1">Job Type1</option>
                <option value="2">Job Type2</option>
                <option value="3">Job Type3</option>
            </select>
		</div>        
        <div class="col-md-6">
            <div class="form-group">
				<label for="job" class="control-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $row_job_details['job_title']; ?>" required="" title="Please enter the job title" placeholder="Job Title">
                <span class="help-block"></span>
            </div>
        </div>		
        <div class="col-md-6">
            <div class="form-group">
				<label for="loc" class="control-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo $row_job_details['location']; ?>" required="" title="Please enter location" placeholder="Location">
				<input type="hidden" id="lat" name="lat" value="21.1702401">
				<input type="hidden" id="long" name="long" value="72.83106070000008" >
                <span class="help-block"></span>
            </div>
        </div>        
		<div class="col-md-12 form-group">
			<label for="loc" class="control-label">Description</label>
			<textarea class="form-control" name="description" id="description"><?php echo $row_job_details['description']; ?></textarea>
		</div>					                                              
		
		<div class="col-md-6">
            <div class="form-group">
				<label for="start_dt" class="control-label">Start date</label>
                <input type="date" class="form-control" id="start_dt" name="start_dt" value="<?php echo $row_job_details['start_dt']; ?>" required="" placeholder="Start Date">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="end_dt" class="control-label">End date</label>
                <input type="date" class="form-control" id="end_dt" name="end_dt" value="<?php echo $row_job_details['end_dt']; ?>" required=""  placeholder="End Date">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="quality" class="control-label">Keywords</label>
                <input type="text" class="form-control" id="keyword" name="keyword" value="<?php echo $row_job_details['keyword']; ?>" required="" title="Please enter your key quality" placeholder="eg: Php expert">
                <span class="help-block"></span>
            </div>							  
        </div>
		<div class="col-md-6">
            <div class="form-group">
                <label for="salary" class="control-label">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $row_job_details['salary']; ?>" required="" title="Please enter your salary" placeholder="Salary">
                <span class="help-block"></span>
            </div>
        </div>
    </div>