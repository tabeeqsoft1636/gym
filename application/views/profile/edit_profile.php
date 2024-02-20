<div class="row small-spacing">
    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title"><?= $this->session->userdata('full_name') ?></h4>
            <!-- /.box-title -->
            <div class="card-content">
                <form action="<?= base_url('update-profile') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value="<?= $userData->name ?>" name="name" type="name" class="form-control" id="exampleInputEmail1" required placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input value="<?= $userData->email ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" required placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input value="" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- /.card-content -->
        </div>
        <!-- /.box-content -->
    </div>
</div>