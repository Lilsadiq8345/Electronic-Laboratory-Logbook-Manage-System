<?php echo '<div id="editstudent'.$row['student_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Student Details</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['student_id'].'" name="hidden_id" id="hidden_id"/>'; ?>
                <div class="form-group">
                  <label for="txt_username">Matric Number</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_matricnumber" value="<?php echo $row['student_matricnumber']; ?>"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Last Name</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_lname" value="<?php echo $row['student_lname']; ?>"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Other Names</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="student_othername" value="<?php echo $row['student_othername']; ?>"  required>
                </div>
                 <div class="form-group">
                  <label for="txt_username">Level</label>
                  <select class="form-control" style="border-radius:0px" name="student_level_id"  required>
                    <option value="<?php echo $row['lid']; ?>"><?php echo $row['lname']; ?></option>
                     <?php
                                  $levelquery = mysqli_query($con, "SELECT * FROM level ");
                                  while($levelrow = mysqli_fetch_array($levelquery))
                                            {?>
                                <option value="<?php echo $levelrow['level_id']; ?>"><?php echo $levelrow['level_name']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="txt_username">Program</label>
                  <select class="form-control" style="border-radius:0px" name="student_program_id"  required>
                    <option value="<?php echo $row['pid']; ?>"><?php echo $row['pname']; ?></option>
                     <?php
                                  $programquery = mysqli_query($con, "SELECT * FROM program ");
                                  while($programrow = mysqli_fetch_array($programquery))
                                            {?>
                                            <option value="<?php echo $programrow['program_id']; ?>"><?php echo $programrow['program_name']; ?></option> 
                                        <?php } ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="txt_username">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="student_password" value="<?php echo $row['student_password']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Confirm Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="cstudent_password" value="<?php echo $row['student_password']; ?>"  required>
                </div>
               
           <?php echo '</div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="save_student" id="save_student" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>