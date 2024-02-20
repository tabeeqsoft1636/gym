<div class="row small-spacing">
    <div class="col-lg-12 col-xs-12">
        <span>
            <?= $this->session->flashdata('msg'); ?>
        </span>
        <div class="box-content card white">
            <h4 class="box-title">Add Workout</h4>
            <div class="card-content">
                <form action="<?= base_url('add-workout') ?>" method="POST">
                    <div class="form-group">
                        <label for="workout_type_id">Workout Type:</label>
                        <select class="form-control" id="workout_type_id" name="workout_type_id" required>
                            <?php foreach ($workout_types as $type): ?>
                                <option value="<?php echo $type->workout_type_id; ?>"><?php echo $type->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Workout Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="sets">Sets:</label>
                        <input type="number" class="form-control" id="sets" name="sets" required>
                    </div>
                    <div class="form-group">
                        <label for="reps">Reps:</label>
                        <input type="number" class="form-control" id="reps" name="reps" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (minutes):</label>
                        <input type="number" class="form-control" id="duration" name="duration" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
