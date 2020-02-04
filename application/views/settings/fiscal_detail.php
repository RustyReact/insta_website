<script src="<?php echo base_url("assets/vendor/jquery-passwordStrength/jquery.passwordstrength.js") ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/vendor/jquery-passwordStrength/jquery.passwordstrength.css") ?>">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h5 class="page-title"><?php echo lang('detail_fiscal');?></h5>
<hr />
<?php echo form_open(uri_string(), array('class' => 'form-login form-horizontal'));?>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="month"><?php echo "Month";?></label>
      <div class="col-md-9">
        <?php echo form_input($month);?>
      </div>
    </div>
    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="year"><?php echo "Year";?></label>
      <div class="col-md-9">
        <?php echo form_input($year);?>
      </div>
    </div>
    <div class="row form-group required">
      <label class="col-md-3 form-control-label " for="password"><?php echo "GL status";?></label>
      <div class="col-md-9">
        <select  name="status" value="" id="status" class="form-control">
          <option value="1" <?php if($detail->status == 1){ echo "selected";} ?>> <?php echo lang('posted');?></option>
          <option value="0" <?php if($detail->status == 0){ echo "selected";} ?>> <?php echo lang('open');?></option>
        </select>
      </div>
    </div>
    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="posted_date"><?php echo "Posted Date";?></label>
      <div class="col-md-9">
        <?php echo form_input($posted_date);?>
      </div>
    </div>
    <div class="row form-group">
      <label class="col-md-3 form-control-label" for="posted_user"><?php echo "Posted User";?></label>
      <div class="col-md-9">
        <?php echo form_input($posted_user);?>
      </div>
    </div>

    <?php echo form_hidden($csrf); ?>
  </div>
</div>
<div class="text-md-right">
  <hr />
  <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true"><?php echo lang("close") ?></button>
</div>
<?php echo form_close();?>