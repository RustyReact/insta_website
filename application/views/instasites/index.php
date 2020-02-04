<?php
$this->load->enqueue_style("assets/css/style-setting.css", "custom");
$this->load->enqueue_script("assets/vendor/jquery-datatable/js/jquery.dataTables.min.js");
$this->load->enqueue_script("assets/vendor/jquery-datatable/js/dataTables.colVis.js");
$this->load->enqueue_script("assets/vendor/jquery-datatable/js/dataTables.advancedSearch.js");
$this->load->enqueue_script("assets/vendor/jquery-datatable/js/DT_bootstrap.js");
echo $this->load->css("custom");
?>
<style type="text/css">
    .tip-datatable{
        text-align: center;
    }
</style>

<!-- Page Header -->
<ol class="breadcrumb">
    <div class="flip pull-left">
        <h1 class="h2 page-title"><?php echo $page_title;?></h1>
    </div>
    
</ol>

<div class="container-fluid">
    <div class="p-x-h">
        <div class="row-fluid">
		  <div class="display-table">
		    <div class="display-margin bordered_tabs">
		      <ul class="nav nav-tabs" id="configuration_email">
		        <li class="nav-item"><a class="nav-link" href="#prospect">Prospect</a></li>
		        <li class="nav-item"><a class="nav-link" href="#active">Active</a></li>
		        <li class="nav-item"><a class="nav-link" href="#purged">Purged</a></li>
		        <li class="nav-item"><a class="nav-link" href="#queued">Queued</a></li>
		      </ul>
		      <div class="tab-content" style="padding-top: 40px;">
		        <div class="tab-pane form-horizontal" id="prospect">
		           <table id="prospect_table" class="table table-sm table-hover serverSide">
					<thead>
						<tr>
                            <th style="width:35px; text-align: center;"><?php echo "N°"; ?></th>
                            <th><?php echo "Bussiness Name"; ?></th>
                            <th><?php echo "Phone"; ?></th>
                            <th><?php echo "Email"; ?></th>
                            <th><?php echo "Status"; ?></th>
                            <th><?php echo "Website ID"; ?></th>
                            <th><?php echo "Created"; ?></th>
                            <th style="text-align: center"><?php echo "Preview"; ?></th>
                            <th style="text-align: center"><?php echo "Purchase"; ?></th>
                            <th style="text-align: center"><?php echo "More"; ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="15" class="dataTables_empty"><?php echo "Loading Data..."; ?></td>
						</tr>
					</tbody>
				</table>
		        </div>
		        <div class="tab-pane form-horizontal" id="active">
		        	Active
		        </div>
		        <div class="tab-pane form-horizontal" id="purged">
		        	Active
		        </div>
		        <div class="tab-pane form-horizontal" id="queued">
		        	Active
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
    </div>
</div>

<script type="text/javascript">

var prospect_table;
$(document).ready(function() {

	$('#configuration_email a').click(function (e) {
		    e.preventDefault();
		    $(this).tab('show');
		  });
		  $('#configuration_email a[href="#prospect"]').tab('show');

    var filter, value;
    prospect_table = $('#prospect_table').dataTable( {
        "oColVis": {
            "aiExclude": [0,1],
        },
        "aoColumnDefs": [{
            "bVisible": false
        }],
        "aaSorting": [[ 1, "desc" ]],
        'bProcessing'    : true,
        'bServerSide'    : true,
        'sAjaxSource'    : SITE_URL+'/instasites/get_data_prospect',
        'fnServerData': function(sSource, aoData, fnCallback)
        {
            aoData.push( { "name": CSRF_NAME, "value": CSRF_HASH } );
            $.ajax
            ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
            });
        },
        'fnDrawCallback': function(){
        },
        "aoColumns": [
            { "sName": 'id',                "mDataProp": 'id',              "mRender": number_format},
            { "sName": 'business_name',     "mDataProp": 'business_name',   "mRender": name_format},
            { "sName": 'phone',             "mDataProp": 'phone',           "mRender": name_format},
            { "sName": 'email',             "mDataProp": 'email',           "mRender": name_format},
            { "sName": 'status',            "mDataProp": 'status',          "mRender": status_format},
            { "sName": 'website_id',        "mDataProp": 'website_id',      "mRender": name_format},
	        { "sName": 'created',           "mDataProp": 'created',         "mRender": date_format},
	        { "bSortable": false,           "mRender": preview_format,      "bSearchable": false },
            { "bSortable": false,           "mRender": purchase_format,      "bSearchable": false },
            { "bSortable": false,           "mRender": info_format,      "bSearchable": false }
        ]
    }).advancedSearch({
        aoColumns:[
            null,
            null,
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            { type: "text", bRegex:true },
            null
        ]
    });

    $('.columns-list').on("click", "ul", function(e){
        e.stopPropagation();
    });

    $('a[href="#refresh-list"]').bind('click', function() {
        prospect_table._fnReDraw();
        return false;
    });

    prospect_table.on("select-count", function(e){
        var table = $(this);
        var select_count = table.data("select-count");
        if( select_count > 0 ){
            html = globalLang["selected"]+" <b>"+select_count+"</b> "+globalLang["item"+(select_count==1?"":"s")]+".";
            table.closest(".dataTables_wrapper").find('.select_area').html(html).show();
        }else{
            table.closest(".dataTables_wrapper").find('.select_area').hide();
        }
    });

    $(document).on('click', '.delete_selected', function() {
        if( !$(this).is('.disabled') ){
            var selected_rows = {};
            $.each($(".checkable_datatable tr.row_selected .row_checkbox"), function(i, checkbox){
                selected_rows["id["+i+"]"] = $(checkbox).data("id");
            });
            bconfirm(globalLang['alert_confirmation'], function(){
                $('#prospect_table').load_ajax(SITE_URL+"/items/delete", 'POST', selected_rows);
            });
        }
        return false;
    });
});

