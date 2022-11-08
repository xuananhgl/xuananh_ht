<?php
$z0gSeoTitle = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoDescription = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoKeywords = 'Logiciel de gestion de projets';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $z0gSeoTitle ?>
        <?= $this->fetch('title') ?>
    </title>

    <!-- SEO meta data -->
    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']); ?>
    <?= $this->Html->meta('keywords', $z0gSeoKeywords );?>
    <?= $this->Html->meta('description', $z0gSeoDescription);?>

   
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>

    <!-- <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap')?> -->
    <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')?>
    <?=  $this->Html->script('https://cdn.tailwindcss.com')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('js') ?>
</head>
<body>
    <!-- ht-admin bar -->
    <div class="w-full">   
        <?php 
        if(isset($user)){
            echo $this->element('Widgets/Adminbar') ;
        }
        ?>   
    </div>
    <!-- ht-z0gravity topbar --> 
    <div class="">   
       
    </div>


    <div class="w-full">
        <?= $this->fetch('content') ?>
    </div>

    <?=  $this->Html->script('https://unpkg.com/flowbite@1.5.3/dist/flowbite.js')?>
    
</body>
</html>