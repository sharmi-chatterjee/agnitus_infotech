
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Country</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $path = base_url('assets/');
  ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <style>
    .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
  </style>
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $path;?>index3.html" class="nav-link">Home</a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
  <!--   <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->


    



  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
      <img src="<?php echo $path;?>dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $path;?>dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sharmi Chatterjee</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Country
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(''); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Country Listing</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Country Listing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Country Listing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
       


        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Country List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Iso2 Code</th>
                    <th>Region</th>
                    <th>Income Level</th>
                    <th>Capital City</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="product_tbl">
                  
                  <?php 
                    if (!empty($country_details)) {
                      foreach ($country_details as $country) { ?>
                        <tr>
                          <td><?php echo $country['name']; ?></td>
                          <td><?php echo $country['iso2Code']; ?></td>
                          <td>
                            <?php 
                              $type = 'region';
                              $details = getSubDetails($country['country_id'],$type);
                              echo 'Region id :'. $details->id.'<br>';
                              echo 'Region iso2code :'. $details->iso2code.'<br>';
                              echo 'Region value :'. $details->value.'<br>';
                            ?>
                          </td>
                          <td>
                            <?php 
                              $type = 'incomeLevel';
                              $details = getSubDetails($country['country_id'],$type);
                              echo 'Income Level id :'. $details->id.'<br>';
                              echo 'Income Level iso2code :'. $details->iso2code.'<br>';
                              echo 'Income Level value :'. $details->value.'<br>';
                            ?>
                          </td>
                          <td><?php echo $country['capitalCity']; ?></td>
                          <td><?php echo $country['latitude']; ?></td>
                          <td><?php echo $country['longitude']; ?></td>


                          <td><a href="javascript:void(0);" onclick="popUpshow('<?php echo $country['country_id'] ?>')"  class="btn btn-link text-yellow fs-14" data-toggle="modal" data-target="#editaddress1">
                            <i class="fas fa-pencil-alt text-secondary" aria-hidden="true" title="Edit"></i>
                          </a>
                          </td>
                        </tr>
                  <?php  }
                    }
                  ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Iso2 Code</th>
                    <th>Region</th>
                    <th>Income Level</th>
                    <th>Capital City</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>





        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  


    
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












<script>
$(document).ready( function () {
    $('#example1').DataTable();
} );
</script>







<!---------------------------------------- Edit country Modal ------------------------->
  <div class="modal fade new_adds" id="editcountrymodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Country</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
               <!-- <form id="adds_new_address"> -->
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Edit Country : </label>

                    <input type="hidden" name="country_id" class="form-control" id="country_id" value="">


                    


                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Country Name : </label>
                    <input type="text" name="name" class="form-control" id="name"  value="" readonly="">
                  </div> 

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Country Iso2Code : </label>
                    <input type="text" name="iso2Code" class="form-control" id="iso2Code"  value="" readonly="">
                  </div> 


                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Income Level  : </label>
                    <div class="row">
                      <div class="col-sm-6">
                        <input type="text" name="incomeLevel_iso2code" class="form-control" id="incomeLevel_iso2code" placeholder="Income level iso2code"  value="" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="incomeLevel_value" class="form-control" id="incomeLevel_value" placeholder="Income level value"  value="" >
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Latitude : </label>
                    <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude" value=""  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Longitude : </label>
                    <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Capital City : </label>
                    <input type="text" name="capitalCity" class="form-control" id="capitalCity" placeholder="Capital City" value="">
                  </div>

                  
                    <div class="modal-footer border-0">
                      <button type="submit" class="btn btn-block bg-yellow text-white" onclick="updateCountry()">Update</button>
                    </div>
                <!-- </form> -->
            </div>

      </div>
      
    </div>
  </div>
</div>







<!-- show country details in pop up -->
<script>
   function popUpshow(country_id) {
        var country_id = country_id;
        $.ajax({
                url:"<?php echo base_url('admin/countryDetails'); ?>",
                method:"POST",
                data:{
                    country_id:country_id,
                    csrf_kruhappy_token:'<?php echo $this->security->get_csrf_hash(); ?>'
                },
                success:function(data)
                {
                    var obj = JSON.parse(data);
                    console.log(obj);
                    if (obj.status == "Success") {
                      $('#editcountrymodal').modal('show');
                      name                 = obj.items.name;
                      iso2Code             = obj.items.iso2Code;
                      latitude             = obj.items.latitude;
                      longitude            = obj.items.longitude;
                      capitalCity          = obj.items.capitalCity;
                      
                      incomeLevel_id       = obj.incomeLevel_id;
                      incomeLevel_iso2code = obj.incomeLevel_iso2code;
                      incomeLevel_value    = obj.incomeLevel_value;

                      $('#name').val(name);
                      $('#iso2Code').val(iso2Code);
                      $('#latitude').val(latitude);
                      $('#longitude').val(longitude);
                      $('#capitalCity').val(capitalCity);
                      $("#country_id").val(country_id);

                      $("#incomeLevel_iso2code").val(incomeLevel_iso2code);
                      $("#incomeLevel_value").val(incomeLevel_value);
                    }
                }
            });
    }   
</script>
<!-- Modal -->




<!-- Edit old country -->
<script>
    function updateCountry(){
        var name                = $("#name").val();
        var iso2Code            = $("#iso2Code").val();
        var latitude            = $("#latitude").val();
        var longitude           = $("#longitude").val();
        var capitalCity         = $("#capitalCity").val();
        var country_id          = $("#country_id").val();
        var incomeLevel_iso2code= $("#incomeLevel_iso2code").val();
        var incomeLevel_value   = $("#incomeLevel_value").val();
        var csrf   = '<?php echo $this->security->get_csrf_hash(); ?>';
        // alert(csrf);

        $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/updateCountryDetails'); ?>",
        data: {
            name:name,
            iso2Code:iso2Code,
            latitude:latitude,
            longitude:longitude,
            capitalCity:capitalCity,
            country_id:country_id,
            incomeLevel_iso2code:incomeLevel_iso2code,
            incomeLevel_value:incomeLevel_value,
            csrf_kruhappy_token:csrf
        },
        success: function(data){
            var obj = JSON.parse(data);
            if (obj.status == "Success") {
                
                $('#editcountrymodal').modal('hide');

                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: obj.msg,
                    animation: false,
                    type: "warning",
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: "YES",
                    closeOnConfirm: false,
                }).then((result) => {
                 window.location.reload();   
                })
            }
            if (obj.status == "Fail") {

                 Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: obj.msg,
                  animation: false,

                })
            }

            if (obj.status == "blank_fail") {
                 Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: obj.msg,
                  animation: false,

                })
            }
        },
        error: function() { alert("Error posting feed."); }
   });
    }
</script>





