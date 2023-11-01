<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
            
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->



    </section>


    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- /.row -->
          <div class="row">
              <div class="col-12">
                  <div class="card card-primary card-outline">
                  <div class="card-header">
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><b>+ Tambah User </b></a>
                  </div>
                  <div class="card-header">

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class=box-body>

                  
                    <form action="user_addAct.php" method="post" enctype="multipart/form-data">     
                      <div class="modal fade" id="modal-lg">
                          <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Tambah Pengguna</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <div class="input-group mb-3">
                                <input type="text" name="user_fullname" required="required" class="form-control" placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                              </div>

                              <div class="input-group mb-3">
                                <input type="text" name="user_username" required="required"class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                              </div>

                              <div class="input-group mb-3">
                                <input type="email" name="user_email" required="required"class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                              </div>


                              <div class="input-group mb-3">
                                <select type="text" name="user_level" required="required" class="form-control select2" style="width: 100%;">
                                    <option selected="#">Level</option>
                                    <option value="Tim Redaksi">Tim Redaksi</option>
                                    <option value="Admin">Admin</option>
                                </select>
                              </div>
                        


                              <div class="input-group mb-3">
                                <input  name="user_password"type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                              </div>



                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                    </form>

                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>User Level</th>
                              <th>Password</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                              <?php 
                              include '../koneksi.php';
                              $no=1;
                              $data = mysqli_query($koneksi,"SELECT * FROM users");
                              while($d = mysqli_fetch_assoc($data)){
                                  ?>
                            
                          <tr>
                              <td><?= $no++; ?></td>
                              <td><?php echo $d['user_fullname']; ?></td>
                              <td><?php echo $d['user_username']; ?></td>
                              <td><?php echo $d['user_email']; ?></td>
                              <td><?php echo $d['user_level']; ?></td>
                              <td><?php echo $d['user_password']; ?></td>
                              <td class="project-actions text-right">
                                
                                <a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $d['user_id'] ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus<?php echo $d['user_id'] ?>">
                                  <i class="fas fa-trash">
                                  </i>
                                  Hapus
                                </a>

                                <!---HAPUS USER--->
                                <div class="modal fade" id="modal-hapus<?php echo $d['user_id'] ?>" tabindex="-1">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content bg-default">
                                      <div class="modal-header">
                                        <h5 class="modal-title" style="color:red">PERINGATAN!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                        
                                      <div class="modal-body" style="text-align:center">
                                        <p>Anda yakin ingin menghapus data ini?</p>
                                      </div>

                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <a type="button" class="btn btn-primary" href="user_hapusAct.php?id=<?php echo $d['user_id'] ?>">Ya</a>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <!---END HAPUS--->


                                <!---EDIT USER--->
                                <form action="user_updateAct.php" method="post" enctype="multipart/form-data">     
                                  <div class="modal fade" id="modal-edit<?php echo $d['user_id'] ?>">
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Pengguna</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          <div class="input-group mb-3">
                                            <input type="text" name="user_fullname"  value="<?php echo $d['user_fullname'] ?>"required="required" class="form-control" placeholder="Full name">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                          </div>

                                          <div class="input-group mb-3">
                                            <input type="text" name="user_username" value="<?php echo $d['user_username'] ?>" required="required"class="form-control" placeholder="Username">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                          </div>

                                          <div class="input-group mb-3">
                                            <input type="email" name="user_email" value="<?php echo $d['user_email'] ?>" required="required"class="form-control" placeholder="Email">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                          </div>


                                          <div class="input-group mb-3">
                                            <select type="text" name="user_level" required="required" class="form-control select2" style="width: 100%;">
                                                <option selected="#">Level</option>
                                                <option <?php if($d['user_level'] == "Tim Redaksi"){echo "selected='selected'";} ?> value="Tim Redaksi">Tim Redaksi</option>
                                                <option <?php if($d['user_level'] == "Admin"){echo "selected='selected'";} ?> value="Admin">Admin</option>
                                            </select>
                                          </div>
                                    


                                          <div class="input-group mb-3">
                                            <input name="user_password" value="<?php echo $d['user_email'] ?>" type="password" class="form-control" placeholder="Password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                          </div>



                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary" >Simpan</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                  </div>
                                </form>


                      
                              </td>

                          </tr>
                        </tbody>

                            <?php 
                              }
                              ?>

                      </table>
                  </div>
                  <!-- /.card-body -->

                  </div>
                  <!---box-body--->
                  </div>
                  <!-- /.card -->
              </div>
              </div>
              <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<?php include 'footer.php';?>