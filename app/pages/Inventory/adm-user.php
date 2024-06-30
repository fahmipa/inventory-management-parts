    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item">User</li>
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
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>LEVEL</th>
                    <th>PLANT</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
				  $no = 0;
          $dept = $_SESSION['nama'];
				  $query = mysqli_query($koneksi,"SELECT * FROM tb_users");
				  while($part = mysqli_fetch_array($query)){
					$no++
				  ?>
          <tr>
				  <td width='5%'><?php echo $no;?></td>
          <td><?php echo $part['id'];?></td>
          <td><?php echo $part['nama'];?></td>
          <td><?php echo $part['username'];?></td>
				  <td><?php echo $part['password'];?></td>
				  <td><?php echo $part['level'];?></td>
				  <td><?php echo $part['plant'];?></td>
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
 