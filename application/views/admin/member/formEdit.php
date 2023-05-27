<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Data Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Member</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Konsumen</h3>
              </div>
              <!-- form start -->
              <form class="form-horizontal" method="post" action="<?php echo site_url('member/ubah_status');?>">
			  <input type="hidden" name="id" value="<?php echo $member->idKonsumen; ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" name="username" value="<?php echo $member->username; ?>" class="form-control" id="inputEmail3" placeholder="Username">
                      <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="text" name="password" value="<?php echo $member->password; ?>" class="form-control" id="inputEmail3" placeholder="Password">
                      <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Konsumen</label>
                    <div class="col-sm-9">
                      <input type="text" name="namaKonsumen" value="<?php echo $member->namaKonsumen; ?>" class="form-control" id="inputEmail3" placeholder="Nama Konsumen">
                      <?php echo form_error('namaKonsumen', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" value="<?php echo $member->email; ?>" class="form-control" id="inputEmail3" placeholder="Email">
                      <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" name="tlpn" value="<?php echo $member->tlpn; ?>" class="form-control" id="inputEmail3" placeholder="No Telepon">
                        <?php echo form_error('tlpn', '<div class="text-danger">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat" value="<?php echo $member->alamat; ?>" class="form-control" id="inputEmail3" placeholder="Alamat">
                  <?php echo form_error('alamat', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Status Aktif</label>
                <div class="col-sm-9">
                  <input type="text" name="statusAktif" value="<?php echo $member->statusAktif; ?>" class="form-control" id="inputEmail3" placeholder="Status Aktif">
                  <?php echo form_error('statusAktif', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
            </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
