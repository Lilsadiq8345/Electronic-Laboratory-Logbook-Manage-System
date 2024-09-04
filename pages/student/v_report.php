<?php echo '<div id="sreport'.$row['report_id'].'" class="modal fade">
<form method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">View Report</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['report_id'].'" name="hidden_id" id="hidden_id"/>'; ?>
                <div class="form-group">
                  <label for="txt_username">Lab Excercise Number</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_labnumber" value="<?php echo $row['report_labnumber'];  ?>" disabled required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Topic</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_topic"  value="<?php echo $row['report_topic'];  ?>" disabled  required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Venue</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="report_venue" value="<?php echo $row['report_venue'];  ?>" disabled   required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Date</label>
                  <input type="date" class="form-control" style="border-radius:0px" name="report_date" value="<?php echo $row['report_date'];  ?>" disabled   required>
                </div>
                <div class="form-group">
                  <label for="txt_username">Aims Of The Practical</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_aims"   required disabled rows="6"><?php echo $row['report_aims'];  ?> </textarea>
                </div>
                <div class="form-group">
                  <label for="txt_username">Material Used</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_material" disabled   required rows="2"><?php echo $row['report_material'];  ?></textarea>
                </div>
                <div class="form-group">
                  <label for="txt_username">Description Of Work Analysis</label>
                  <textarea class="form-control" style="border-radius:0px" name="report_description" disabled   required rows="6" ><?php echo $row['report_description'];  ?></textarea>
                </div>

               
               
           <?php echo '</div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            
        </div>
    </div>
  </div>
</form>
</div>';?>