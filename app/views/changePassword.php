<?php include_once 'header.php'?>
<div class="card p4 bg-ligth">
    <div class="card header">
        <h1 class="text-center"><?= $data['subtitle'] ?> </h1>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>login/changePassword" method="post"></form>
    </div>
</div>
<?php include_once 'footer.php'?>
