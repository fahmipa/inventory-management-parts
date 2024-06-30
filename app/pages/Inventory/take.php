<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_inventory WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Detail Inventory</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                      <div class="form-group">
                        <label>PART NAME</label>
                        <input type="text" class="form-control" name='part_name' value="<?php echo $view['part_name'];?>" readonly="true">
                        <input type="text" class="form-control" name='id' value="<?php echo $view['id'];?>" hidden>
                      </div>
                      <div class="form-group">
                        <label>PART TYPE</label>
                        <input type="text" class="form-control" name='part_type' value="<?php echo $view['part_type'];?>" readonly="true">
                    </div>
                      <div class="form-group">
                        <label>MAKER</label>
                        <input type="text" class="form-control" name='maker' value="<?php echo $view['maker'];?>" readonly="true">
                    </div>
                      <div class="form-group">
                        <label>STANDARD QUANTITY</label>
                        <input type="text" class="form-control" name='std_stock' value="<?php echo $view['std_stock'];?>" readonly="true">
                      </div>
                      <div class="form-group">
                        <label>STOCK QUANTITY</label>
                        <input type="text" class="form-control" name='qty_stock' value="<?php echo $view['qty_stock'];?>" readonly="true">
                      </div>
                      <div class="form-group">
                        <label>PRICE</label>
                        <input type="text" class="form-control" name='price' value="<?php echo $view['price'];?>" readonly="true">
                      </div>
                  
                      <div class="form-group">
                        <label>DEPT</label>
                        <input type="text" class="form-control" name='dept' value="<?php echo $view['dept'];?>" readonly="true">
                    </div>
                      <div class="form-group">
                        <label>PLANT</label>
                        <input type="text" class="form-control" name='plant' value="<?php echo $view['plant'];?>" readonly="true">
                    </div>
                        <div class="form-group">
                            <label>ADDRESS</label>
                            <input type="text" class="form-control" name='address' value="<?php echo $view['address'];?>" readonly="true">
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- /.card-body -->
            </div>
            <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Taken by</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='pages/Inventory/take_data.php'>
                      <div class="form-group">
                        <input type="text" class="form-control" name='id' value="<?php echo $view['id'];?>" hidden>
                        <input type="text" class="form-control" name='part_name' value="<?php echo $view['part_name'];?>" hidden>
                        <input type="text" class="form-control" name='part_type' value="<?php echo $view['part_type'];?>" hidden>
                        <input type="text" class="form-control" name='maker' value="<?php echo $view['maker'];?>" hidden>
                        <input type="text" class="form-control" name='std_stock' value="<?php echo $view['std_stock'];?>" hidden>
                        <input type="text" class="form-control" name='qty_stock' value="<?php echo $view['qty_stock'];?>" hidden>
                        <input type="text" class="form-control" name='price' value="<?php echo $view['price'];?>" hidden>
                        <input type="text" class="form-control" name='dept_before' value="<?php echo $view['dept'];?>" hidden>
                        <input type="text" class="form-control" name='plant_before' value="<?php echo $view['plant'];?>" hidden>
                        <input type="text" class="form-control" name='address' value="<?php echo $view['address'];?>" hidden>
                        <label>QUANTITY TAKE</label>
                        <input type="text" class="form-control" name='qty_take' placeholder="ENTER QUANTITY TAKE ...">
                      </div>
                      <div class="form-group">
                        <label>DEPT</label>
                        <input type="text" class="form-control" name='dept_after' value=<?php echo $_SESSION['nama'];?> readonly="true">
                      </div>
                      <div class="form-group">
                        <label>PLANT</label>
                        <input type="text" class="form-control" name='plant_after' value=<?php echo $_SESSION['plant'];?> readonly="true">
                      </div>
                      <div class="form-group">
                        <label>REMARK</label>
                        <textarea class="form-control" rows="3" name='remark' placeholder="ENTER REMARK ..."></textarea>
                      </div>
                      <br>
                  <button type="submit" class="btn btn-success float-right">Submit</button>
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