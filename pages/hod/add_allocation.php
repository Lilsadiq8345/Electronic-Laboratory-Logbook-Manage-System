<div id="addallocation" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add Allocation</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                
                 <div class="form-group">
                  <label for="txt_username">Lecturer</label>
                  <select class="form-control" style="border-radius:0px" name="allocation_lid"  required>
                    <option value="">--select--</option>
                     <?php
                                  $levelquery = mysqli_query($con, "SELECT * FROM lecturer ");
                                  while($levelrow = mysqli_fetch_array($levelquery))
                                            {?>
                                <option value="<?php echo $levelrow['lecturer_id']; ?>"><?php echo $levelrow['lecturer_lname'].' '.$levelrow['lecturer_othername']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="txt_username">Course</label>
                  <select class="form-control" style="border-radius:0px" name="allocation_cid"  required>
                    <option value="">--select--</option>
                     <?php
                                  $programquery = mysqli_query($con, "SELECT * FROM course ");
                                  while($programrow = mysqli_fetch_array($programquery))
                                            {?>
                                            <option value="<?php echo $programrow['course_id']; ?>"><?php echo $programrow['course_code'].' -'.$programrow['course_name']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                
               
           </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="add_allocation" id="add_allocation" value="Add"/>
        </div>
    </div>
  </div>
</form>
</div>