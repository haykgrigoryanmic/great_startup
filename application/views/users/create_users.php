<div id="container" class="well text-primary">
    <h1>Create User</h1>

<!--    --><?php //echo validation_errors(); ?>

    <?php echo form_open('users/create'); ?>

   <!-- <form action="<?php /*echo site_url('users/create') */?>" method="POST">-->
        <div class="form-group col-sm-4">
        <label>Username</label>
            <?php echo form_error('username'); ?>
        <input type="text" name="username" size="50" value="<?php echo set_value('username'); ?>" class="form-control">
        <label>Password</label>
            <?php echo form_error('password'); ?>
        <input type="password" name="password" size="50" value="<?php echo set_value('password'); ?>" class="form-control">
        <label>Password confirm</label>
            <?php echo form_error('passconf'); ?>
        <input type="text" name="passconf" size="50" value="<?php echo set_value('passconf'); ?>" class="form-control">
        <label>Email</label>
            <?php echo form_error('email'); ?>
        <input type="text" name="email" size="50" value="<?php echo set_value('email'); ?>"  class="form-control">
        <input type="submit" name="submit" value="Save" class="btn btn-default col-sm-4">
        </div>
    </form>

</div>