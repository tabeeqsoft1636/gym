<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="row">
            <span style="color: green; font-weight:bold;">
                <?= $this->session->flashdata('msg'); ?>
            </span>
        </div>
        <div class="box-content">
            <h4 class="box-title">Exercise Tutorials List</h4>
            <div class="row">
                <div style="text-align: right;" class="col-md-12">
                    <a href="<?= base_url('add-tutorial') ?>" class="btn btn-rounded waves-effect waves-light">Add Tutuorial</a>
                </div>
            </div>
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Exercise Name</th>
                        <th>Muscle Targeted</th>
                        <th>Video</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 0;
                    foreach ($exercise_tutorials as $tutorial) {
                        $i++;
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $tutorial->name ?></td>
                            <td><?= $tutorial->muscle_targeted ?></td>
                            <td>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $tutorial->video_url; ?>" allowfullscreen></iframe>
                                </div>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>