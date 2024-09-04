<?php echo '<div id="editlecturer'.$row['lecturer_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Lecturer Details</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['lecturer_id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Lecturer Last Name </label>
                    <input required name="lecturer_lname" id="lecturer_lname" class="form-control input-sm" type="text" value="'.$row['lecturer_lname'].'" />
                </div>
                <div class="form-group">
                    <label>Lecturer Other Names </label>
                    <input required name="lecturer_othername" id="lecturer_othername" class="form-control input-sm" type="text" value="'.$row['lecturer_othername'].'" />
                </div>
                 <div class="form-group">
                    <label>Lecturer Password </label>
                    <input required name="lecturer_password" id="lecturer_password" class="form-control input-sm" type="text" value="'.$row['lecturer_password'].'" />
                </div>
               
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="save_lecturer" id="save_lecturer" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>