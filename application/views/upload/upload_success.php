<h3>Your file was successfully uploaded!</h3>

<!--<ul>
    <?php /*foreach ($upload_data as $item => $value):*/?>
        <li><?php /*echo $item;*/?>: <?php /*echo $value;*/?></li>
    <?php /*endforeach; */?>
</ul>
-->
<p><?php echo anchor('upload_form', 'Upload Another File!'); ?></p>
<img width="200" height="200" src="<?php echo base_url(); ?>public/images/<?php echo $upload_data['file_name'] ?>">