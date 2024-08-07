<?php
$pages = @$_GET['pages'];
global $inv_menu;
global $inv_active;
global $req_active;
global $rec_menu;
global $rec_active;
global $rec_req_active;
global $rec_add_active;
global $add_active;
global $adm_menu;
global $adm_active;
global $adm_user_active;
global $adm_rec_active;


if ($pages=="req"){
  $inv_menu = 'menu-open';
  $inv_active = 'active';
  $req_active = 'active';
}

if ($pages=="adm-update"){
  $inv_menu = 'menu-open';
  $inv_active = 'active';
  $add_active = 'active';
}

if ($pages=="adm-rec-req"){
  $rec_menu = 'menu-open';
  $rec_active = 'active';
  $rec_req_active = 'active';
}

if ($pages=="adm-rec-update"){
  $rec_menu = 'menu-open';
  $rec_active = 'active';
  $rec_add_active = 'active';
}

if ($pages=="adm-user"){
  $adm_menu = 'menu-open';
  $adm_active = 'active';
  $adm_user_active = 'active';
}

if ($pages=="adm-rec-login"){
  $adm_menu = 'menu-open';
  $adm_active = 'active';
  $adm_rec_active = 'active';
}

?>

<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php echo $inv_menu;?>">
            <a href="#" class="nav-link <?php echo $inv_active;?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=req" class="nav-link <?php echo $req_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Request</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=adm-update" class="nav-link <?php echo $add_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Update</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo $rec_menu;?>">
            <a href="#" class="nav-link <?php echo $rec_active;?>">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Record
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=adm-rec-req" class="nav-link <?php echo $rec_req_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Request</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=adm-rec-update" class="nav-link <?php echo $rec_add_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Update</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php echo $adm_menu;?>">
            <a href="#" class="nav-link <?php echo $adm_active;?>">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Admin Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=adm-user" class="nav-link <?php echo $adm_user_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?pages=adm-rec-login" class="nav-link <?php echo $adm_rec_active;?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Record Login</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a onclick="logout()" class="btn nav-link text-left">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
</nav>

<script>
  function logout(){
  Swal.fire({
  title: 'Are you sure?',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Yes, Logout!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location=("../app/logout.php")
  }
})
  }
  /*{
  window.location=("../logout.php")
  }*/
</script>

