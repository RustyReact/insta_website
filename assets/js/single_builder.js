var template_id = -1;
$(document).ready(function(){

      $('.template-container, .template-container .thumb').on('click', function() {
        if( $( this ).hasClass( 'template-container' ) ) {
          $(this).children('input').click();
        }
        if( $( this ).hasClass( 'thumb' ) ) {
          $(this).siblings('input').click();
        }
      });

      $('[name="template_id"]:checked').each(function(){
        if(template_id < 0) location.reload();
      });

      $('.template-container *').on('click', function(e){
        e.stopPropagation();
      });

      $('input').on('blur, change, keyup, click', function(){
        checkAndEnableButton();
      })

      $("#bulk-load-proceed").on("click", function(event){

        var ajax_data        = {};
        ajax_data[CSRF_NAME] = CSRF_HASH;
        ajax_data['business_name']= $('#name').val();
        ajax_data['phone']= $('#phone').val();
        ajax_data['email']= $('#email').val();
        ajax_data['street']= $('#street').val();
        ajax_data['postal']= $('#postal').val();
        ajax_data['country']= $('#country').val();
        ajax_data['firstname']= $('#firstname').val();
        ajax_data['lastname']= $('#lastname').val();
        ajax_data['suite']= $('#suite').val();
        ajax_data['city']= $('#city').val();
        ajax_data['state']= $('#state').val();
        ajax_data['template_id'] = template_id;

        $.ajax({
            type: "POST",
            data: ajax_data,
            dataType: "JSON",
            url: SITE_URL+"/single_builder/upload",
            error: function (xhr, status, error) {
              
                showToastr("error", error);
            },
            success: function(result) {
                if (result.status == "error"){
                  showToastr("error", result.message);
                }
                else{
                  $("#preview_link").attr("href", SITE_URL + "/preview/site/"+template_id+"/"+result.value);
                  showToastr("success", result.message);
                  $("#preview_link").trigger("click");
                  window.open(SITE_URL + "/preview/site/"+template_id+"/"+result.value, '_blank');
                }
            },
            beforeSend: function(){$('.loading-backdrop').fadeIn();},
            complete: function(){$('.loading-backdrop').fadeOut();}
        });
      })

      $('input[type="radio"].template_type').on('click', function(){
        template_id = $(this).val();
        checkAndEnableButton();
      })
  })

  function checkAndEnableButton(){

      if ($.trim($("#name").val()) != "" &&
          $.trim($("#phone").val()) != "" &&
          $.trim($("#email").val()) != "" &&
          $.trim($("#city").val()) != "" &&
          $.trim($("#state").val()) != ""  &&
          $("[name='tos']:checked").length > 0 &&
          template_id > 0)
      {
        $("#bulk-load-proceed").removeClass("not-active");
      }else{
        $("#bulk-load-proceed").addClass("not-active");
      }
  }