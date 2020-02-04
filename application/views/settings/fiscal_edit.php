<?php

$date = array(
  'name'         => 'posted_date',
  'id'           => 'posted_date',
  'value'        => set_value("date",$je_current->posted_date),
  'class'        => "form-control",
  'autocomplete' => "off",
  'type'         => "text",
);
$posted_user = array(
  'name'         => 'posted_user',
  'id'           => 'posted_user',
  'value'        => set_value("posted_user",$je_current->posted_user),
  'class'        => "form-control",
  'autocomplete' => "off",
  'type'         => "text",
);
?>
<style type="text/css">
.input-group-addon{
    min-width:50px;
    padding:0px 4px;
    background:white;
    line-height: 33px;
}
</style>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h5 class="page-title"><?php echo $page_title;?></h5>
<div class="text-muted page-desc"><?php echo $page_subheading;?></div>
<hr />

<?php echo form_open("fiscal/edit?id=".$je_current->id, array('class' => 'form-horizontal', 'id'=> 'form_item'));?>
<?php echo form_hidden('id', $je_current->id); ?>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="date"><?php echo lang('date');?></label>
      <div class="col-md-9">
        <?php echo form_input($date);?>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="posted_user"><?php echo lang('posted_user');?></label>
      <div class="col-md-9">
        <?php echo form_input($posted_user);?>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="status"><?php echo lang('status');?></label>
      <div class="col-md-9">
        <select  name="status" value="" id="status" class="form-control">
          <option value="1" <?php if($je_current->status == 1){ echo "selected";} ?>> <?php echo lang('posted');?></option>
          <option value="0" <?php if($je_current->status == 0){ echo "selected";} ?>> <?php echo lang('open');?></option>
        </select>
      </div>
    </div>


    <?php echo form_hidden($csrf); ?>
  </div>
</div>
<div class="text-md-right">
  <hr />
  <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true"><?php echo lang("cancel") ?></button>
  <?php echo form_submit('submit', lang('save'), array('class' => 'btn btn-primary'));?>
</div>
<?php echo form_close();?>

<script type="text/javascript">
  $(document).ready(function(){
      $("#posted_date").datepicker({format:"yyyy-mm-dd"});
   });
</script>
