<?php echo '<div id="edithod'.$row['hod_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Hod Details</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['hod_id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>HOD Last Name </label>
                    <input required name="hod_lname" id="hod_lname" class="form-control input-sm" type="text" value="'.$row['hod_lname'].'" />
                </div>
                <div class="form-group">
                    <label>HOD Other Names </label>
                    <input required name="hod_othername" id="hod_othername" class="form-control input-sm" type="text" value="'.$row['hod_othername'].'" />
                </div>
                 <div class="form-group">
                    <label>HOD Password </label>
                    <input required name="hod_password" id="hod_password" class="form-control input-sm" type="text" value="'.$row['hod_password'].'" />
                </div>
               
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="save_hod" id="save_hod" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>