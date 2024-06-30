    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Record Stock Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Record</li>
              <li class="breadcrumb-item">Stock Request</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>DATE TIME</th>
                    <th>RECORD NO</th>
                    <th>PART NAME</th>
                    <th>PART TYPE</th>
                    <th>MAKER</th>
                    <th>DEPT BEFORE</th>
                    <th>QTY BEFORE</th>
                    <th>DEPT TAKE</th>
                    <th>QTY TAKE</th>
                    <th>QTY AFTER</th>
                    <th>PRICE EST</th>
                    <th>REMARK</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
				  $no = 0;
          $dept = $_SESSION['nama'];
				  $query = mysqli_query($koneksi,"SELECT * FROM tb_rec_req WHERE dept_before = '$dept' or dept_after = '$dept'");
				  while($part = mysqli_fetch_array($query)){
					$no++
				  ?>
          <tr>
				  <td width='5%'><?php echo $no;?></td>
				  <td><?php $date = $part['datetime'];
          echo $date;?></td>
          <td>R<?php echo $part['id'];?></td>
          <td><?php echo $part['part_name'];?></td>
				  <td><?php echo $part['part_type'];?></td>
				  <td><?php echo $part['maker'];?></td>
				  <td><?php echo $part['dept_before'];?></td>
				  <td><?php echo $part['qty_stock'];?></td>
          <td><?php echo $part['dept_after'];?></td>
				  <td><?php echo $part['qty_take'];?></td>
          <td><?php echo ($part['qty_stock']-$part['qty_take']);?></td>
				  <td><?php echo number_format($part['price']); ?></td>
				  <td><?php echo $part['remark'];?></td>
				  
				  </tr>
				  <?php }?>
				  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 