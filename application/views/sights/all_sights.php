<div id="container">
    <h1>Welcome to CodeIgniter!</h1>

    <?php foreach ($sights as $sight):?>
        <div id="body">
            <span><?php echo $sight['name'] ?></span>
            <span><?php echo $sight['picture']?>
                <img width="100" height="100" src="<?php echo base_url(); ?>public/images/<?php echo $sight['picture'] ?>">
            </span>
            <span><?php echo $sight['description']?></span>
            <span><?php echo $sight['location']?></span>
            <span><?php echo $sight['price']?></span>
            <span><?php echo $sight['rating']?></span>
            <span><a href="<?php echo site_url('sights/update/'.$sight['id']) ?>">Update</a></span>
            <span><a href="<?php echo site_url('sights/delete/'.$sight['id']) ?>">Delete</a></span>
        </div>
    <?php endforeach;?>
</div>