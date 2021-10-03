<?php
define("URL", "http://localhost/www/backend/php/app-persona-pdo/");
include "./Autoload.php";
include "./resource/layouts/header.php";
?>

<section class="container-xl">
    <div class="row">
        <div class="col-sm-5">
            <?php 
            if(!$_GET){
                require "./resource/components/person/create.php"; 
            }
            ?>
        </div>
        
        <div class="col-sm-7">
            <?php 
            if(!$_GET){
                require "./resource/components/person/list.php"; 
            }
            ?>
        </div>
    </div>
    <div class="col-sm-6 m-auto">
        <?php
        if(isset($_GET['ver'])){
            require "./resource/components/person/ver.php"; 
        }
        if(isset($_GET['edit'])){
            require "./resource/components/person/edit.php"; 
        }
        ?>
    </div>
</section>

<?php
include "./resource/layouts/footer.php";
?>