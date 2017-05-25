<div id="navbar">
    <ul>
        <li>
            <a href="<?php echo site_url('sights/create') ?>">Create sight</a>
        </li>
        <li>
            <a href="<?php echo site_url('sights/get') ?>">Get all sights</a>
        </li>
    </ul>
</div>
<main>
    <label for="region" class="well well-lg text-center">
        <h5  class="text-center text-primary">HISTORICAL AND CULTURAL SIGHTS IN ARMENIA</h5>
        <p class="text-center text-muted">Regions of Armenia </p>
    </label>
    <form class="form-inline select-region" action="<?php echo site_url('sights/get') ?>" method="POST">
        <div class="col-sm-3">
            <select id="region" name="region" title="region" class="form-control">
                <option title="Please select a region" value="">Please select a region</option>
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
            <button type="submit" class="btn btn-default select-region-button">Submit</button>
        </div>
    </form>
</main>