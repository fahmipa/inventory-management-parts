    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Stock Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Inventory</li>
              <li class="breadcrumb-item">Stock Update</li>
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
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">  
                  Adding New Data
                </button>
                <br></br>
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
                    $dept = $_SESSION['nama'];
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_inventory WHERE dept = '$dept'");
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
                    <a href="index.php?pages=edit&& id=<?php echo $part['id'];?>" class="btn btn-xs btn-primary">
                      <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <a onclick="delete_data(<?php echo $part['id'];?>)" class="btn btn-xs btn-danger">
                      <i class="fas fa-trash"></i> Delete
                    </a>
                    </td>
                    </tr>
                    <?php }
                  ?>
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
 <!-- /.modal -->

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Adding New Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="pages/inventory/add_data.php">
            <div class="modal-body">
                <div class="form-col">
                  <div class = "form-group">
                      <label>PART NAME</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER PART NAME ..." name="part_name" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>PART TYPE</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER PART TYPE ..." name="part_type" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>MAKER</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER MAKER ..." name="maker" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>STANDARD STOCK</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER STD STOCK ..." name="std_stock" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>QUANTITY STOCK</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER QTY STOCK ..." name="qty_stock" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>PRICE</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER PRICE ..." name="price" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>DEPT</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER DEPT ..." name="dept" value=<?php echo $_SESSION['nama'];?> readonly="true">
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>PLANT</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER PLANT ..." name="plant" value=<?php echo $_SESSION['plant'];?> readonly="true">
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>ADDRESS</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER ADDRESS ..." name="address" required>
                    </div>
                  </div>
                  <div class = "form-group">
                      <label>REMARK</label>
                    <div class = "input-group">
                      <input type="text" class="form-control" placeholder="ENTER REMARK ..." name="remark" required>
                    </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-info">Save</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
<script>
  function delete_data(data_id){
  Swal.fire({
  title: 'Are you sure delete this data?',
  showCancelButton: true,
  confirmButtonColor: '#cd5c5c',
  confirmButtonText: 'Yes, Delete!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location=("pages/Inventory/delete_data.php?id="+data_id)
  } else if (result.isDenied){
    Swal.fire('Changes are not saved', '', 'info')
  }
  })
  }
  /*{
  window.location=("../logout.php")
  }*/
</script>

