<?php echo '<div id="sreport'.$row['cid'].'" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Submit Report</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['cid'].'" name="hidden_id" id="hidden_id"/>'; ?>
                <div class="form-group">
                  <label for="txt_username">Lab Excercise Number</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_labnumber"  required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Topic</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_topic"   required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Venue</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_venue"   required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Date</label>
                  <input type="date" class="form-control" style="border-radius:0px" name="report_date"   required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Aims Of The Practical</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_aims"   required rows="6"></textarea>
                </div>
                <div class="form-group">
                  <label for="txt_username">Material Used</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_material"   required rows="2"></textarea>
                </div>
                <div class="form-group">
                  <label for="txt_username">Description Of Work Analysis</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_description"   required rows="6"></textarea>
                </div>

                <div class="form-group">
                  <label for="txt_username">Attatchment</label>
                  <input type="file" class="form-control" style="border-radius:0px" name="productimage1" >
                </div>
               
               
           <?php echo '</div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="submit_report" id="submit_report" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>