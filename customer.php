<?php
include "connect.php";
include "customer_controller.php";
$result= getCustomers($conn);
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
              <h6 class="m-0 font-weight-bold text-primary">Customers</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                            <th>id</th>
                            <th>customer_name</th>
                            <th>customer_email</th>
                            <th>customer_num</th>
                            <th>gender</th>
                            <th>Update</th>
                            </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>id</th>
                            <th>customer name</th>
                            <th>customer email</th>
                            <th>customer num</th>
                            <th>gender</th>
                            <th>Update</th>
                            </tr>
                  </tfoot>
                  <tbody>
<?php
                        foreach($result as $row)
                        {
                            ?>
                        <tr>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['customer_name'];?></td>
                            <td><?=$row['customer_email'];?></td>
                            <td><?=$row['customer_number'];?></td>
                            <td><?=$row['gender'];?></td>
                        <td>
                            <form action="customerRegistration.php" method="POST">
                                <input type="hidden" name="action" value="updateCustomer"/>
                                <input type="hidden" name="id" value="<?=$row['id'];?>"/>
                                <input type="submit" class="btn btn-danger" name="update" value="update"/>
                            </form>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>
                  </tbody>
                </table>
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