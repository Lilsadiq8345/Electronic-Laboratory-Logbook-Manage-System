<?php echo '<div id="editlevel'.$row['level_id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Level</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['level_id'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                    <label>Level Name </label>
                    <input required name="level_name" id="level_name" class="form-control input-sm" type="text" value="'.$row['level_name'].'" />
                </div>
               
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="save_level" id="save_level" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>