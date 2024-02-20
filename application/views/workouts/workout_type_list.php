<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="row">
            <span style="color: green; font-weight:bold;">
                <?= $this->session->flashdata('msg'); ?>
            </span>
        </div>
        <div class="box-content">
            <h4 class="box-title">Workout type List</h4>
            <div class="row">
                <div style="text-align: right;" class="col-md-12">
                    <a href="<?= base_url('add-workout-type') ?>" class="btn btn-rounded waves-effect waves-light">Add Workout Type</a>
                </div>
            </div>
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 0;
                    foreach ($workout_types as $workout) {
                        $i++;
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $workout->name ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>