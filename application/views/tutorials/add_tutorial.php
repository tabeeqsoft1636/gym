<div class="row small-spacing">
    <div class="col-lg-12 col-xs-12">
        <span>
            <?= $this->session->flashdata('msg'); ?>
        </span>
        <div class="box-content card white">
            <h4 class="box-title">Add Exercise Tutorial</h4>
            <div class="card-content">
                <form action="<?= base_url('add-tutorial') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Exercise Title</label>
                        <input required name="name" type="text" class="form-control" placeholder="Exercise Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Muscle Targeted</label>
                        <input required name="muscle_targeted" type="text" class="form-control" placeholder="Enter the muscle groups targeted by the exercise">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Video URL</label>
                        <input type="text" class="form-control" id="video_url" name="video_url" required>
                       </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>