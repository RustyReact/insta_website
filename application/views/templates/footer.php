
            </div>
            <!-- /.conainer-fluid -->
        </main>
        
        <footer class="footer">
            <small class="text-left">
                <a href="#">Bookkeeping software</a>
            </small>
            <small class="pull-right flip">
                Powered by <a href="mailto:bessemzitouni@gmail.com">PHP</a>
            </small>
        </footer>
<?php
$this->load->enqueue_script("assets/vendor/jquery-ui/jquery-ui.js");
$this->load->enqueue_script("assets/js/libs/tether.min.js");
$this->load->enqueue_script("assets/js/libs/bootstrap.min.js");
$this->load->enqueue_script("assets/js/libs/pace.min.js");
//$this->load->enqueue_script("assets/js/libs/Chart.min.js");
$this->load->enqueue_script("assets/vendor/chartjs/Chart.min.js");
$this->load->enqueue_script("assets/js/libs/select2.min.js");
$this->load->enqueue_script("assets/vendor/toastrjs/toastr.min.js");
$this->load->enqueue_script("assets/vendor/bootbox/bootbox.js");
$this->load->enqueue_script("assets/js/libs/gauge.min.js");
$this->load->enqueue_script("assets/vendor/moment/moment.js");
if( LANG != "en" ){
    $this->load->enqueue_script("assets/vendor/moment/locale/".LANG.".js");
}
$this->load->enqueue_script("assets/js/libs/daterangepicker.js");
$this->load->enqueue_script("assets/vendor/bootstrap.datepicker/js/bootstrap-datepicker.min.js");
$this->load->enqueue_script("assets/vendor/tinymce/js/tinymce/tinymce.min.js");
if( LANG != "en" ){
    $this->load->enqueue_script("assets/vendor/bootstrap.datepicker/locales/bootstrap-datepicker.".LANG.".min.js");
}
$this->load->enqueue_script("assets/js/libs/jquery.maskedinput.min.js");
$this->load->enqueue_script("index.php/settings/jsConstant/footer?v=".rand(1000, 9999));
$this->load->enqueue_script("assets/js/mainmenu.js");
$this->load->enqueue_script("assets/js/app.js");
echo $this->load->javascript();
?>
<script type="text/javascript">
$(document).ready(function(){
    $('#page_loading').fadeOut(function(){$(this).remove();});
});
</script>
        <div class="loading-backdrop"></div>
    </body>
</html>
