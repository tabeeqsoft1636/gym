<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="row">
            <span style="color: green; font-weight:bold;">
                <?= $this->session->flashdata('msg'); ?>
            </span>
        </div>
        <div class="box-content">
            <h4 class="box-title">Workout List</h4>
            <div class="row">
                <div style="text-align: right;" class="col-md-12">
                    <a href="<?= base_url('add-workout') ?>" class="btn btn-rounded waves-effect waves-light">Add Workout</a>
                </div>
            </div>
            <div class="dropdown js__drop_down">
                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Workout Name</th>
                        <th>Workout Type</th>
                        <th>Sets</th>
                        <th>Reps</th>
                        <th>Duration (minutes)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($workouts as $workout) {
                        $i++;
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $workout->name ?></td>
                            <td><?= $workout->workout_type ?></td>
                            <td><?= $workout->sets ?></td>
                            <td><?= $workout->reps ?></td>
                            <td><?= $workout->duration ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
