<div class="col-md-9" style="margin-top: 10px;">
  <form class="form-horizontal" id="form_master" method="post">
    <div class="form-group">
      <label for="item_id" class="col-sm-2 control-label">Item ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="item_id" id="item_id" placeholder="Item ID ............">
      </div>
    </div>
    <div class="form-group">
      <label for="item_desc" class="col-sm-2 control-label">Item Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="item_desc" id="item_desc" placeholder="Description ............">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <span class="btn btn-success" id="btn_saave"><i class="glyphicon glyphicon-floppy-disk">&nbsp;SAVE</i></span>
      </div>
    </div>
  </form>  
</div>


<script type="text/javascript" src="<?php echo base_url('/assets/js/master/item.js?r='.rand());?>"></script>