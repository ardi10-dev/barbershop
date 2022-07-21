<body style="background-color: rgb(112, 103, 103); ">
    <div class="container light-style flex-grow-1 container-p-y" style="margin-top:150px; margin-bottom:150px; ">
        <center>
            <h4 style="color:white;" class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
        </center>

        <div class="card overflow-hidden" style="border-radius: 25px;">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links" style="border-radius: 10px;">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#history-info">History</a>
                        <a class="list-group-item list-group-item-action"
                            href="<?= base_url('Auth/logout');?> ">LogOut</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change Password</a>
                    </div>
                </div>
                
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">
                                <img style="border-radius: 10px; width:50px;"
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                    class="d-block ui-w-80">
                                
                            </div>
                            <?php foreach($user as $a){ ?>
                            <h4><?= $a['email'];?></h4>
                            <hr class="border-light m-0">
                            <form action="<?= base_url('User/update');?>" method="POST">
                            <input type="hidden" name="id_user" value="<?= $a['id_user']; ?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label ">NAME</label>
                                        <input type="text" style="font-weight:bold; font-size:14px;"
                                            class="form-control mb-1" id="nama" name="nama" value="<?= $a['nama'];?>">

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">HANDPHONE</label>
                                        <input type="text" style="font-weight:bold; font-size:14px;"
                                            class="form-control" name="no_hp" id="no_hp" value="<?= $a['no_hp'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">EMAIL</label>
                                        <input type="text" style="font-weight:bold; font-size:14px;"
                                            class="form-control" id="email" name="email" value="<?= $a['email'];?>">
                                    </div>
                                    <div class="text-right mt-3">
                                        <button style="border-radius: 10px;" type="submit" class="btn btn-primary">Save
                                            changes</button>
                                        <button style="border-radius: 10px;" type="button"
                                            class="btn btn-default">Cancel</button>
                                    </div>

                            </form>

                        </div>
                    <?php }?>

                    </div>
                    <div class="tab-pane fade" id="account-change-password">
                        <div class="card-body pb-2" style="border-radius: 10px;">

                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="history-info" style="border-radius: 10px;">
                        <div class="row" style="border-radius: 10px;">
                            <div class="col-12">
                                <div class="card">

                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Layanan</th>
                                                    <th>harga</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($riwayat as $u) : ?>
                                                <tr>
                                                    <td><?=$i; ?>.</td>
                                                    <td><?=$u['tanggal']; ?></td>
                                                    <td><?=$u['jam']; ?></td>
                                                    <td><?=$u['id_layanan']; ?></td>
                                                    <td><?=$u['harga']; ?></td>
                                                    <td><?=$u['status']; ?></td>
                                                </tr>
                                                <?php $i++;?>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="account-social-links">
                        <div class="card-body pb-2">

                            <div class="form-group">
                                <label class="form-label">Twitter</label>
                                <input type="text" class="form-control" value="https://twitter.com/user">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" value="https://www.facebook.com/user">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Google+</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">LinkedIn</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" value="https://www.instagram.com/user">
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-connections">
                        <div class="card-body">
                            <button type="button" class="btn btn-twitter">Connect to
                                <strong>Twitter</strong></button>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                            <h5 class="mb-2">
                                <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                        class="ion ion-md-close"></i> Remove</a>
                                <i class="ion ion-logo-google text-google"></i>
                                You are connected to Google:
                            </h5>
                            nmaxwell@mail.com
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                            <button type="button" class="btn btn-facebook">Connect to
                                <strong>Facebook</strong></button>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                            <button type="button" class="btn btn-instagram">Connect to
                                <strong>Instagram</strong></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-notifications">
                        <div class="card-body pb-2">

                            <h6 class="mb-4">Activity</h6>

                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input" checked="">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Email me when someone comments on my article</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input" checked="">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Email me when someone answers on my forum
                                        thread</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Email me when someone follows me</span>
                                </label>
                            </div>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body pb-2">

                            <h6 class="mb-4">Application</h6>

                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input" checked="">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">News and announcements</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Weekly product updates</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="switcher">
                                    <input type="checkbox" class="switcher-input" checked="">
                                    <span class="switcher-indicator">
                                        <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                    </span>
                                    <span class="switcher-label">Weekly blog digest</span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
</body>