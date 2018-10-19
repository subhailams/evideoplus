

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>
        </div>
        <strong><a href="<?php echo base_url(); ?>"></a>.</strong> 
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
  
        <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
 
        <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
  </body>
</html>