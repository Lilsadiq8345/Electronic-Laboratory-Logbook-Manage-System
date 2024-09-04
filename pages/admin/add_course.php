<!-- ========================= MODAL ======================= -->
            <div id="addcourse" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Course</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Course Code</label>
                                    <input required name="course_code" id="course_code" class="form-control input-sm" type="text" />
                                </div>
                                 <div class="form-group">
                                    <label>Course Title</label>
                                    <input required name="course_name" id="course_name" class="form-control input-sm" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Course Level</label>
                                    <select required class="form-control input-sm" name="course_level_id">
                                        <option value="">--Select--</option>
                                        <?php
                                            $levelquery = mysqli_query($con, "SELECT * FROM level ");
                                            while($levelrow = mysqli_fetch_array($levelquery))
                                            {?>
                                            <option value="<?php echo $levelrow['level_id']; ?>"><?php echo $levelrow['level_name']; ?></option> 
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Course Semester</label>
                                    <select required class="form-control input-sm" name="course_semester_id">
                                        <option value="">--Select--</option>
                                        <?php
                                            $semesterquery = mysqli_query($con, "SELECT * FROM semester ");
                                            while($semesterrow = mysqli_fetch_array($semesterquery))
                                            {?>
                                            <option value="<?php echo $semesterrow['semester_id']; ?>"><?php echo $semesterrow['semester_name']; ?></option> 
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="add_course" name="add_course" value="Add"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

