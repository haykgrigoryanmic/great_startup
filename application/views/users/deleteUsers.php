<div id="container">
    <h1>Update User</h1>
    <form action="<?php echo site_url('users/delete/'.$user->id) ?>" method="POST">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $user->username?>">
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $user->password?>">
        <label>Password confirm</label>
        <input type="passconf" name="passconf" value="<?php echo $user->passconf?>">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $user->email?>">
        <input type="submit" name="submit" value="Delete">
    </form>

</div>