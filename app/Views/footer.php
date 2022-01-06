<footer class="main-footer">
  <div class="pull-right d-none d-sm-inline-block">
    <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#">Nuevos productos</a>
      </li>
    </ul>
  </div>
  &copy; <?php echo date('Y'); ?> <a href="https://www.elicita.com">eLicita</a>, Sistema desarrollado por <a href="https://www.software-adhoc.com">Software-adhoc</a>. Todos los derechos reservados.
</footer>

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- popper -->
<script src="<?php echo base_url(); ?>/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	

<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url(); ?>/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<script src="<?php echo base_url(); ?>/js/template.js"></script> 
<script src="<?php echo base_url(); ?>/js/pubs.js"></script> 
<!-- <script src="<php echo base_url(); ?>/js/demo.js"></script> -->

<?php
    if(isset($js_plugins)){
        foreach($js_plugins as $js_plugin){
            echo $js_plugin.PHP_EOL;
        }
    }
?>

</body>
</html>