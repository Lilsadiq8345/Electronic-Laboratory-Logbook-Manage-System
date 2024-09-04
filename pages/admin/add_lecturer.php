<!-- ========================= MODAL ======================= -->
            <div id="addlecturer" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Lecturer</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lecturer Last Name</label>
                                    <input required name="lecturer_lname" id="lecturer_lname" class="form-control input-sm" type="text" />
                                </div>
                                 <div class="form-group">
                                    <label>Lecturer Other Names</label>
                                    <input required name="lecturer_othername" id="lecturer_othername" class="form-control input-sm" type="text" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="add_lecturer" name="add_lecturer" value="Add"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

