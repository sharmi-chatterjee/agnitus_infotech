
 <?php
    $path = base_url('assets/backend/');
?>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $path;?>dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo $path;?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


 <!--sweetalert2-->
    <script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
    <link  href="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet">
    <?php /*<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> */?>
    <?php $this->load->view('include/sweetalert2_msg'); ?>


    <script>
        $( document ).ready(function() {
            call_message();
        });
    </script> 

</body>
</html>