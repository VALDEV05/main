<!-- LOGO -->
<?php
$url_logo_egho =  get_field('logo-first-egho','options')["url"];
$home_url = get_home_url();
?>

<div class="container-logo_egho">
    <a href="<?php $home_url;?>">
        <img src="<?php echo $url_logo_egho;?>" alt="">
    </a>
</div>
<!-- /.container-logo_egho -->