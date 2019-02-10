<?php
include "connect.php";
include "customer_controller.php";
include 'header.php';
?>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
<?php
include "sidebar.php";
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
<?php
include "topbar.php";
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Customer Registration</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <form  method="POST" class="user" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" name="customer_name" placeholder="Customer Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="number" name="customer_number"  placeholder="Customer Number">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="customer_email" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="gender" name="gender" placeholder="Gender">
                  </div>
                    <input type="hidden" name="action" value="customerRegistration"/>
                </div>
                
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit"/>
              
              </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
include "footer.php";
?>