<?php $this->load->view('head'); ?>
<?php
if(!empty($views)){
    foreach ($views as $view){
        $this->load->view($view, $user_data);
    }
}

?>
<?php $this->load->view('footer'); ?>
