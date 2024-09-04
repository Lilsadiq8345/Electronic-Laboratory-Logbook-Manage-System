<?php echo '<div id="editstudent'.$row['student_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Approve Request</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['student_id'].'" name="hidden_id" id="hidden_id"/>'; ?>
               
                 <div class="form-group">
                  <label for="txt_username">Approval</label>
                  <select class="form-control" style="border-radius:0px" name="approval"  required>
                    <option value="">--select--</option>
                    <option value="1">Approve</option>
                    <option value="2">Reject</option>
                     
                  </select>
                  
                </div>
                
           <?php echo '</div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="approve" id="approve" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>