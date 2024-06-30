    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Inventory</li>
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
                    <th>No</th>
                    <th>PART NAME</th>
                    <th>PART TYPE</th>
                    <th>MAKER</th>
                    <th>STD QTY</th>
                    <th>STOCK QTY</th>
                    <th>PRICE/UNIT</th>
                    <th>DEPT</th>
                    <th>PLANT</th>
                    <th>ADDRESS</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
				  $no = 0;
				  $query = mysqli_query($koneksi,"SELECT * FROM tb_inventory");
				  while($part = mysqli_fetch_array($query)){
					$no++
				  ?>
          <tr>
				  <td width='5%'><?php echo $no;?></td>
				  <td><?php echo $part['part_name'];?></td>
				  <td><?php echo $part['part_type'];?></td>
				  <td><?php echo $part['maker'];?></td>
				  <td><?php echo $part['std_stock'];?></td>
				  <td><?php echo $part['qty_stock'];?></td>
				  <td><?php echo number_format($part['price']); ?></td>
				  <td><?php echo $part['dept'];?></td>
				  <td><?php echo $part['plant'];?></td>
				  <td><?php echo $part['address'];?></td>
				  <td>
          <a href="index.php?pages=take&& id=<?php echo $part['id'];?>" class="btn btn-xs btn-success">
            <i class="fas fa-cart-arrow-down"></i> Take
          </a>
          </td>
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
 