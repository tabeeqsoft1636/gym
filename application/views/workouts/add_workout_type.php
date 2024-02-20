<div class="row small-spacing">
    <div class="col-lg-12 col-xs-12">
        <span>
            <?= $this->session->flashdata('msg'); ?>
        </span>
        <div class="box-content card white">
            <h4 class="box-title">Add Workout Type</h4>
            <!-- /.box-title -->
            <div class="card-content">
                <form action="<?= base_url('add-workout-type') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Workout Type Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Workout Name">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- /.card-content -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-lg-6 col-xs-12 -->
</div>