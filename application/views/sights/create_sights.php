<div id="container" class="well text-primary"><br><br>
    <h1>Create Sight</h1>
    <div class="col-sm-4">
        <form action="<?php echo site_url('sights/create') ?>" method="POST">
            <div class="form-group col-sm-12">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group col-sm-12">
                <label for="website">Website link</label>
                <input type="url" name="website" id="website" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="map">Google map</label>
                <input type="text" name="map" id="map" class="form-control">
            </div>

            <div class="form-group col-sm-12 file-picker">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture" accept="image/*" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <button type="button" name="add" id="add-another-image" value="1">Add another image</button>
            </div>
            <div class="form-group col-sm-4">
                <label for="picture">Regions</label>
                <select id="region" name="region" title="region" class="form-control">
                    <option title="Please select a region" value="0">Please select a region</option>
                    <option title="Aragatsotn" value="1">Aragatsotn</option>
                    <option title="Ararat" value="2">Ararat</option>
                    <option title="Armavir" value="3">Armavir</option>
                    <option title="Gegharkunik" value="4">Gegharkunik</option>
                    <option title="Kotayk" value="5">Kotayk</option>
                    <option title="Lori" value="6">Lori</option>
                    <option title="Shirak" value="7">Shirak</option>
                    <option title="Syunik" value="8">Syunik</option>
                    <option title="Tavush" value="9">Tavush</option>
                    <option title="Vayotz Dzor" value="10">Vayotz Dzor</option>
                    <option title="Yerevan" value="11"><b>Yerevan</b></option>
                </select>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" name="submit" value="Save" class="btn btn-default col-sm-4">
            </div>



        </form>
    </div>