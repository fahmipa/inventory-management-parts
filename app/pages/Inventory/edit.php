<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_inventory WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Inventory</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='pages/Inventory/edit_data.php'>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>PART NAME</label>
                        <input type="text" class="form-control" name='part_name' placeholder="ENTER PART NAME ..." value="<?php echo $view['part_name'];?>">
                        <input type="text" class="form-control" name='id' placeholder="ENTER ID ..." value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>PART TYPE</label>
                        <input type="text" class="form-control" name='part_type' placeholder="ENTER PART TYPE ..." value="<?php echo $view['part_type'];?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>MAKER</label>
                        <input type="text" class="form-control" name='maker' placeholder="ENTER MAKER ..." value="<?php echo $view['maker'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>STANDARD QUANTITY</label>
                        <input type="text" class="form-control" name='std_stock' placeholder="ENTER STANDARD QUANTITY ..." value="<?php echo $view['std_stock'];?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>STOCK QUANTITY</label>
                        <input type="text" class="form-control" name='qty_stock' placeholder="ENTER STOCK QUANTITY ..." value="<?php echo $view['qty_stock'];?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>PRICE</label>
                        <input type="text" class="form-control" name='price' placeholder="ENTER PRICE ..." value="<?php echo $view['price'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>DEPT</label>
                        <input type="text" class="form-control" name='dept' placeholder="ENTER DEPT ..." value="<?php echo $view['dept'];?>" readonly="true">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>PLANT</label>
                        <input type="text" class="form-control" name='plant' placeholder="ENTER PLANT ..." value="<?php echo $view['plant'];?>" readonly="true">
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ADDRESS</label>
                            <input type="text" class="form-control" name='address' placeholder="ENTER ADDRESS ..." value="<?php echo $view['address'];?>">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>REMARK</label>
                        <input type="text" class="form-control" name='remark' placeholder="ENTER REMARK ..." required>
                      </div>
                    </div>
                  </div>  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->

    </section>