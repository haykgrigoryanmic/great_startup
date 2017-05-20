<div id="container">
    <h1>Create Sight</h1>
    <form action="<?php echo site_url('sights/create') ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label>Picture</label>
        <input type="file" name="picture" accept="image/*">
        <label>Description</label>
        <input type="text" name="description">
        <label>Location</label>
        <input type="text" name="location">
        <label>Price</label>
        <input type="text" name="price">
        <label>Rating</label>
        <input type="number" name="rating" min="1" max="10">
        <input type="submit" name="submit" value="Save">
    </form>

</div>