<div id="container">
    <h1>Create User</h1>
    <form action="<?php echo site_url('users/create') ?>" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <label>Email</label>
        <input type="text" name="email">
        <input type="submit" name="submit" value="Save">
    </form>

</div>