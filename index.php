<?php require './lib/boot.php' ?>
<?php $view = isset($_GET['t']) && $_GET['t'] != '' ? $_GET['t'] : 'index'; ?>

<?php try { ?>
    <?php echo View::show($view) ?>
<?php } catch (Exception $e) { ?>
    <div>
        <h4>Page not found 404</h4>
    </div>
<?php } ?>