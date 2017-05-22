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
    <form class="form-inline" action="<?php echo site_url('sights/get') ?>" method="POST">
        <div class="col-sm-3">
            <select id="region" name="region" title="region" class="form-control">
                <option title="Please select a region" value="">Please select a region</option>
                <option title="Aragatsotn" value="">Aragatsotn</option>
                <option title="Ararat" value="">Ararat</option>
                <option title="Armavir" value="">Armavir</option>
                <option title="Gegharkunik" value="">Gegharkunik</option>
                <option title="Kotayk" value="">Kotayk</option>
                <option title="Lori" value="">Lori</option>
                <option title="Shirak" value="">Shirak</option>
                <option title="Syunik" value="">Syunik</option>
                <option title="Tavush" value="">Tavush</option>
                <option title="Vayotz Dzor" value="">Vayotz Dzor</option>
                <option title="Yerevan" value=""><b>Yerevan</b></option>
            </select>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</main>