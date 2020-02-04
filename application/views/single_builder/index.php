<?php
$name = array(
  'name'         => 'item[name]',
  'id'           => 'name',
  'value'        => set_value("item[name]", ""),
  'class'        => "form-control",
  'tabindex'     => "1",
  'autocomplete' => "off",
  'placeholder'  => lang("bussiness_name"),
  'required'     => ""
);


$phone = array(
  'name'         => 'item[phone]',
  'id'           => 'phone',
  'value'        => set_value("item[phone]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "(XXX)XXX-XXXX"
);

$email = array(
  'name'         => 'item[email]',
  'id'           => 'email',
  'value'        => set_value("item[email]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "email@example.com"
);

$street = array(
  'name'         => 'item[street]',
  'id'           => 'street',
  'value'        => set_value("item[street]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "Street Address"
);

$suite = array(
  'name'         => 'item[suite]',
  'id'           => 'suite',
  'value'        => set_value("item[suite]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "Suite, Apt, Room #"
);

$city = array(
  'name'         => 'item[city]',
  'id'           => 'city',
  'value'        => set_value("item[city]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "City"
);

$state = array(
  'name'         => 'item[state]',
  'id'           => 'state',
  'value'        => set_value("item[state]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "State/Province"
);

$postal = array(
  'name'         => 'item[postal]',
  'id'           => 'postal',
  'value'        => set_value("item[postal]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "Zip/Postal Code",
  'style'        => "margin-left:10px"
);

$country = array(
  'name'         => 'item[country]',
  'id'           => 'country',
  'value'        => set_value("item[country]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "Country",
  'style'        => "margin-left:10px"
);

$firstname = array(
  'name'         => 'item[firstname]',
  'id'           => 'firstname',
  'value'        => set_value("item[firstname]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "First Name"
);

$lastname = array(
  'name'         => 'item[lastname]',
  'id'           => 'lastname',
  'value'        => set_value("item[lastname]", ""),
  'class'        => "form-control",
  'autocomplete' => "off",
  'placeholder'  => "Last Name"
);

$this->load->enqueue_script("assets/js/single_builder.js");
?>




<!-- Page Header -->
<ol class="breadcrumb">
    <div class="flip pull-left">
        <h1 class="h2 page-title"><?php echo $page_title;?></h1>
    </div>
    
</ol>

<div class="container-fluid">
    <div class="p-x-h">
        
        <div class="row row-equal">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header card-header-inverse card-header-info">
                        <h4 class="card-title"><?php echo lang("fill_out_form"); ?></h4>
                    </div>
                    <div class="card-block">
                        <div class="row form-group required">
                            <div class="col-md-12 form-control-div">
                              <?php echo form_input($name); ?>
                            </div>
                        </div>
                        <div class="row form-group required">
                            <div class="col-lg-6 col-xs-12 form-control-div">
                              <?php echo form_input($phone); ?>
                            </div>
                            <div class="col-lg-6 col-xs-12 form-control-div">
                              <?php echo form_input($email); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-6 col-sm-12 form-control-div">
                              <?php echo form_input($street); ?>
                            </div>
                            <div class="col-lg-6 col-sm-12 form-control-div">
                              <?php echo form_input($suite); ?>
                            </div>
                        </div>

                        <div class="row form-group required">
                            <div class="col-lg-3 col-xs-12 form-control-div">
                              <?php echo form_input($city); ?>
                            </div>
                            <div class="col-lg-3 col-xs-12 form-control-div">
                              <?php echo form_input($state); ?>
                            </div>

                            <div class="col-lg-3 col-xs-12">
                              <?php echo form_input($postal); ?>
                            </div>

                            <div class="col-lg-3 col-xs-12">
                              <?php echo form_input($country); ?>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                              <div class="col-lg-6 col-sm-12 form-control-div">
                                <?php echo form_input($firstname); ?>
                              </div>
                              <div class="col-lg-6 col-sm-12 form-control-div">
                                <?php echo form_input($lastname); ?>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-equal">
            <div class="col-lg-12">
              <div class="card">
                  <div class="card-header card-header-inverse card-header-info">
                        <h4 class="card-title">Select Notifications</h4>
                  </div>
                  <div class="card-block">
                        <div class="row row-equal ">
                            <div class="col-md-6 cb-container">
                                <div class="cb-email">
                                    <section>
                                      <p>Send Email</p>
                                      <section class="feature-image" style="background-image:url(assets/img/mailbox.jpeg)"></section>
                                    </section>
                                    <section>
                                      <span class="notification-description">Turn this on to send out an email notification to your prospect with a preview link to their new website.</span>
                                      <div style="margin-top: 19px;text-align: center">
                                        <label class="switch switch-sm switch-icon switch-success-outline-alt">
                                          <?php echo form_checkbox('mail_noti', '1', FALSE, 'id="mail_noti" class="switch-input"');?>
                                          <span class="switch-label" data-on="&#xF00C;" data-off="&#xF00D;"></span>
                                          <span class="switch-handle"></span>
                                        </label>
                                      </div>
                                      <div class="template-select-container" id="email_template_select"></div>
                                    </section>        
                                </div>
                            </div>
                            <div class="col-md-6 cb-container">
                                <div class="cb-sms">
                                    <section>
                                      <p>Send SMS</p>
                                      <section class="feature-image" style="background-image:url(assets/img/SMS.png)"></section>
                                    </section>
                                    <section>
                                      <span class="notification-description">Turn this on to send out an SMS text message notification to your prospect with a preview link to their new website.</span>
                                      <span class="popovers notification-container" data-toggle="kt-tooltip" data-trigger="hover" data-placement="left" data-content="SMS is disabled. Upgrade to a paid plan to enable." data-original-title="" title="">
                                        <div style="margin-top: 19px;text-align: center">
                                        <label class="switch switch-sm switch-icon switch-success-outline-alt">
                                          <?php echo form_checkbox('sms_noti', '1', FALSE, 'id="sms_noti" class="switch-input"');?>
                                          <span class="switch-label" data-on="&#xF00C;" data-off="&#xF00D;"></span>
                                          <span class="switch-handle"></span>
                                        </label>
                                      </div>
                                      </span>
                                      <div class="template-select-container" id="sms_template_select"></div>  
                                    </section>          
                                  </div>
                            </div>
                        </div>
                  </div>
              </div>
            </div>
        </div>

        <!-- WIDGETS -->
        <div class="row row-equal">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header card-header-inverse card-header-info">
                        <h4 class="card-title">Select Instasite Template</h4>
                    </div>
                    <div class="card-block">
                        <div class="row row-equal templates-container">
                            <div class="col-md-3">
                              <div class="template-container">
                                 <input type="radio" name="template_id" class="template_type" value="2">Locksmith                   
                                 <div class="thumb" style="background-image:url(storage/template/locksmith.png)"></div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="template-container">
                                 <input type="radio" name="template_id" class="template_type" value="3">Locksmith                   
                                 <div class="thumb" style="background-image:url(storage/template/appfast.png)"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tos">
                    <input type="checkbox" name="tos" required=""  data-lpignore="true"> I agree to the <a href="#tos" data-toggle="modal">Terms of Service</a>
                </div>
                <div class="div-submit">
                  <input type="button" id="bulk-load-proceed" class="not-active"  value="Build InstaSite" data-lpignore="true">
                </div>
                <a href="#" target="_blank" style="display: none" id="preview_link"></a>
            </div>
        </div>
        
    </div>
</div>


