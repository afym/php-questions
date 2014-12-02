<?php ?>
<div class="header">
    <nav>
        <ul class="nav nav-pills pull-right">
            <li class="active" role="presentation"><a href="/">Home</a></li>
        </ul>
    </nav>
    <h3 class="text-muted">PHP Basic 01</h3>
    <hr>
</div>

<form action="" method="post">
    <div>
        <p class="text-muted">1. Which are ways to start a php script?</p>
        <input type="checkbox" name="p1[]" value="a"/> <?php echo htmlspecialchars('<?php ?>') ?>
        <br/>
        <input type="checkbox" name="p1[]" value="b"/> <?php echo htmlspecialchars('<script type="php"/></script>') ?>
        <br/>
        <input type="checkbox" name="p1[]" value="c"/> <?php echo htmlspecialchars('<% %>') ?>
        <br/>
        <input type="checkbox" name="p1[]" value="d"/> <?php echo htmlspecialchars('<? ?>') ?>
    </div>
    <hr>
    <div>
        <p class="text-muted">2. If you have the short_open_tag disable. Which tag will not compile?</p>
        <input type="radio" name="p2" value="a" /> <?php echo htmlspecialchars('<?php ?>') ?>
        <br/>
        <input type="radio" name="p2" value="b"/> <?php echo htmlspecialchars('<script type="php"/></script>') ?>
        <br/>
        <input type="radio" name="p2" value="c"/> <?php echo htmlspecialchars('<% %>') ?>
        <br/>
        <input type="radio" name="p2" value="d" /> <?php echo htmlspecialchars('<? ?>') ?>
    </div>
</div>
<hr>
</form>