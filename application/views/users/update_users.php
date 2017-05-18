<div id="container">
    <h1>Update User</h1>
    <form action="<?php echo site_url('users/update/'.$user->id) ?>" method="POST">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $user->username?>">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $user->password?>">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $user->email?>">
        <input type="submit" name="submit" value="Update">
    </form>

</div>