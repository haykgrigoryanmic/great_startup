<div id="container">
    <h2>HISTORICAL AND CULTURAL SIGHTS IN ARMENIA</h2>
    <?php if($sights):?>
    <?php foreach ($sights as $sight):?>
        <div id="body">
            <div class="well">
            <span><h2><?php echo $sight['name'] ?></h2></span><br>
            <span><h5><?php echo $sight['description']?></h5></span><br>
            <span>
                <a href="<?php echo $sight['website'] ?>">Useful link</a><br>
               <!-- <a href="<?php /*echo $sight['website'] */?>">Other external links</a>-->
            </span><br>
            <span><?php echo $sight['address']?></span><br>
            <span>
                <a href="<?php echo $sight['map'] ?>">See place on map</a>
            </span><br>
            <span>
                <img width="250" height="150" src="<?php echo base_url(); ?>resources/images/<?php echo $sight['picture'] ?>">
            </span><br>


            <span><a href="<?php echo site_url('sights/update/'.$sight['id']) ?>">Update</a></span>
            <span><a href="<?php echo site_url('sights/delete/'.$sight['id']) ?>">Delete</a></span>
        </div>
    <?php endforeach;?>
            <?php endif;?>
        </div>
</div>