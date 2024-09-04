<!-- ========================= MODAL ======================= -->
            <div id="addhod" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Hod</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hod Last Name</label>
                                    <input required name="hod_lname" id="hod_lname" class="form-control input-sm" type="text" />
                                </div>
                                 <div class="form-group">
                                    <label>Hod Other Names</label>
                                    <input required name="hod_othername" id="hod_othername" class="form-control input-sm" type="text" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="add_hod" name="add_hod" value="Add"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

