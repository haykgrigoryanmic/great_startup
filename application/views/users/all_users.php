<div id="container">
    <h1>Welcome to CodeIgniter!</h1>

    <?php foreach ($users as $user):?>
        <div id="body">
            <span><?php echo $user['username'] ?></span>
            <span><?php echo $user['email']?></span>
            <span><a href="<?php echo site_url('users/update/'.$user['id']) ?>">Update</a></span>
            <span><a href="<?php echo site_url('users/delete/'.$user['id']) ?>">Delete</a></span>
        </div>
    <?php endforeach;?>
</div>