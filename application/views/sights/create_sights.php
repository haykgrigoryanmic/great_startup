<div id="container" class="well text-primary"><br><br>
    <h1>Create Sight</h1>
    <form action="<?php echo site_url('sights/create') ?>" method="POST">
        <div class="form-group col-sm-4">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        <label for="website">Website link</label>
        <input type="url" name="website" id="website" class="form-control">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control">
        <label for="map">Google map</label>
        <input type="text" name="map" id="map" class="form-control">
            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture" accept="image/*" class="form-control"><br>
            <input type="submit" name="submit" value="Save" class="btn btn-default col-sm-4">
        </div>

    </form>

</div>