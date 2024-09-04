<?php echo '<div id="editsemester'.$row['semester_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Semester</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['semester_id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Semester Name </label>
                    <input required name="semester_name" id="semester_name" class="form-control input-sm" type="text" value="'.$row['semester_name'].'" />
                </div>
               
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="save_semester" id="save_semester" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>