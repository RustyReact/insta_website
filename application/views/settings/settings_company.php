
<?php
$this->load->enqueue_style("assets/vendor/fileuploader/jquery.fileuploader.css", "custom");
$this->load->enqueue_script("assets/vendor/fileuploader/jquery.fileuploader.min.js");
echo $this->load->css("custom");


$status_list = array (
    array("label" => lang("index_active_status"), "value" => "1"),
    array("label" => lang("index_inactive_status"), "value" => "0"),
);


$name = array(
  'name'        => 'name',
  'id'          => 'name',
  'value'       => $company->name,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("name").' '.lang("is_required"),
  'autocomplete' => "off"
);
$email = array(
  'name'        => 'email',
  'id'          => 'email',
  'value'       => $company->email,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("email_address").' '.lang("is_required"),
  'autocomplete' => "off"
);
$address = array(
  'name'        => 'address',
  'id'          => 'address',
  'value'       => $company->address,
  'class'       => 'form-control',
  'required'  => 'required',
  "rows"        => "4",
  'data-error'  => lang("address").' '.lang("is_required"),
  'autocomplete' => "off"
);
$city = array(
  'name'        => 'city',
  'id'          => 'city',
  'value'       => $company->city,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("city").' '.lang("is_required"),
  'autocomplete' => "off"
);
$state = array(
  'name'     => 'state',
  'id'          => 'state',
  'value'       => $company->state,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("state").' '.lang("is_required"),
  'autocomplete' => "off"
);
$postal_code = array(
  'name'        => 'postal_code',
  'id'          => 'postal_code',
  'value'       => $company->postal_code,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("postal_code").' '.lang("is_required"),
  'autocomplete' => "off"
);
$country = array(
  'name'        => 'country',
  'id'          => 'country',
  'value'       => $company->country,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("country").' '.lang("is_required"),
  'autocomplete' => "off"
);
$phone = array(
  'name'        => 'phone',
  'id'          => 'phone',
  'value'       => $company->phone,
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("phone").' '.lang("is_required"),
  'autocomplete' => "off"
);

$cfl1 = array(
  'name'         => 'cfl1',
  'id'           => 'cfl1',
  'value'        => set_value("cfl1", $company->cfl1),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_label")." 1",
  'autocomplete' => "off"
);
$cfv1 = array(
  'name'         => 'cfv1',
  'id'           => 'cfv1',
  'value'        => set_value("cfv1", $company->cfv1),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_value")." 1",
  'autocomplete' => "off"
);

$cfl2 = array(
  'name'         => 'cfl2',
  'id'           => 'cfl2',
  'value'        => set_value("cfl2", $company->cfl2),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_label")." 2",
  'autocomplete' => "off"
);
$cfv2 = array(
  'name'         => 'cfv2',
  'id'           => 'cfv2',
  'value'        => set_value("cfv2", $company->cfv2),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_value")." 2",
  'autocomplete' => "off"
);

$cfl3 = array(
  'name'         => 'cfl3',
  'id'           => 'cfl3',
  'value'        => set_value("cfl3", $company->cfl3),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_label")." 3",
  'autocomplete' => "off"
);
$cfv3 = array(
  'name'         => 'cfv3',
  'id'           => 'cfv3',
  'value'        => set_value("cfv3", $company->cfv3),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_value")." 3",
  'autocomplete' => "off"
);

$cfl4 = array(
  'name'         => 'cfl4',
  'id'           => 'cfl4',
  'value'        => set_value("cfl4", $company->cfl4),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_label")." 4",
  'autocomplete' => "off"
);
$cfv4 = array(
  'name'         => 'cfv4',
  'id'           => 'cfv4',
  'value'        => set_value("cfv4", $company->cfv4),
  'class'        => 'form-control',
  'placeholder'  => lang("custom_field_value")." 4",
  'autocomplete' => "off"
);

$j_mapping_array = json_decode($j_mapping, TRUE);
$jm_purchasing = $j_mapping_array['101'];
$jm_sales      = $j_mapping_array['102'];
$jm_cashbook   = $j_mapping_array['103'];
$jm_assets     = $j_mapping_array['104'];