function actions_format(data, type, row, meta){
    actions = '<div class="btn-group">'+
                '<button data-toggle="dropdown" class="dropdown-toggle btn btn-sm btn-secondary" aria-expanded="true">'+
                    '<span><i class="icon-settings"></i></span>'+
                '</button>'+
                '<ul class="dropdown-menu dropdown-menu-right">';
    actions += $('#items_table').create_datatable_action("trash", SITE_URL+"/je_current/delete?id="+row.id, globalLang['delete'], false, true, false, true);
    actions += $('#items_table').create_datatable_action("pencil", SITE_URL+"/je_current/edit?id="+row.id, globalLang['edit'], false, false, true);
    actions += '</ul></div>';
    return "<center>"+actions+"</center>";
}

function preview_format(data, type, row, meta){

    var preview = "";
    var href = SITE_URL + "/preview/site/"+row.template_id+"/"+row.website_id;
    preview = '<div>'+
                '<a href="' + href + '" target="_blank" class="btn btn-primary">';   
    preview += 'Preview</a></div>';
    return "<center>"+preview+"</center>";
}

function purchase_format(data, type, row, meta){

    var preview = "";
    preview = '<div>'+
                '<button class="btn btn-primary">';

    // actions += $('#prospect_table').create_datatable_action("", SITE_URL+"/je_current/delete?id="+row.id, globalLang['delete'], false, true, false, true);
    
    preview += 'In Cart</button></div>';
    return "<center>"+preview+"</center>";
}

function info_format(data, type, row, meta){

    var preview = "";
    preview = '<div>'+
                '<a class="" style="font-size:20px">';
    preview += '<i class="fa fa-info-circle"></i></a></div>';
    return "<center>"+preview+"</center>";
}

function number_format(data, type, row, meta) {
    return "<center><small>"+data+"</small></center>";
}
function name_format(value) {
    var html = "<small class='font-weight-bold'>"+value+"</small>";
    return  html;
}

function status_format(value){
    var v = "No Status";
    if (value == 1)
        v = "Prospect";
    if (value == 2)
        v = "Active";
    if (value == 3)
        v= "Purged";
    if (value == 4)
        v= "Queued";

    var html = "<small class='font-weight-bold'>"+v+"</small>";
    return  html;

}

function description_format(value) {
    var html = "<small>"+value+"</small>";
    return  html;
}
function category_format(value) {
    if( value != undefined ){
        var html = "<small>"+value+"</small>";
        return  html;
    }
    return "";
}
function unit_format(value) {
    if( value != undefined ){
        var html = "<small>"+value+"</small>";
        return  html;
    }
    return "";
}
function c_normal_format(value) {
    if( value == 'null' || value == null ){
        return "";
    }
    var html = "<small>"+value+"</small>";
    return  html;
}
function prices_format(value, type, row, meta) {
    prices = value.split(",");
    result = [];
    for (var i = 0; i < prices.length; i++) {
        var value = prices[i].split("%");
        price = value[0];
        currency = value[1];
        row.currency = currency;
        result.push(Format_Currency(price, type, row));
    }
    return  "<small>"+result.join("")+"</small>";
}
function tax_format(value, type, row, meta) {
    if( value == 0 ){
        result = "<div class='' dir='ltr'>-</div>";
    }else if( row.tax_type == 0 ){
        result = "<div class='' dir='ltr'>"+value + " <b>%</b>"+"</div>";
    }else{
        result = Format_Currency(value,type,row,meta);
    }
    return  "<small>"+result+"</small>";
}
function discount_format(value, type, row, meta) {
    if( value == 0 ){
        result = "<div class='' dir='ltr'>-</div>";
    }else if( row.discount_type == 0 ){
        result = "<div class='' dir='ltr'>"+value + " <b>%</b>"+"</div>";
    }else{
        result = Format_Currency(value,type,row,meta);
    }
    return  "<small>"+result+"</small>";
}

function date_format(value) {
      var html = "<small>"+Format_Date(value)+"</small>";
      return  filter_format(html, "date", value, Format_Date(value));
    }

 function gl_status_format(x, y ,row) {
        var status = x;
        if( x == "open" ){
            status = "<span class='label label-tall label-success'>"+globalLang[x]+"</span>";
        }
 
        if( x == "posted" ){
            status = "<span class='label label-tall label-danger'>"+globalLang[x]+"</span>";
        }
       

        <?php if (!$this->ion_auth->in_group(array("customer", "supplier"))): ?>
            var html = "<a href='#' class='text-inherit status_popover' data-toggle='popover' data-id='"+row.id+"' data-status='"+x+"' data-value='"+globalLang[x]+"' >"+status+"</a>";
            return html;
        <?php else: ?>
            return filter_format(status, "status", x, globalLang[x]);
        <?php endif ?>
    }
</script>


