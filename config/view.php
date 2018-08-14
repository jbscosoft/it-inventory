<?php

function dashboard(){
  include 'focus.php';
  ?>
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php return_no('System Unit','Working - Assigned');?></h3>
              <p>System Unit(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="http://localhost:9090/it-inventory/pages/dash.php?spec_view=System%20Unit" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php return_no('Monitor','Working - Assigned');?><sup style="font-size: 20px"></sup></h3>

              <p>Monitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php return_no('Printer','Working - Assigned');?></h3>

              <p>Printer(s)</p>
              
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="http://localhost:9090/it-inventory/pages/dash.php?spec_view=Printer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php return_no('Laptop','Working - Assigned');?><sup style="font-size: 20px"></sup></h3>
              <p>Laptop(s) </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="http://localhost:9090/it-inventory/pages/dash.php?spec_view=Laptop" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php return_no('System Unit','faulty');?></h3>

              <p>System Unit(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php return_no('Monitors','faulty');?></h3>

              <p>Monitor(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php return_no('Printer','faulty');?></h3>

              <p>Printer(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php return_no('Laptop','faulty');?></h3>

              <p>Lapto(s)p</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12  connectedSortable">
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

  <?php
}
function assignItem(){
  ?>
  <section class="content-header">
      <h1>
        Assign Item 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Item</a></li>
        <li class="active">Assign Item</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Assign Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">User</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Shop</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>

         
              </div>
              <div class="col-md-6">
                <div class="form-group">
                           
                  <div class="form-group">
                  <label for="exampleInputEmail1"> System Unit</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> Monitor</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> Mouse</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> Keyboard</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> Laptop</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
                <div class="form-group">
                  <label for="exampleInputEmail1">Printer</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Model</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
            <label for="exampleInputPassword1">Other Items</label>
            <select class="form-control">
                <option>Windows 10</option>
                <option>Windows 8</option>
                <option>Windows 7</option>
                <option>Windows XP</option>
                <option>Linux - Ubuntu</option>
                 </select> 
            </div>
                </div>
               
      </div>
      <div>
      </div>
      </div>
            
              </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
</section>
  <?php
}
function addItem(){
  ?>
  <section class="content-header">
      <h1>
        Enter New Item
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Item</a></li>
        <li class="active">Add Item</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">

        <div class="col-md-12">
        <?php
          if (isset($_POST['insertItem'])){  
            include 'focus.php';
            insertItem();     
              }
        ?>
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method ="post">
              <div class="box-body">
              <div class="col-md-6">
            
                  <div class="form-group">
                  <label for="exampleInputEmail1">Select Category</label>
                  <?php
                  $query = "SELECT * FROM  categories ORDER BY cat_name ASC";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="cat" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    ';
                    echo "<option value=''>--Select--</option>";
                  while($row=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row['cat_name']) . '">' 
                              . htmlspecialchars($row['cat_name']) 
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Users</label>
                  <?php
                  $query = "SELECT * FROM  computer_user ORDER BY fname ASC";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="user" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    ';
                    echo "<option value=''>--Select--</option>";
                  while($row=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row['id']) . '">' 
                              . htmlspecialchars(strtoupper($row['fname'])." ".$row['sname']) 
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Location</label>
                  <?php
                  $query = "SELECT * FROM  location";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="location" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    ';
                    echo "<option value='CLEMENT HILL'>CLEMENT HILL</option>";
                  while($row=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row['name']) . '">' 
                              .  $row['name']
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>
              </div>
    
                <div class="form-group">
                  <label for="exampleInputPassword1">Manufacturer</label>
                  <input type="text" class="form-control"  placeholder="" name="Manufacturer">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Model</label>
                  <input type="text" class="form-control"  placeholder="" name="Model">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tag</label>
                  <input type="text" class="form-control"  placeholder="" name="Tag">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Serial No</label>
                  <input type="text" class="form-control" name="SerialNo" placeholder="Enter SerialNo in Uppercase" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Part Number</label>
                  <input type="text" class="form-control"  placeholder="" name="partNumber">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">IP Address</label>
                  <input type="text" class="form-control"  placeholder="" name="IPAddress">
                </div>
          
              </div>
            <div class="col-md-6">
        
            <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select class="form-control" name="status" required>
                <option value="">--Select--</option>
                <option value="Working">Working - Assigned</option>
                <option value="Working">Working - Store</option>
                <option value="Faulty">Faulty</option>
                <option value ="Move to Warehouse">Move to Warehouse</option>
                 </select>                 
                </div>
                            
            <div class="form-group">
                  <label for="exampleInputPassword1">MAC Address</label>
                  <input type="text" class="form-control"  placeholder="" name="MACAddress">
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Hard Disk Capacity</label>
                  <input type="text" class="form-control"  placeholder="" name="HardDiskCapacity">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">RAM Capacity</label>
              <input type="text" class="form-control"  placeholder="" name="RAMCapacity">
            </div>   
            <div class="form-group">
                  <label for="exampleInputPassword1">Processor</label>
                  <input type="text" class="form-control"  placeholder="" name="Processor">
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Supplier</label>
                  <?php
                  $query = "SELECT * FROM  supplier";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="supplier_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    ';
                    echo "<option value=''>--Select--</option>";
                  while($row=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row['id']) . '">' 
                              . htmlspecialchars($row['name']) 
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Operating System</label>
            <select class="form-control" name="os">
                <option value="">--Select--</option>
                <option value="Windows 10">Windows 10</option>
                <option value="Windows 8">Windows 8</option>
                <option value ="Windows 7">Windows 7</option>
                <option value="Windows XP">Windows XP</option>
                <option value="Linux - Ubuntu">Linux - Ubuntu</option>
                 </select> 
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Remarks/Other Features</label>
                  <textarea class="form-control" rows ="4" placeholder="" name="remarks"></textarea>
            </div>
              </div>
              </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"name = "insertItem">Submit</button>
              </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
</section>
  <?php
}
function addUser(){
  ?>
  <section class="content-header">
      <h1>
       System Users
        <small>Add New</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">System User</a></li>
        <li class="active">Add New</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-md-12">
        <?php
          if (isset($_POST['insertUser'])){  
            include 'focus.php';
            add_user();     
              }
        ?>
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Firstname</label>
                  <input type="text" class="form-control" name = "fname">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Surname</label>
                  <input type="text" class="form-control"  placeholder="" name="sname">
                </div>
                <div class="form-group">
                <label>Gender</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender">
                  <option value ="">--Select--</option>
                  <option value ="Male">Male</option>
                  <option value ="Female">Female</option>
                </select>
              </div>
               
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control"  placeholder="Enter email" name="email"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 1</label>
                  <input type="text" class="form-control"  placeholder="" name="phone1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 2</label>
                  <input type="text" class="form-control"  placeholder="" name="phone2">
                </div>
</div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" class="form-control"  placeholder="" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"  placeholder="" name="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Re-type Password</label>
                  <input type="password" class="form-control"  placeholder="" >
                </div>
                <div class="form-group">
                <label>Group</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="role">
                 <option selected="selected" value="">--Select--</option>  
                  <option value="Root">Root</option>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
              </div>
              <div class="form-group">
                <label>Account Status</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="accStatus">
                <option selected="selected" value="">--Select--</option>  
                <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="">Designation</label>
                  <input type="text" class="form-control"  placeholder="" name="designation">
                </div>
        
              </div>
              </div>
            </div>
              <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="insertUser">Submit</button><a href="">Back</a>
        </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function updateProfile($id){
  $query= "SELECT * FROM users  WHERE id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);
  $inst_id = $row['institute_instituteID'];
  ?>
  <section class="content-header">
      <h1>
       User Profile
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Profile</a></li>
        <li class="active">Update</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <?php     
        if (isset($_POST['updateProfile'])){          
              $fname = $_POST['fname'];
              $sname = $_POST['sname'];
              $gender = $_POST['gender'];
              $dob = $_POST['dob'];
              $email = $_POST['email'];
              $phone1 = $_POST['phone1'];
              $phone2 = $_POST['phone2'];
              $designation = $_POST['designation'];
              $date = date('Y/m/d H:i:s');
              include 'real-config.php';
              include 'focus.php';
                  if($mysqli->query("UPDATE `users` SET `gender` = '$gender',`email` = '$email',`dob` = '$dob', `sname` = '$sname', `fname` = '$fname', `designation` = '$designation',`updated_On` = '$date', `phone1` = '$phone1', `phone2` = '$phone2' WHERE `users`.`id` = $id AND `users`.`institute_instituteID` = $inst_id")){
                    msg_success('Congratulations'."  ".$fname." ".strtoupper($sname),'You Have Successfully Updated your User Profile. <a href ="?token=ZGFzaGJvYXJk">Proceed to Dashboard</a>');
                  }else{
                    msg_error('Operation Failed','Update Failed. Please check your network connection and try again or Contact your System Administrator');
                    echo $mysqli->error;
                  } 
                }
            ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b><?php echo ucfirst($row['fname'])." ". strtoupper($row['sname'])?></b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Firstname</label>
                  <input type="text" class="form-control" name = "fname" value="<?php echo $row['fname'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Surname</label>
                  <input type="text" class="form-control"  placeholder="" name="sname" value="<?php echo $row['sname'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="">Designation</label>
                  <input type="text" class="form-control"  name="designation" value="<?php echo $row['designation'] ?>" required>
                </div>
                <div class="form-group">
                <label>Gender</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="gender" value="<?php echo $row['gender'] ?>" required>
                  <option  value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                  <option  value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" class="form-control"  id="datepicker" name="dob" value="<?php echo $row['dob'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control"  placeholder="Enter email" name="email" value="<?php echo $row['email'] ?>" required> 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 1</label>
                  <input type="text" class="form-control"  name = "phone1" value="<?php echo $row['phone1'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 2</label>
                  <input type="text" class="form-control"  name = "phone2" value="<?php echo $row['phone2'] ?>" required>
                </div>
</div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Profile Picture </label>
                  <input type="file" class="form-control"   value="<?php echo $row['photoNAme'] ?>" >
                </div>
              </div>
              </div>
            </div>
        <div class="box-footer">
          <button name = "updateProfile" class="btn btn-primary" >Submit</button>
          <a href="">Back</a>
        </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function pagenotfound(){
  ?>
 <section class="content-header">
      <h1>
        404 Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Institute ID</label>
                  <input type="text" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                <label>Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">University</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Physical Address</label>
                  <input type="text" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">P.O Box</label>
                  <input type="date" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                <label>Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">University</option>
                  <option>Vocational Institute</option>
                  <option>High School</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 1</label>
                  <input type="text" class="form-control"  placeholder="">
                </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Phone No. 2</label>
                  <input type="text" class="form-control"  placeholder="">
                </div>
        
              <div class="form-group">
                  <label for="exampleInputPassword1">Email </label>
                  <input type="email" class="form-control"  placeholder="">
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Upload Logo </label>
                  <input type="file" class="form-control"  placeholder="">
                </div>
              </div>
              </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function items_spec($name){
  ?>
  <section class="content-header">
      <h1>
       <?php echo $name.'s' ?>
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Items</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-xs-12">
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Serial No.</th>
                  <th>Model</th>
                  <th>Status</th>
                  <th>Assigned</th>
                  <th>Location</th>
                  <th style="width:70px;">Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  item WHERE item_name = '".$name."'";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  $i = 1;
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $item_name= $row['item_name'];
                                    $model= $row['model'];
                                    $serial_no= $row['serial_no'];
                                    $status= $row['status'];
                                    $Assigned= $row['Assigned'];
                                    $AddedOn= $row['location'];
                  
                                  echo "<tr>
                                  <td>$i</td>
                                  <td>$item_name</td>
                                  <td>$serial_no</td>
                                  <td>$model</td>
                                  <td>$status</td>
                                  <td>$Assigned</td>
                                  <td>$AddedOn</td>
                       
                                  <td><a href='?view_item=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i></a>
                                  <a href='?serial=" . $row['serial_no'] . "' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i></a>
                                  </td>
                                </tr>
                               ";
                               $i++;
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            <div class="col-md-2">
  <a href="<?php echo '?token='.base64_encode('add_item') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add Item</a>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function items(){
  ?>
  <section class="content-header">
      <h1>
       All Categories
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Items</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-xs-12">
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT DISTINCT item_name FROM item";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $item_name= $row['item_name'];
                                    $model= $row['model'];
                                    $serial_no= $row['serial_no'];
                                    $status= $row['status'];
                                    $Assigned= $row['Assigned'];
                                    $AddedOn= $row['entry_date'];                
                                  echo "<tr>
                                  <td>$item_name</td>
                                  <td><a href='?spec_view=" . $row['item_name'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;&nbsp;|&nbsp;&nbsp;View Details</a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            <div class="col-md-2">
  <a href="<?php echo '?token='.base64_encode('add_item') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add Item</a>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function Users(){
  ?>
  <section class="content-header">
      <h1>
       Users
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Users</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-xs-12">
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Contact</th>
                  <th style="width:70px;">Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  computer_user";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $sname= $row['sname'];
                                    $fname= $row['fname'];
                                    $name = $fname ." ".$sname;
                                    $username= $row['username'];
                                    $dep= $row['dep'];
                                    $ext= $row['ext-phone'];
                                    
                                    $designation= $row['designation'];
                                  echo "<tr>
                                  <td>$id</td>
                                  <td>$name</td>
                                  <td>$dep</td>
                                  <td>$ext</td>
                               
                                  <td><a href='?id=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i></a>
                                  <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i></a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            <div class="col-md-2">
  <a href="<?php echo '?token='.base64_encode('ousers') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add User</a>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function manageUsers($inst_no){
  ?>
  <section class="content-header">
      <h1>
        System Users
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">System Users</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-xs-12">
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Designation</th>
                  <th style="width:127px;">Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  users WHERE institute_instituteID = $inst_no ";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $sname= $row['sname'];
                                    $username= $row['username'];
                                    $designation= $row['designation'];
                                  echo "<tr>
                                  <td></td>
                                  <td>$sname</td>
                                  <td>$username</td>
                                  <td>$designation</td>
                                  <td><a href='?view=" . $row['id'] . "' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;|&nbsp; View</a>
                                  <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i>&nbsp;|&nbsp; Del</a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            <div class="col-md-2">
  <a href="<?php echo '?token='.base64_encode('addUser') ?>"  class="btn  btn-success btn-flat " style='margin-top:3%;'><i class="fa fa-plus"></i>&nbsp;Add User</a>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function first_login_admin(){
  ?>
  <section class="content-header">
      <h1>
        Welcome 
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">First Time Login</a></li>
        <li class="active">Update Details</li>
      </ol>
    </section>
    <section class="content">

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">First Time Login</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
        <i class="fa fa-minus"></i></button>
      
    </div>
  </div>
  <div class="box-body">
  <div class="callout callout-info">
                <h4>Welcome, [Admin]</h4>
                <p>This is your first time to Login. Please Update the <a href="?token=dXBkYXRlSW5zdERldGFpbHM">Institute Details</a> and your Profile</p>
              </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    &copy; Scosoft Systems Inc
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
</section>
  <?php
}
function first_login_user(){

  ?>
  <section class="content-header">
      <h1>
        Welcome 
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">First Time Login</a></li>
        <li class="active">Update Details</li>
      </ol>
    </section>
    <section class="content">

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">First Time Login</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
        <i class="fa fa-minus"></i></button>
      
    </div>
  </div>
  <div class="box-body">
  <div class="callout callout-info">
                <h4>Dear John</h4>
                <p>This is your first time to Login. Please Update your <a href="?token=dXBkYXRlUHJvZmlsZQ==">User Profile</a> </p>
              </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    &copy; Scosoft Systems Inc
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
</section>
  <?php
}
function updateItem($id){
  $query= "SELECT * FROM item  WHERE id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  if(!$query_run){
    echo "no".mysqli_error($mysqli);
  }
  $row = mysqli_fetch_array($query_run);
  echo $row['fname'];
  ?>
  <section class="content-header">
      <h1>
        Update Item Details
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Item</a></li>
        <li class="active">Update</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <?php
            if (isset($_POST['updateItem'])){
              $cat = $_POST['cat'];
              $Manufacturer = $_POST['Manufacturer'];
              $Model = $_POST['Model'];
              $Tag = $_POST['Tag'];
              $SerialNo = $_POST['SerialNo'];
              $partNumber = $_POST['partNumber'];
              $status = $_POST['status'];
              $IPAddress = $_POST['IPAddress'];
              $MACAddress = $_POST['MACAddress'];
              $RAMCapacity = $_POST['RAMCapacity'];
              $HardDiskCapacity = $_POST['HardDiskCapacity'];
              $Processor = $_POST['Processor'];
              $Supplier = $_POST['Supplier'];
              $os = $_POST['os'];
              $remarks = $_POST['remarks'];
              $updatedOn = date('Y/m/d H:i:s');
              $addedBy = getfield('fname',$mysqli);
              include 'real-config.php';
              include 'focus.php';
              $query_item= "UPDATE `item` SET `manufacturer` = 'kk', `model` = '".$Model."', `tag` = '".$Tag."', `serial_no` = '".$serial_no."', `part_number` = '".$partNumber."', `mac_address` = '".$MACAddress."', `ram` = '".$RAMCapacity."', `hd` = '".$HardDiskCapacity."', `processor` = '".$Processor."', `os` = '".$os."', `ipaddress` = '".$IPAddress."', `supplier` = '".$Supplier."', `status` = '".$status."', `Assigned` = 'Yes', `addedBy` = '".$addedBy."', `remarks` = '".$remarks."', `updated_on` = '".$updatedOn."' WHERE `item`.`id` = '".$id."'";
              $query_run_item= mysqli_query($mysqli, $query_item);
              if($query_run_item){
                msg_success('Operatioln Successful','Item Updated');
              }else{
                msg_error('Operation Failed','Update Failed. Please check your network connection and try again');
                echo $mysqli->error;
              } 
            }
          ?>
      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method ="post">
              <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Select Category</label>
                <select name="cat" class="form-control"  required="required" >
                <option value="<?php echo $row['item_name'] ?>"><?php echo $row['item_name'] ?></option>
                  <option value="System Unit">System Unit</option>
                  <option value="Monitor">Monitor</option>
                  <option value="Mouse">Mouse</option>
                  <option value="Laptop">Laptop</option>
                  <option value="Keyboard">Keyboard</option>
                </select>
              </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Users</label>
                  <?php
                  $query = "SELECT * FROM  computer_user ORDER BY fname ASC";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="user" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                    ';
                    echo "<option value=''>--Select--</option>";
                  while($row_user=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row_user['id']) . '">' 
                              . htmlspecialchars(strtoupper($row_user['fname'])." ".$row_user['sname']) 
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Manufacturer</label>
                  <input type="text" class="form-control"  placeholder="" name="Manufacturer" value="<?php echo $row['manufacturer'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Model</label>
                  <input type="text" class="form-control"  placeholder="" name="Model" value="<?php echo $row['model'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tag</label>
                  <input type="text" class="form-control"  placeholder="" name="Tag" value="<?php echo $row['tag'] ?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Serial No</label>
                  <input type="text" class="form-control" name="SerialNo" value="<?php echo $row['serial_no'] ?>" required >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Part Number</label>
                  <input type="text" class="form-control"  placeholder="" name="partNumber" value="<?php echo $row['part_number'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select class="form-control" name="status" required>
                <option value="">--Select--</option>
                <option value="Working">Working - Assigned</option>
                <option value="Working">Working - Store</option>
                <option value="Faulty">Faulty - Store</option>
                <option value ="Move to Warehouse">Move to Warehouse</option>
                 </select>                 </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">IP Address</label>
                  <input type="text" class="form-control"  placeholder="" name="IPAddress" value="<?php echo $row['ipaddress'] ?>">
                </div>
              </div>
            <div class="col-md-6">
            
            <div class="form-group">
              <label for="exampleInputPassword1">RAM Capacity</label>
              <input type="text" class="form-control"  placeholder="" name="RAMCapacity" value="<?php echo $row['ram'] ?>">
            </div>                
            <div class="form-group">
                  <label for="exampleInputPassword1">MAC Address</label>
                  <input type="text" class="form-control"  placeholder="" name="MACAddress" value="<?php echo $row['mac_address'] ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Hard Disk Capacity</label>
                  <input type="text" class="form-control"  placeholder="" name="HardDiskCapacity" value="<?php echo $row['hd'] ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Processor</label>
                  <input type="text" class="form-control"  placeholder="" name="Processor" value="<?php echo $row['processor'] ?>">
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Supplier</label>
                  <input type="text" class="form-control"  placeholder="Supplier" value="<?php echo $row['supplier'] ?>">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Operating System</label>
            <select class="form-control" name="os"  value="<?php echo $row['os'] ?>">
                <option value="<?php echo $row['os'] ?>"><?php echo $row['os'] ?></option>
                <option value="Windows 10">Windows 10</option>
                <option value="Windows 8">Windows 8</option>
                <option value ="Windows 7">Windows 7</option>
                <option value="Windows XP">Windows XP</option>
                <option value="Linux - Ubuntu">Linux - Ubuntu</option>
                 </select> 
            </div>
            <div class="form-group">
                  <label for="exampleInputPassword1">Remarks/Other Features</label>
                  <textarea class="form-control" rows ="4" placeholder="" name="remarks" value="<?php echo $row['remarks'] ?>"></textarea>
            </div>
              </div>
              </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success" name = "updateItem">Update</button>

              </div>
            </form>
          </div>
  
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
  <?php
}

function view_user($id){
  $query= "SELECT * FROM users  WHERE id = $id";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  ?>
 <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
        <!-- Main content -->
        <section class="content">
<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="../dist/img/user-avatar.png" alt="User profile picture">

        <h3 class="profile-username text-center"><?php echo $row['fname']."  ".$row['sname'] ?></h3>

        <p class="text-muted text-center"><?php echo $row['designation'] ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Account Status</b> <a class="pull-right"> <span class="label label-success"><?php echo $row['accStatus'] ?></span></a>
          </li>
          <li class="list-group-item">
            <b>Last Login</b> <a class="pull-right"> <span class="label label-info">12/May/2018</span></a>
          </li>
        </ul>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
  
    <!-- /.box -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">User Details</a></li>
        <li><a href="#timeline" data-toggle="tab">Credentials</a></li>
        <li><a href="#settings" data-toggle="tab">Privileges</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
        <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Firstname</label>

              <div class="col-sm-10">
                <input type="text" class="form-control fname"  value="<?php echo $row['fname'] ?>" disabled="" name ="fname">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Surname</label>

              <div class="col-sm-10">
                <input type="text" class="form-control sname"  value="<?php echo $row['sname'] ?>" disabled="" name="sname">
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Date of Birth</label>

              <div class="col-sm-10">
                <input type="date" class="form-control dob"  value="<?php echo $row['dob'] ?>"  name="dob">
              </div>
            </div>
            <div class="form-group">
              <label for="inputExperience" class="col-sm-2 control-label">Gender</label>
              <div class="col-sm-10">
              <input type="text" class="form-control gender"  value="<?php echo $row['gender'] ?>"  name="gender">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-2 control-label">Designation</label>
              <div class="col-sm-10">
                <input type="text" class="form-control designation"  value="<?php echo $row['designation'] ?>"  name="designation">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="text" class="form-control email"  value="<?php echo $row['email'] ?>"  name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-2 control-label">Phone No. 1</label>

              <div class="col-sm-10">
                <input type="text" class="form-control phone1"  value="<?php echo $row['phone1'] ?>"  name="phone1">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSkills" class="col-sm-2 control-label">Phone No. 2</label>

              <div class="col-sm-10">
                <input type="text" class="form-control phone2"  value="<?php echo $row['phone2'] ?>"  name="phone2">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="updatedetails">Update User Details <a href="#"></a>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary changeCredentials"><i class=""></i>Change Credentials</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="timeline">
          <form class="form-horizontal">
            <div class="form-group"> 
              <label for="inputName" class="col-sm-2 control-label">Username</label>

              <div class="col-sm-10">
                <input type="text" class="form-control username" id="inputName" value="<?php echo $row['username'] ?>"  name="username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label" >Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control password" id="inputEmail" value="<?php echo $row['dwp'] ?>" disabled="" name="dwp">
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label" >Re-type Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputName" value="<?php echo $row['pwd'] ?>" disabled="" name="dwp">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            
          </form>
        </div>
        <!-- /.tab-pane -->

        <div class="tab-pane" id="settings">
         
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
  <?php
}


function all_students(){

  function one($class) {
    include 'users_report.php';
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">::Students Biodata / <?php echo $class ?></h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" ">
                <div class="panel-heading" style="background-color:#f5f5f5;"">

                    <a href ="?token=enter" data-toggle="tooltip" title="Add Record"><i class="fa fa-plus-square fa-1x" style="margin-left:70%;color:#333;">&nbsp&nbspAdd New Student</i></a>&nbsp&nbsp
                    <a href ="users_report.php?generatereport=ROS&class='".$class."'" data-toggle="tooltip" title="Click View Report"><i class="fa fa-print fa-1x" style="color:#333;">&nbsp&nbspPrint Classlist</i></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Admission No</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Nationality</th>
                                    <th>Type</th>
                                    <th style="width:140px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM  biodata WHERE class = '" . $class . "'";
                                include "../php/core.inc.php";
                                $query_run = mysqli_query($con, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($con);
                                } else {
                                    while ($row = mysqli_fetch_array($query_run)) {
                                        $admission_no = $row['admission_no'];
                                        $fname = $row['fname']
                                        ;
                                        $sname = $row['sname'];
                                        $name = ucfirst($row['fname']) . " " . ucfirst($row['sname']);
                                        $date_of_birth = $row['dob'];
                                        $residence = $row['residence'];
                                        $section = $row['section'];
                                        $date_joined = $row['date_joined'];
                                        $house = $row['house'];
                                        $cls = $row ['class'];
                                        $student_type = $row['student_type'];
                                        //   $nationality = $row['nationality'];
                                        $gender = $row['gender'];

                                        echo "<tr class='odd gradeX' id =''>";
                                        echo "<td>$admission_no</td> ";
                                        echo "<td>$name</a> </td> ";
                                        echo "<td>$gender</td>";
                                        echo "<td> $student_type</td>";
                                        echo "<td> $nationality</td>";
                                        echo '<td style="width:181px;">
                            <center>
                            <a href="?view=' . $row['student_no'] . '" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;|&nbsp; View</a>
                            <a href="?id=' . $row['student_no'] . '&studentclass=' . $cls . '" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete Record!"><i class="glyphicon glyphicon-trash"></i>&nbsp;|&nbsp; Del</a>
                            </center>
                            </td>';
                                        echo "</tr>  ";
                                        echo '
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content" style="background-color:;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">::Mutebi Ronald</h4>
        </div>
        <div class="modal-body">
       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                                           ';
                                    }
                                }
                                ?>

                            </tbody>
                            <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->


            </div>
            <?php
        }




}
function view_all_item($name){
  ?>
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo $name?>
      </h4>
      </div>
    </div>
  <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $row['item_name']?></a></li>
        <li class="active"><?php echo $row['serial_no']?></li>
      </ol>
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo $row['model']?>
            <small class="pull-right">Entered On: <?php echo $row['entry_date']?> <br>Last Updated On: <?php echo $row['updated_on']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Serial No.</th>
                  <th>Model</th>
                  <th>Status</th>
                  <th>Assigned</th>
                  <th>Added On</th>
                  
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  item WHERE item_name = '".$name."'";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $item_name= $row['item_name'];
                                    $model= $row['model'];
                                    $serial_no= $row['serial_no'];
                                    $status= $row['status'];
                                    $Assigned= $row['Assigned'];
                                    $AddedOn= $row['entry_date'];
                  
                                  echo "<tr>
                                  <td>$id</td>
                                  <td>$item_name</td>
                                  <td>$serial_no</td>
                                  <td>$model</td>
                                  <td>$status</td>
                                  <td>$Assigned</td>
                                  <td>$AddedOn</td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
          
      </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button onclick="window.print();" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
        </div>
      </div>
    </section>
  <?php
}
function viewUserInfoPrint($id){
  $query= "SELECT * FROM item  WHERE computer_user_id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM computer_user   WHERE id = '" . $row['computer_user_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_user = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM supplier   WHERE id = '" . $row['supplier_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_supplier = mysqli_fetch_array($query_run);
  
  $query= "SELECT * FROM department   WHERE id = '" . $row['dep'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_dep = mysqli_fetch_array($query_run);
  ?>
    <body onload="window.print();">
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo strtoupper($row_user ['fname'])." ".strtoupper($row_user['sname'])." - ".strtoupper($row_user['dep'])?>
        
      </h4>
      </div>
    </div>
  <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $row['item_name']?></a></li>
        <li class="active"><?php echo $row['serial_no']?></li>
      </ol>
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-user"></i> <?php echo strtoupper($row_user ['fname'])." ".strtoupper($row_user['sname'])?>
            <small class="pull-right">Department: <?php echo strtoupper($row_user['dep'])?> <br>Extension: <?php echo $row_user['ext-phone']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-xs-12 invoice-col">

        <h4><b>System Unit</b></h4>
        <table  class="table table-striped" style="border:1px solid">
           
                <thead>
                <th>id</th>
                <th>Model</th>
                <th>Tag</th>
                <th>Serial No</th>
                <th>MAC Address</th>
                <th>RAM</th>
                <th>HD</th>
                <th>Processor</th>
                <th>OS</th>
                <th>Supplier</th>
                <th>Status</th>
                </thead>
              <tbody>
              <?php
                                $query = "SELECT * FROM item WHERE item_name = 'System Unit' AND computer_user_id = '".$id."'";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  $i = 1;
                                  while ($row = mysqli_fetch_array($query_run)) {
                           
                                    $model= $row['model'];
                                    $tag= $row['tag'];
                                    $serial_no= $row['serial_no'];
                                    $part_number= $row['part_number'];
                                    $mac_address= $row['mac_address'];
                                    $ram= $row['ram'];
                                    $hd= $row['hd'];
                                    $processor= $row['processor'];
                                    $os= $row['os'];
                                    $supplier= $row['supplier'];
                                    $status= $row['status'];
                                  echo "<tr>
                                  <td>$i</td>
                                  <td>$model</td>
                                  <td>$tag</td>
                                  <td>$serial_no</td>
                                 
                                  <td>$mac</td>
                                  <td>$ram</td>
                                  <td>$hd</td>
                                  <td>$processor</td>
                                  <td>$os</td>
                                  <td>$supplier</td>
                                  <td><button type='button' class='btn btn-block btn-success btn-xs'>$status</button></td>
                                  </td>
                                </tr>
                               ";
                               $i++;
                                  }
                                }
                               ?>
              </tbody>
            </table>
         
        </div>
  </div>
  <div class="row invoice-info">
        <div class="col-xs-12 invoice-col">
            <h4><b>Monitor</b></h4>
            <table  class="table table-striped" style="border:1px solid">
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Tag</th>
           <th>Serial No</th>
           <th>Supplier</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Monitor' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row_no = mysqli_fetch_array($query_run)) {
                      
                               $model= $row_no['model'];
                               $tag= $row_no['tag'];
                               $serial_no= $row_no['serial_no'];
                               $supplier= $row_no['supplier'];
                               $status= $row_no['status'];
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                             <td>$serial_no</td>
               
                             <td>$supplier</td>
                             <td><button type='button' class='btn btn-block btn-success btn-xs'>$status</button></td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
      </div>
        </div>
        <div class="row invoice-info">
        <div class="col-xs-12 invoice-col">
          <h4><b>Laptop</b></h4>
          <table  class="table table-striped" style="border:1px solid" >
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Tag</th>
           <th>Serial No</th>
           
           <th>MAC Address</th>
           <th>RAM</th>
           <th>HD</th>
           <th>Processor</th>
           <th>OS</th>
           <th>Supplier</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Laptop' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                            
                               $model= $row['model'];
                               $tag= $row['tag'];
                               $serial_no= $row['serial_no'];
                               $part_number= $row['part_number'];
                               $mac_address= $row['mac_address'];
                               $ram= $row['ram'];
                               $hd= $row['hd'];
                               $processor= $row['processor'];
                               $os= $row['os'];
                               $supplier= $row['supplier'];
                               $status= $row['status'];
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                             <td>$serial_no</td>
                            
                             <td>$mac</td>
                             <td>$ram</td>
                             <td>$hd</td>
                             <td>$processor</td>
                             <td>$os</td>
                             <td>$supplier</td>
                             <td><button type='button' class='btn btn-block btn-success btn-xs'>$status</button></td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
  </div>
      </div>
      <div class="row invoice-info">
      <div class="col-xs-12 invoice-col">
          <h4><b>IP Phone</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           <th>MAC Address</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'IP Phone' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                     
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td><button type='button' class='btn btn-block btn-success btn-xs'>$status</button></td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
       </div>
       </div>
      <div class="row invoice-info">
      <div class="col-xs-12 invoice-col">
          <h4><b>Keyboard</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Keyboard' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                     
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td><button type='button' class='btn btn-block btn-success btn-xs'>$status</button></td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
       </div>
       </div>
       <div class="row invoice-info">
       <div class="col-xs-12 invoice-col">
          <h4><b>Mouse</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Mouse' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                           
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td>$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
  
      </div>
      </div>


      </div>
    </section>
  <?php
}
function viewUserInfo($id){
  $query= "SELECT * FROM item  WHERE computer_user_id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM computer_user   WHERE id = '" . $row['computer_user_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_user = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM supplier   WHERE id = '" . $row['supplier_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_supplier = mysqli_fetch_array($query_run);
  
  $query= "SELECT * FROM department   WHERE id = '" . $row['dep'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_dep = mysqli_fetch_array($query_run);
  ?>
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo strtoupper($row_user ['fname'])." ".strtoupper($row_user['sname'])." - ".strtoupper($row_user['dep'])?>
        
      </h4>
      </div>
    </div>
  <section class="content-header">
      
    
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-user"></i> <?php echo strtoupper($row_user ['fname'])." ".strtoupper($row_user['sname'])?>
            <small class="pull-right">Department: <?php echo strtoupper($row_user['dep'])?> <br>Extension: <?php echo $row_user['ext-phone']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
        <h4><b>System Unit</b></h4>
        <table  class="table table-striped">
           
                <thead>
                <th>id</th>
                <th>Model</th>
                <th>Tag</th>
                <th>Serial No</th>
                
                <th>MAC Address</th>
                <th>RAM</th>
                <th>HD</th>
                <th>Processor</th>
                <th>OS</th>
                <th>Supplier</th>
                <th>Status</th>
                </thead>
              <tbody>
              <?php
                                $query = "SELECT * FROM item WHERE item_name = 'System Unit' AND computer_user_id = '".$id."'";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  $i = 1;
                                  while ($row = mysqli_fetch_array($query_run)) {
                              
                                    $model= $row['model'];
                                    $tag= $row['tag'];
                                    $serial_no= $row['serial_no'];
                                    $part_number= $row['part_number'];
                                    $mac_address= $row['mac_address'];
                                    $ram= $row['ram'];
                                    $hd= $row['hd'];
                                    $processor= $row['processor'];
                                    $os= $row['os'];
                                    $supplier= $row['supplier'];
                                    $status= $row['status'];
                                  echo "<tr>
                                  <td>$i</td>
                                  <td>$model</td>
                                  <td>$tag</td>
                                  <td>$serial_no</td>
                                 
                                  <td>$mac</td>
                                  <td>$ram</td>
                                  <td>$hd</td>
                                  <td>$processor</td>
                                  <td>$os</td>
                                  <td>$supplier</td>
                                  <td>$status</td>
                                  </td>
                                </tr>
                               ";
                               $i++;
                                  }
                                }
                               ?>
              </tbody>
            </table>
         
        </div>
        <div class="col-sm-12 invoice-col">
            <h4><b>Monitor</b></h4>
            <table  class="table table-striped" style="border:1px solid">
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Tag</th>
           <th>Serial No</th>
           <th>Supplier</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Monitor' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row_no = mysqli_fetch_array($query_run)) {
                    
                               $model= $row_no['model'];
                               $tag= $row_no['tag'];
                               $serial_no= $row_no['serial_no'];
                               $supplier= $row_no['supplier'];
                               $status= $row_no['status'];
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                             <td>$serial_no</td>
                           
                             <td>$supplier</td>
                             <td>$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
      
        </div>
        <div class="col-sm-12 invoice-col">
          <h4><b>Laptop</b></h4>
          <table  class="table table-striped" style="border:1px solid" >
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Tag</th>
           <th>Serial No</th>
           
           <th>MAC Address</th>
           <th>RAM</th>
           <th>HD</th>
           <th>Processor</th>
           <th>OS</th>
           <th>Supplier</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Laptop' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                      
                               $model= $row['model'];
                               $tag= $row['tag'];
                               $serial_no= $row['serial_no'];
                               $part_number= $row['part_number'];
                               $mac_address= $row['mac_address'];
                               $ram= $row['ram'];
                               $hd= $row['hd'];
                               $processor= $row['processor'];
                               $os= $row['os'];
                               $supplier= $row['supplier'];
                               $status= $row['status'];
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                             <td>$serial_no</td>
                            
                             <td>$mac</td>
                             <td>$ram</td>
                             <td>$hd</td>
                             <td>$processor</td>
                             <td>$os</td>
                             <td>$supplier</td>
                             <td>$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
  
      </div>

      <div class="col-xs-12 invoice-col">
          <h4><b>IP Phone</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           <th>MAC Address</th>
           <th>Status</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'IP Phone' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                     
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td>$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
       </div>

      <div class="col-sm-12 invoice-col">
          <h4><b>Keyboard</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Keyboard' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                          
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td><$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
       </div>
       <hr >
       <div class="col-sm-12 invoice-col">
          <h4><b>Mouse</b></h4>
          <table  class="table table-striped" style="border:1px solid">
           
           <thead>
           <th>id</th>
           <th>Model</th>
           <th>Serial No</th>
           </thead>
         <tbody>
         <?php
                           $query = "SELECT * FROM item WHERE item_name = 'Mouse' AND computer_user_id = '".$id."'";
                           include 'real-config.php';
                           
                           $query_run = mysqli_query($mysqli, $query);
                           if (!$query_run) {
                               echo "Query_Run_Error" . mysqli_error($mysqli);
                           } else {
                             $i = 1;
                             while ($row = mysqli_fetch_array($query_run)) {
                          
                               $model= $row['model'];
                               $tag= $row['tag'];
                         
                             echo "<tr>
                             <td>$i</td>
                             <td>$model</td>
                             <td>$tag</td>
                            
                             <td>$status</td>
                             </td>
                           </tr>
                          ";
                          $i++;
                             }
                           }
                          ?>
         </tbody>
       </table>
  
      </div>
      </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="?printuseritem=<?php echo $id ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
          <a href="?updateItem=<?php echo $id ?>"  class="btn btn-success"><i class="fa fa-edit"></i> Update</a>

        </div>

      </div>
    </section>
  <?php
}
function viewThisItem($id){
  $query= "SELECT * FROM item  WHERE id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM computer_user   WHERE id = '" . $row['computer_user_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_user = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM supplier   WHERE id = '" . $row['supplier_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_supplier = mysqli_fetch_array($query_run);
  
  $query= "SELECT * FROM department   WHERE id = '" . $row['dep'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_dep = mysqli_fetch_array($query_run);
  ?>
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo $row['item_name']."/".$row['serial_no']?>
        
      </h4>
      </div>
    </div>
  <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $row['item_name']?></a></li>
        <li class="active"><?php echo $row['serial_no']?></li>
      </ol>
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo $row['model']?>
            <small class="pull-right">Entered On: <?php echo $row['entry_date']?> <br>Last Updated On: <?php echo $row['updated_on']?><br>Entered By: <?php echo $row['addedBy']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <h4><b>User Information</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>User:</td>
                  <td><b><?php echo strtoupper($row_user['sname'])." ".ucfirst($row_user['fname']) ?></b></td>
                </tr>
                <tr>
                  <td>Department:</td>
                  <td><b><?php echo $row_dep['dep'] ?></b></td>
                </tr>
                <tr>
                  <td>Contact:</td>
                  <td><b><?php echo $row_user['ext-phone'] ?></b></td>
                </tr>
                <tr>
                  <td>Location:</td>
                  <td><b><?php echo strtoupper($row['location']) ?></b></td>
                </tr>
              </tbody>
            </table>
         
         <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Status:</td>
                  <td><b><?php echo strtoupper($row['status']) ?></b></td>
                </tr>
           
              </tbody>
            </table>
        </div>
        <div class="col-sm-4 invoice-col">
            <h4><b>Supplier Details</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Company</td>
                  <td><b><?php echo $row_supplier['name'] ?></b></td>
                </tr>
                <tr>
                  <td>Phone No:</td>
                  <td><b><?php echo $row_supplier['contact'] ?></b></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><b><?php echo $row_supplier['email'] ?></b></td>
                </tr>
              </tbody>
            </table>
      
        </div>
        <div class="col-sm-4 invoice-col">
          <h4><b>Item Information</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Manufacturer:</td>
                  <td><b><?php echo $row['manufacturer']?></b></td>
                </tr>
                <tr>
                  <td>Model:</td>
                  <td><b><?php echo $row['model']?></b></td>
                </tr>
                <tr>
                  <td>Tag:</td>
                  <td><b><?php echo $row['tag']?></b></td>
                </tr>
                <tr>
                  <td>Serial No.</td>
                  <td><b><?php echo $row['serial_no']?></b></td>
                </tr>
                <tr>
                  <td>Part Number:</td>
                  <td><b><?php echo $row['part_number']?></b></td>
                </tr>
                <tr>
                  <td>MAC Address:</td>
                  <td><b><?php echo $row['mac_address']?></b></td>
                </tr>
                <tr>
                  <td>RAM Capacity:</td>
                  <td><b><?php echo $row['ram']?></b></td>
                </tr>
                <tr>
                  <td>HD Capacity:</td>
                  <td><b><?php echo $row['hd']?></b></td>
                </tr>
                <tr>
                  <td>Processor:</td>
                  <td><b><?php echo $row['processor']?></b></td>
                </tr>
                <tr>
                  <td>Operating System:</td>
                  <td><b><?php echo $row['os']?></b></td>
                </tr>
                <tr>
                  <td>IP Address:</td>
                  <td><b><?php echo $row['ipaddress']?></b></td>
                </tr>
                <tr>
                  <td>Remarks:</td>
                  <td><b><?php echo $row['remarks']?></b></td>
                </tr>
              </tbody>
            </table>
          
      </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="?print=<?php echo $id ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
          <a href="?updateItem=<?php echo $id ?>"  class="btn btn-success"><i class="fa fa-edit"></i> Update</a>

        </div>

      </div>
    </section>
  <?php
}

function printThisItem($id){
  $query= "SELECT * FROM item  WHERE id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM computer_user   WHERE id = '" . $row['computer_user_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_user = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM supplier   WHERE id = '" . $row['supplier_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_supplier = mysqli_fetch_array($query_run);
  
  
  ?>
  <body onload="window.print();">
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo $row['item_name']."/".$row['serial_no']?>
        
      </h4>
      </div>
    </div>
  <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $row['item_name']?></a></li>
        <li class="active"><?php echo $row['serial_no']?></li>
      </ol>
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo $row['model']?>
            <small class="pull-right">Entered On: <?php echo $row['entry_date']?> <br>Last Updated On: <?php echo $row['updated_on']?><br>Entered By: <?php echo $row['addedBy']?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <h4><b>User Information</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>User:</td>
                  <td><b><?php echo strtoupper($row_user['sname'])." ".ucfirst($row_user['fname']) ?></b></td>
                </tr>
                <tr>
                  <td>Department:</td>
                  <td><b><?php echo $row_user['dep'] ?></b></td>
                </tr>
                <tr>
                  <td>Contact:</td>
                  <td><b><?php echo $row_user['ext-phone'] ?></b></td>
                </tr>
                <tr>
                  <td>Location:</td>
                  <td><b><?php echo $row['location'] ?></b></td>
                </tr>
              </tbody>
            </table>
         
         <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Status:</td>
                  <td><b><?php echo strtoupper($row['status']) ?></b></td>
                </tr>
           
              </tbody>
            </table>
        </div>
        <div class="col-sm-4 invoice-col">
            <h4><b>Supplier Details</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Company</td>
                  <td><b><?php echo $row_supplier['name'] ?></b></td>
                </tr>
                <tr>
                  <td>Phone No:</td>
                  <td><b><?php echo $row_supplier['contact'] ?></b></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><b><?php echo $row_supplier['email'] ?></b></td>
                </tr>
              </tbody>
            </table>
      
        </div>
        <div class="col-sm-4 invoice-col">
          <h4><b>Item Information</b></h4>
        <table class="table table-striped">
                <tbody>
                <tr>
                  <td>Manufacturer:</td>
                  <td><b><?php echo $row['manufacturer']?></b></td>
                </tr>
                <tr>
                  <td>Model:</td>
                  <td><b><?php echo $row['model']?></b></td>
                </tr>
                <tr>
                  <td>Tag:</td>
                  <td><b><?php echo $row['tag']?></b></td>
                </tr>
                <tr>
                  <td>Serial No.>
                  <td><b><?php echo $row['serial_no']?></b></td>
                </tr>
                <tr>
                  <td>Part Number:</td>
                  <td><b><?php echo $row['part_number']?></b></td>
                </tr>
                <tr>
                  <td>MAC Address:</td>
                  <td><b><?php echo $row['mac_address']?></b></td>
                </tr>
                <tr>
                  <td>RAM Capacity:</td>
                  <td><b><?php echo $row['ram']?></b></td>
                </tr>
                <tr>
                  <td>HD Capacity:</td>
                  <td><b><?php echo $row['hd']?></b></td>
                </tr>
                <tr>
                  <td>Processor:</td>
                  <td><b><?php echo $row['processor']?></b></td>
                </tr>
                <tr>
                  <td>Operating System:</td>
                  <td><b><?php echo $row['os']?></b></td>
                </tr>
                <tr>
                  <td>IP Address:</td>
                  <td><b><?php echo $row['ipaddress']?></b></td>
                </tr>
                <tr>
                  <td>Remarks:</td>
                  <td><b><?php echo $row['remarks']?></b></td>
                </tr>
              </tbody>
            </table>
          
      </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">

        </div>
      </div>
    </section>
  <?php
}
function categories(){
  ?>
  <section class="content-header">
      <h1>
       Manage  Categories
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Items</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-md-12">
      
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      <?php
 if (isset($_POST['add_cat'])){  
   include "focus.php";
   add_cat();     
    }

?>
      <form method = "post">
      <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Enter Category Name" name="name">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-flat" name ="add_cat">Add</button>
                    </span>
              </div>
      </form>
      <br><br>
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM categories";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $item_name= $row['cat_name'];
                                  echo "<tr>
                                  <td>$item_name</td>
                                  <td><a href='?spec_view=" . $row['item_name'] . "' class='btn btn-danger btn-sm'><i class='glyphicon glyphicon-trash'></i>&nbsp;&nbsp;|&nbsp;&nbsp;Remove</a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            </div>
     
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="col-md-4">
      
          </div>
        </div>

      
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function departments(){
  ?>
  <section class="content-header">
      <h1>
       Departments
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Items</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-md-12">
      
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
      <?php
 if (isset($_POST['add_dep'])){  
   include "focus.php";
   add_dep();     
    }

?>
      <form method = "post">
      <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Enter Department/Team/Unit" name="name">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-flat" name="add_dep">Add</button>
                    </span>
              </div>
      </form>
      <br><br>
          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT  name FROM department";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $name= $row['name'];           
                                  echo "<tr>
                                  <td>$name</td>
                                  <td><a href='?spec_view=" . $row['item_name'] . "' class='btn btn-danger btn-sm'><i class='glyphicon glyphicon-trash'></i>&nbsp;&nbsp;|&nbsp;&nbsp;Remove</a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            </div>
     
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="col-md-3">
      
          </div>
        </div>

      
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function ousers(){
  ?>
  <section class="content-header">
      <h1>
       Manage  Users
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Items</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-md-12">
<?php
 if (isset($_POST['insertoUser'])){  
   include "focus.php";
  add_computer_user();     
    }

?>
      <div class="col-md-8">

          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Name</th>
                  <th>Department</th>
                  <th>Contact</th>
                  <th style="width:127px;">Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  computer_user";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $contact= $row['ext-phone'];
                                    $name= $row['fname']." ".$row['sname'];
                                    $dep= $row['dep'];
                                    
                                  echo "<tr>
                                  
                                  <td>$name</td>
                                  <td>$dep</td>
                                  <td>$contact</td>
                                  <td>
                                  <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i></a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            </div>
     
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Firstname</label>
                  <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Surname</label>
                  <input type="text" name="sname" class="form-control" id="exampleInputEmail1" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Department</label>
                  <?php
                  $query = "SELECT * FROM  department";
                  include 'real-config.php';
                  $query_run = mysqli_query($mysqli, $query);
                  if (!$query_run) {
                      echo "Query_Run_Error" . mysqli_error($mysqli);
                  } else {
                    echo '<select name="dep" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required="true">
                    ';
                    echo '<option value ="">--Select--</option>';
                  while($row=mysqli_fetch_array($query_run))
                      {
                          echo '<option value="' . htmlspecialchars($row['name']) . '">' 
                              . htmlspecialchars($row['name']) 
                              . '</option>';
                      }
                    }
                    echo '</select>'
                      ?>   
                            </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Role/Designation</label>
                  <input type="text" class="form-control" name="contact" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Contact</label>
                  <input type="text" class="form-control" name="contact" >
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="insertoUser">Submit</button>
              </div>
            </form>
          </div>
          </div>
        </div>

      
      </div>

      <!-- /.row -->
    </section>
  <?php
}

function suppliers(){
  ?>
  <section class="content-header">
      <h1>
       Suppliers
        <small>Manage</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Suppliers</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>
   
  <section class="content">
  
      <div class="row">
      <div class="col-md-12">
<?php
 if (isset($_POST['add'])){  
   include "focus.php";
   add_supplier();     
    }

?>
      <div class="col-md-8">

          <div class="box box-primary">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th style="width:127px;">Action</th>
                </tr>
                </thead>
                <tbody>
                           <?php
                                $query = "SELECT * FROM  supplier";
                                include 'real-config.php';
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  while ($row = mysqli_fetch_array($query_run)) {
                                    $id = $row['id'];
                                    $contact= $row['contact'];
                                    $email= $row['email'];
                                    $name= $row['name'];
                                    
                                  echo "<tr>
                                  <td>$name</td>
                                  <td>$contact</td>
                                  <td>$email</td>
                                  <td>
                                  <a href='' class='btn btn-danger btn-sm' data-toggle='tooltip' title='Delete Record!'><i class='glyphicon glyphicon-trash'></i></a>
                                  </td>
                                </tr>
                               ";
                                  }
                                }
                               ?>
                
                </tfoot>
              </table>
            </div>
            </div>
     
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone No.</label>
                  <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="" name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="" name="email">
                </div>
              
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add">Submit</button>
              </div>
            </form>
          </div>
          </div>
        </div>

      
      </div>

      <!-- /.row -->
    </section>
  <?php
}
function itemsSummaryReport(){
  $query= "SELECT * FROM item  WHERE id = '" . $id . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM computer_user   WHERE id = '" . $row['computer_user_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_user = mysqli_fetch_array($query_run);

  $query= "SELECT * FROM supplier   WHERE id = '" . $row['supplier_id'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_supplier = mysqli_fetch_array($query_run);
  
  $query= "SELECT * FROM department   WHERE id = '" . $row['dep'] . "'";
  include "real-config.php";
  $query_run= mysqli_query($mysqli, $query);
  $row_dep = mysqli_fetch_array($query_run);
  ?>
<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
      <h4>
      <?php echo $row['item_name']."/".$row['serial_no']?>
        
      </h4>
      </div>
    </div>
   
  <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $row['item_name']?></a></li>
        <li class="active"><?php echo $row['serial_no']?></li>
      </ol>
    </section>
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Laptops
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
      <style>
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    border: 1px solid black;
}
      </style>

        <table  class="table table-striped" >
                <thead >
                <th >id</th>
                <th>Name</th>
                <th>Model</th>
                <th>Serial No</th>
                <th>RAM</th>
                <th>HD</th>
                <th>Processor</th>
                <th>OS</th>
                <th>Department</th>
                </thead>
              <tbody >
              <?php
                                $query = "SELECT u.fname,u.sname,u.dep,i.model,i.tag,i.serial_no,i.ram,i.hd,i.processor,i.os,i.status FROM item i JOIN computer_user u ON i.computer_user_id = u.id WHERE item_name = 'Printer' ORDER BY  u.fname ASC";
                                include 'real-config.php';
                                
                                $query_run = mysqli_query($mysqli, $query);
                                if (!$query_run) {
                                    echo "Query_Run_Error" . mysqli_error($mysqli);
                                } else {
                                  $i = 1;
                                  while ($row = mysqli_fetch_array($query_run)) {
                           
                                    $model= $row['model'];
                                    $tag= $row['tag'];
                                    $serial_no= $row['serial_no'];
                                    $part_number= $row['part_number'];
                                    $mac_address= $row['mac_address'];
                                    $ram= $row['ram'];
                                    $hd= $row['hd'];
                                    $processor= $row['processor'];
                                    $os= $row['os'];
                                    $supplier= $row['supplier'];
                                    $status= $row['dep'];
                                    $fname= $row['fname'];
                                    $sname= $row['sname'];
                                    $name = $fname." ".strtoupper($sname);
                                  echo "<tr>
                                  <td>$i</td>
                                  <td>$name</td>
                                  <td>$model</td>
                                
                                  <td>$serial_no</td>
                                
                                  <td>$ram</td>
                                  <td>$hd</td>
                                  <td>$processor</td>
                                  <td>$os</td>
                                  <td>$status</td>
                                  </td>
                                </tr>
                               ";
                               $i++;
                                  }
                                }
                               ?>
              </tbody>
            </table>          
      </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="?print=<?php echo $id ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
          <a href="?updateItem=<?php echo $id ?>"  class="btn btn-success"><i class="fa fa-edit"></i> Update</a>

        </div>

      </div>
    </section>
  <?php
}

if (isset($_REQUEST['serial'])){
  $serial = $_REQUEST['serial'];
  include 'focus.php';
  delete_item($serial);
}