$jm_cash_account_1 = array(
  'name'        => 'jmc_a1',
  'id'          => 'jmc_a1',
  'value'       => (count($jm_cashbook) > 0)? $jm_cashbook['gl_account1']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_cash_name = array(
  'name'        => 'jmc_name',
  'id'          => 'jmc_name',
  'value'       => (count($jm_cashbook) > 0)? $jm_cashbook['journal_name']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_assets_account_1 = array(
  'name'        => 'jma_a1',
  'id'          => 'jma_a1',
  'value'       => (count($jm_assets) > 0)? $jm_assets['gl_account1']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_assets_account_2 = array(
  'name'        => 'jma_a2',
  'id'          => 'jma_a2',
  'value'       => (count($jm_assets) > 0)? $jm_assets['gl_account2']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_assets_account_3 = array(
  'name'        => 'jma_a3',
  'id'          => 'jma_a3',
  'value'       => (count($jm_assets) > 0)? $jm_assets['gl_account3']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_assets_name = array(
  'name'        => 'jma_name',
  'id'          => 'jma_name',
  'value'       => (count($jm_assets) > 0)? $jm_assets['journal_name']:'',
  'class'       => 'form-control',
  'required'    => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_sales_account_1 = array(
  'name'        => 'jms_a1',
  'id'          => 'jms_a1',
  'value'       => (count($jm_sales) > 0)? $jm_sales['gl_account1']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_sales_account_2 = array(
  'name'        => 'jms_a2',
  'id'          => 'jms_a2',
  'value'       => (count($jm_sales) > 0)? $jm_sales['gl_account2']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_sales_account_3 = array(
  'name'        => 'jms_a3',
  'id'          => 'jms_a3',
  'value'       => (count($jm_sales) > 0)? $jm_sales['gl_account3']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_sales_name = array(
  'name'        => 'jms_name',
  'id'          => 'jms_name',
  'value'       => (count($jm_sales) > 0)? $jm_sales['journal_name']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_purchasing_account_1 = array(
  'name'        => 'jmp_a1',
  'id'          => 'jmp_a1',
  'value'       => (count($jm_purchasing) > 0)? $jm_purchasing['gl_account1']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_purchasing_account_2 = array(
  'name'        => 'jmp_a2',
  'id'          => 'jmp_a2',
  'value'       => (count($jm_purchasing) > 0)? $jm_purchasing['gl_account2']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_purchasing_account_3 = array(
  'name'        => 'jmp_a3',
  'id'          => 'jmp_a3',
  'value'       => (count($jm_purchasing) > 0)? $jm_purchasing['gl_account3']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_purchasing_account_4 = array(
  'name'        => 'jmp_a4',
  'id'          => 'jmp_a4',
  'value'       => (count($jm_purchasing) > 0)? $jm_purchasing['gl_account4']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

$jm_purchasing_name = array(
  'name'        => 'jmp_name',
  'id'          => 'jmp_name',
  'value'       => (count($jm_purchasing) > 0)? $jm_purchasing['journal_name']:'',
  'class'       => 'form-control',
  'required'  => 'required',
  'data-error'  => lang("is_required"),
  'autocomplete' => "off"
);

//added new field
$fiscal_code = array(
  'name'        => 'fiscal_code',
  'id'          => 'fiscal_code',
  'value'       => $company->fiscal_code,
  'class'       => 'form-control',
  'data-error'  => lang("fiscal_code").' '.lang("is_required"),
  'autocomplete' => "off"
);
$cr_code = array(
  'name'        => 'cr_code',
  'id'          => 'cr_code',
  'value'       => $company->cr_code,
  'class'       => 'form-control',
  'data-error'  => lang("cr_code").' '.lang("is_required"),
  'autocomplete' => "off"
);

$bank = array(
  'name'        => 'bank',
  'id'          => 'bank',
  'value'       => $company->bank,
  'class'       => 'form-control',
  'data-error'  => lang("bank").' '.lang("is_required"),
  'autocomplete' => "off"
);

$bank_account = array(
  'name'        => 'bank_account',
  'id'          => 'bank_account',
  'value'       => $company->bank_account,
  'class'       => 'form-control',
  'data-error'  => lang("bank_account").' '.lang("is_required"),
  'autocomplete' => "off"
);

$vat_collection_list = array(
      ''         => '',
      0          => lang('vat_collection_type1'),
      1          => lang('vat_collection_type2')
);

$vat_payment_list = array(
  ''         => '',
  0          => lang('vat_payment_type1'),
  1          => lang('vat_payment_type2'),
  2          => lang('vat_payment_type3')
);

?>
<style type="text/css">
.input-group-addon{
    min-width:50px;
    padding:0px 4px;
    background:white;
    line-height: 33px;
}
#fiscal_tb_wrapper{
  margin-top:21px;
}
</style>
<input type="hidden" name="reset_all_references" value="0">
<!-- TITLE BAR -->
<div class="titlebar">
  <div class="row">
    <div class="tab_setting col-md-6">
      <span class="tablinks active" onclick="openTab(event, 'company')"><?php echo lang("configuration_company") ?></span>
      <span class="tablinks" style="margin-left: 20px" onclick="openTab(event, 'Fiscal')"><?php echo lang("configuration_fiscal")?></span>
      <span class="tablinks" id="mapping" style="margin-left: 20px" onclick="openTab(event, 'journals_mapping')"><?php echo lang("journals_mapping")?></span>
      <span class="tablinks" style="margin-left: 20px" onclick="openTab(event, 'uoms')"><?php echo lang('uoms') ?></span>
    </div>
    <div class=" col-md-6 text-xs-right right-side">
      <button id="update_button" class="btn btn-secondary btn-submit"><i class="icon-check"></i> <?php echo lang("update") ?></button>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- TITLE BAR END -->

     
<div class="tabsettingcontent" style="display: block;" id="company">
     <?php $attrib = array('class'=>'form-horizontal');
      echo form_open("/settings/update_settings_company", $attrib); ?>
  <div class="row-fluid">
    <div class="col-md-6">
      <h4><i class="fa fa-info-circle"></i> <?php echo lang("basic_informations") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="name"><?php echo lang("name"); ?></label>
        <div class="col-md-9"> <?php echo form_input($name);?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="fiscal_code"><?php echo lang("fiscal_code"); ?></label>
        <div class="col-md-9"> <?php echo form_input($fiscal_code);?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="cr_code"><?php echo lang("cr_code"); ?></label>
        <div class="col-md-9"> <?php echo form_input($cr_code);?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="bank"><?php echo lang("bank"); ?></label>
        <div class="col-md-9"> <?php echo form_input($bank);?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="bank_account"><?php echo lang("bank_account"); ?></label>
        <div class="col-md-9"> <?php echo form_input($bank_account);?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="vat_collection_type"><?php echo lang("vat_collection_type"); ?></label>
        <div class="col-md-9"> <?php echo form_dropdown('vat_collection_type', $vat_collection_list, $company->vat_collection_type,'class="form-control"');?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="vat_payment_type"><?php echo lang("vat_payment_type"); ?></label>
        <div class="col-md-9"> <?php echo form_dropdown('vat_payment_type', $vat_payment_list, $company->vat_payment_type,'class="form-control"');?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="logo"><?php echo lang("logo"); ?></label>
        <div class="col-md-9">
          <input type="file" name="userfile">
          <?php
          echo form_hidden('logo', $company->logo);
          ?>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-control-label" for="perview"><?php echo lang("perview"); ?></label>
        <div class="col-md-9">
          <img src="<?php echo base_url($company->logo) ?>" style="height:50px;" class="img-polaroid" id="perview">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h4><i class="fa fa-envelope"></i> <?php echo lang("contact_informations") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="country"><?php echo lang("country"); ?></label>
        <div class="col-md-9"> <?php echo form_input($country);?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="state"><?php echo lang("state"); ?></label>
        <div class="col-md-9">
          <?php
          echo form_input('state', set_value('state', $company->state), 'class="form-control" id="state"');
          ?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="city"><?php echo lang("city"); ?></label>
        <div class="col-md-9">
          <?php
          echo form_input('city', set_value('city', $company->city), 'class="form-control" id="city"');
          ?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="postal_code"><?php echo lang("postal_code"); ?></label>
        <div class="col-md-9"> <?php echo form_input($postal_code);?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="address"><?php echo lang("address"); ?></label>
        <div class="col-md-9"> <?php echo form_textarea($address);?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="phone"><?php echo lang("phone"); ?></label>
        <div class="col-md-9"> <?php echo form_input($phone);?>
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-3 form-control-label" for="email"><?php echo lang("email_address"); ?></label>
        <div class="col-md-9"> <?php echo form_input($email);?>
        </div>
      </div>
    </div>
    <div class="row m-a-0">
      <h4><i class="fa fa-gears"></i> <?php echo lang("custom_fields") ?></h4><hr>
      <div class="col-md-6">
        <div class="row row-equal form-group">
          <div class="col-md-5"> <?php echo form_input($cfl1);?></div>
          <div class="col-md-7"> <?php echo form_input($cfv1);?></div>
        </div>
        <div class="row row-equal form-group">
          <div class="col-md-5"> <?php echo form_input($cfl2);?></div>
          <div class="col-md-7"> <?php echo form_input($cfv2);?></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row row-equal form-group">
          <div class="col-md-5"> <?php echo form_input($cfl3);?></div>
          <div class="col-md-7"> <?php echo form_input($cfv3);?></div>
        </div>
        <div class="row row-equal form-group">
          <div class="col-md-5"> <?php echo form_input($cfl4);?></div>
          <div class="col-md-7"> <?php echo form_input($cfv4);?></div>
        </div>
      </div>
    </div>
  </div>
      <button type="submit" style="display: none" id="update_company_button" ></button>
      <?php echo form_close();?>
</div>

<div class="tabsettingcontent" id="journals_mapping">
  <?php $attrib = array('class'=>'form-horizontal');
      echo form_open("/journals_mapping/update_mapping", $attrib); ?>
  <?php if ($journals_mapping == 1) echo "<input type='hidden' id='jm_status' value=1 />";
        else  echo "<input type='hidden' id='jm_status' value=0 />"; ?>
  <div class="row-fluid">
    <div class="col-md-12">
      <h4><i class="fa fa-info-circle"></i> <?php echo lang("jm_purchasing") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmp_a1"><?php echo lang("jm_purchasing_account_1"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_purchasing_account_1);?>
        </div>
        <div class="col-md-6"> 
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmp_a2"><?php echo lang("jm_purchasing_account_2"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_purchasing_account_2);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmp_a3"><?php echo lang("jm_purchasing_account_3"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_purchasing_account_3);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmp_a4"><?php echo lang("jm_purchasing_account_4"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_purchasing_account_4);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmp_name"><?php echo lang("jm_purchasing_name"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_purchasing_name);?>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
    <div class="col-md-12">
      <h4><i class="fa fa-info-circle"></i> <?php echo lang("jm_sales") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jms_a1"><?php echo lang("jm_sales_account_1"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_sales_account_1);?>
        </div>
        <div class="col-md-6"> 
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jms_a2"><?php echo lang("jm_sales_account_2"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_sales_account_2);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jms_a3"><?php echo lang("jm_sales_account_3"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_sales_account_3);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jms_name"><?php echo lang("jm_sales_name"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_sales_name);?>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
    <div class="col-md-12">
      <h4><i class="fa fa-info-circle"></i> <?php echo lang("jm_cashbook") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmc_a1"><?php echo lang("jm_cashbook_account_1"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_cash_account_1);?>
        </div>
        <div class="col-md-6"> 
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jmc_name"><?php echo lang("jm_cashbook_name"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_cash_name);?>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
    <div class="col-md-12">
      <h4><i class="fa fa-info-circle"></i> <?php echo lang("jm_assets") ?></h4><hr>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jma_a1"><?php echo lang("jm_assets_account_1"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_assets_account_1);?>
        </div>
        <div class="col-md-6"> 
        </div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jma_a2"><?php echo lang("jm_assets_account_2"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_assets_account_2);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jma_a3"><?php echo lang("jm_assets_account_3"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_assets_account_3);?>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row form-group required">
        <label class="col-md-6 form-control-label" for="jma_name"><?php echo lang("jm_assets_name"); ?></label>
        <div class="col-md-3"> <?php echo form_input($jm_assets_name);?>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
  <button type="submit" style="display: none" id="update_mapping_button" ></button>
      <?php echo form_close();?>
</div>

<div id="Fiscal" class="tabsettingcontent">
  <a href="<?php echo site_url('fiscal/create');?>" style="float:right;margin-top:-16px" class="btn btn-primary-outline sis_modal tip" sis-modal="fiscal_tb" title="<?php echo lang("create_fiscal"); ?>"> <i class="fa fa-plus"></i></a>
  <table id="fiscal_tb" class="table table-sm table-hover" width="100%">
    <thead>
        <tr>
            <th><?php echo "Month";?></th>
            <th><?php echo "Year";?></th>
            <th><?php echo "GL Status";?></th>
            <th><?php echo "Posted Date";?></th>
            <th><?php echo "Posted User";?></th>
            <th width="20" style="width:20px;"><?php echo lang("actions"); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="15" class="dataTables_empty"><?php echo lang('loading_data'); ?></td>
        </tr>
    </tbody>
  </table>
</div>

<div class="tabsettingcontent" id="uoms">

  <div class="row-fluid">

    <div class="flip pull-right" style="line-height: 64px;">
      <a href="<?php echo site_url('settings/create_uom');?>" sis-modal="uoms" class="btn btn-primary-outline tip" title="<?php echo lang('create_uom'); ?>"> <i class="fa fa-plus"></i></a>
      <a href="#refresh-list" title="<?php echo lang("refresh"); ?>" class="btn btn-primary-outline tip"><i class="fa fa-refresh"></i></a>
      <div class="btn-group download-list tip" title="<?php echo lang("tabletool_collection"); ?>" export-table="uoms">
        <a class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown"><i class="fa fa-download"></i><span class="caret"></span></a>
      </div>
      <div class="btn-group columns-list tip" title="<?php echo lang("shown_columns"); ?>">
        <a class="btn btn-primary-outline dropdown-toggle" data-toggle="dropdown"><i class="fa fa-columns"></i><span class="caret"></span></a>
      </div>
    </div>  
    <div class="titlebar">
      <div class="row">
        <h3 class="title col-md-6"><?php echo lang('unit_of_measurement') ?></h3>

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- TITLE BAR END -->
    <style type="text/css">
                #uoms th{
                    font-weight: bold;
                }
            </style>

    <table id="uomstable" class="table table-sm table-hover serverSide checkable_datatable">
      <thead>
        <tr>
          <th><?php echo lang("unit_of_measurement"); ?></th>
          <th><?php echo lang("description"); ?></th>
          <th><?php echo lang("status"); ?></th>
          <th width="20" style="width:20px; text-align: end;"><?php echo lang("actions"); ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="15" class="dataTables_empty"><?php echo lang('loading_data'); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
        

<div class="clearfix"></div>

<script type="text/javascript">

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabsettingcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";

  switch(tabName){

    case "company":
        currentTab = 0;
        break;
    case "journals_mapping":
        currentTab = 2;
        break;
    default:
        currentTab = -1;
        break;
  }
}

function openMappingTab(tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabsettingcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  $("#mapping").addClass("active");

  switch(tabName){

    case "company":
        currentTab = 0;
        break;
    case "journals_mapping":
        currentTab = 2;
        break;
    default:
        currentTab = -1;
        break;
  }
}

  function fiscal_action_format(data, type, row, meta){


    actions = '<div class="btn-group">'+
                '<button data-toggle="dropdown" class="dropdown-toggle btn btn-sm btn-secondary" aria-expanded="true">'+
                    '<span><i class="icon-settings"></i></span>'+
                '</button>'+
                '<ul class="dropdown-menu dropdown-menu-right">';

    actions += $('#fiscal_tb').create_datatable_action("check", SITE_URL+"/settings/detail_fiscal/"+row.id, globalLang['detail_fiscal'], false, false, true);
    actions += $('#fiscal_tb').create_datatable_action("trash", SITE_URL+"/fiscal/delete?id="+row.id, globalLang['delete'], false, true, false, true);
    actions += $('#fiscal_tb').create_datatable_action("pencil", SITE_URL+"/fiscal/edit?id="+row.id, globalLang['edit'], false, false, true);
    actions += '</ul></div>';
    return "<center>"+actions+"</center>";
  }

  function status_format1(status) {
      var html = "";
      if( status == "1" ){
          html = "<small class='text-bullet-success'><?php echo lang('posted'); ?></small>";
      }else{
          html = "<small class='text-bullet-danger'><?php echo lang('open'); ?></small>";
      }
      return  html;
  } 

var uomstable;
var currentTab = 0;
var fiscal_tb;
$(document).ready(function() {

    if ($("#jm_status").val() == 1) openMappingTab("journals_mapping");

    uomstable = $('#uomstable').dataTable( {
        "oColVis": {
            "aiExclude": [0, 3],
        },
        "aoColumnDefs": [{
            "bVisible": false,
        }],
        "aaSorting": [[ 0, "desc" ]],
        'bProcessing'    : true,
        'bServerSide'    : true,
        'sAjaxSource'    : SITE_URL+'/settings/getuom',
        'fnServerData': function(sSource, aoData, fnCallback)
        {
            aoData.push( { "name": CSRF_NAME, "value": CSRF_HASH } );
            $.ajax({'dataType':'json','type':'POST','url': sSource,'data':aoData,'success':fnCallback});
        },
        "aoColumns": [
            { "sName": 'unit_of_measurement', "mDataProp": 'unit_of_measurement', "mRender": description_format},
            { "sName": 'description'  , "mDataProp": 'description'  , "mRender": description_format},
            { "sName": 'status'  , "mDataProp": 'status'  , "mRender": status_format},
            { "bSortable": false, "mRender": uom_Actions , "bSearchable": false}
        ]
    }).advancedSearch({
        aoColumns:[
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "select", values: <?php echo json_encode($status_list) ?> },
            null
        ]
    });

    $('.columns-list').on("click", "ul", function(e){
        e.stopPropagation();
    });

    $('a[href="#refresh-list"]').bind('click', function() {
        uomstable._fnReDraw();
        return false;
    });
});
function uom_Actions(data, type, row, meta){


    actions = '<div class="btn-group">'+
                '<button data-toggle="dropdown" class="dropdown-toggle btn btn-sm btn-secondary" aria-expanded="true">'+
                    '<span><i class="icon-settings"></i></span>'+
                '</button>'+
                '<ul class="dropdown-menu dropdown-menu-right">';
    if( row.status == "1" ){
        actions += $('#uomstable').create_datatable_action("ban", SITE_URL+"/settings//"+row.id, globalLang['index_inactive_link'], false, false, true);
    }else{
        actions += $('#uomstable').create_datatable_action("check", SITE_URL+"/settings//"+row.id, globalLang['index_active_link'], false, false, false, true);
    }
    actions += $('#uomstable').create_datatable_action("pencil", SITE_URL+"/settings/edit_uom/"+row.id, globalLang['edit_unit_of_measurement'], false, false, true);
    actions += $('#uomstable').create_datatable_action("trash", SITE_URL+"/settings/delete_uom/"+row.id, globalLang['delete'], false, true, false, true);
    actions += '</ul></div>';
    return "<center>"+actions+"</center>";
}
function number_format(data, type, row, meta) {
    return "<center><small>"+data+"</small></center>";
}
function description_format(value) {
    var html = "<small>"+value+"</small>";
    return  html;
}

function status_format(status) {
    var html = "";
    if( status == "1" ){
        html = "<small class='text-bullet-success'><?php echo lang('index_active_status'); ?></small>";
    }else{
        html = "<small class='text-bullet-danger'><?php echo lang('index_inactive_status'); ?></small>";
    }
    return  html;
}
$(document).ready(function(){

  $('#enable_register').change(function(){
    if( $(this).val() == "0" ){
      $('#default_group_div').slideDown();
    }else{
      $('#default_group_div').hide();
    }
  }).trigger("change");

  $("#update_button").click(function(){

    if (currentTab == 0)
      $("#update_company_button").trigger("click");
    if (currentTab == 2)
      $("#update_mapping_button").trigger("click");
  })

  $('.show_reference').click(function(){
    $.get(
      SITE_URL+"/invoices/get_next_reference",
      {
        "t": $('#reference_type').val(),
        "p": $('#prefix_invoice').val(),
      },
      function(data){
        alert(data.reference, "Reference");
      },
      "JSON"
    );
  });

  var SUBMIT = false;
  $('#form_settings_general').submit(function(){
    if( $('#reference_type').val() == <?php echo REFERENCE_TYPE ?> ) {
      SUBMIT = true;
    }
    if( !SUBMIT ){
      bconfirm(globalLang["reference_type_changed"], function(){
        $('input[name=reset_all_references]').val(1);
        SUBMIT = true;
        $('#form_settings_general').submit();
      }, function(){
        $('input[name=reset_all_references]').val(0);
        SUBMIT = true;
        $('#form_settings_general').submit();
      });
    }
    return SUBMIT;
  });


  $("#currency").select2({
    width: 'resolve',
    minimumResultsForSearch: 5
  });

  $("#default_country").select2({
    width: 'resolve',
    minimumResultsForSearch: 5,
    formatResult: function (country) {
      if (!country.id) { return country.text; }
      return $('<span><i class="countries-flags ' + $(country.element).data("flag").toLowerCase() + '"></i> ' + country.text + '</span>');
    },
    formatSelection: function (country){
      if (!country.id) { return country.text; }
      return $('<span><i class="countries-flags ' + $(country.element).data("flag").toLowerCase() + '"></i> ' + country.text + '</span>');
    }
  });

  $('#general_tabs a').click(function (e) {
    e.preventDefault();
    createCookie("settings_general_tab", $(this).attr("href"));
    $(this).tab('show');
  });
  //$('#general_tabs a[href="#general_system"]').tab('show');
  var general_tab = "<?php echo isset($_GET['tab'])?$_GET['tab']:"general_system" ?>";
  $('#general_tabs a[href="#'+general_tab+'"]').tab('show');
  if( (general_tab_cookie = readCookie("settings_general_tab")) != undefined ){
    $('#general_tabs a[href="'+general_tab_cookie+'"]').tab("show");
    eraseCookie("settings_general_tab");
  }

  fiscal_tb = $('#fiscal_tb').dataTable( {
        "oColVis": {
            "aiExclude": [0, 6],
        },
        "aoColumnDefs": [{
            "bVisible": false,
        }],
        "aaSorting": [[ 0, "desc" ]],
        'bProcessing'    : true,
        'bServerSide'    : true,
        'sAjaxSource'    : SITE_URL+'/settings/getFiscalData',
        'fnServerData': function(sSource, aoData, fnCallback)
        {
            aoData.push( { "name": CSRF_NAME, "value": CSRF_HASH } );
            $.ajax({'dataType':'json','type':'POST','url': sSource,'data':aoData,'success':fnCallback});
        },
        "aoColumns": [
            { "sName": 'month', "mDataProp": 'month', "mRender": description_format},
            { "sName": 'year'  , "mDataProp": 'year'  , "mRender": description_format},
            { "sName": 'status'  , "mDataProp": 'status'  , "mRender": status_format1},
            { "sName": 'posted_date'  , "mDataProp": 'posted_date'  , "mRender": description_format},
            { "sName": 'posted_user'  , "mDataProp": 'posted_user'  , "mRender": description_format},
            { "bSortable": false, "mRender": fiscal_action_format , "bSearchable": false}
        ]
    }).advancedSearch({
        aoColumns:[
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "select", values: <?php echo json_encode("") ?> },
            null
        ]
    });

    $('#jmp_a1, #jmp_a2, #jmp_a3, #jmp_a4, #jms_a1, #jms_a2, #jms_a3,#jma_a1, #jma_a2, #jma_a3, #jmc_a1')
    .change(function(){
        
    })
    .blur(function(){
      //$(this).val("");
    })
    .easyAutocomplete({
        data: <?php echo $jm_autocomplete_data;?>,
        getValue: "account_number",
        placeholder: globalLang["jm_autocomplete_placholder"],
        minCharNumber: <?php echo SUGGESTION_LENGTH ?>,
        use_on_focus: true,
        list: {
            match: {
              enabled: true
            },
            maxNumberOfElements: <?php echo SUGGESTION_MAX ?>,
            hideOnEmptyPhrase: false,
        }
    });
  });
</script>
