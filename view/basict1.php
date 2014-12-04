<?php
CheckAnswer::setAnswers(array(
    1 => array('a', 'b', 'c', 'd'),
    2 => 'd',
    3 => array('b', 'd'),
))
?>
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
        <p class="text-muted">1. Which are right ways to start a php script?</p>
        A <input type="checkbox" name="p1[]" value="a"/> <?php echo htmlspecialchars('<?php ?>') ?>
        <br/>
        B <input type="checkbox" name="p1[]" value="b"/> <?php echo htmlspecialchars('<script type="php"/></script>') ?>
        <br/>
        C <input type="checkbox" name="p1[]" value="c"/> <?php echo htmlspecialchars('<% %>') ?>
        <br/>
        D <input type="checkbox" name="p1[]" value="d"/> <?php echo htmlspecialchars('<? ?>') ?>
    </div>
    <?php echo CheckAnswer::showAnswer(1) ?>
    <hr>
    <div>
        <p class="text-muted">2. If you have the short_open_tag disable. Which tag will not compile?</p>
        A <input type="radio" name="p2" value="a" /> <?php echo htmlspecialchars('<?php ?>') ?>
        <br/>
        B <input type="radio" name="p2" value="b"/> <?php echo htmlspecialchars('<script type="php"/></script>') ?>
        <br/>
        C <input type="radio" name="p2" value="c"/> <?php echo htmlspecialchars('<% %>') ?>
        <br/>
        D <input type="radio" name="p2" value="d" /> <?php echo htmlspecialchars('<? ?>') ?>
    </div>
    <?php echo CheckAnswer::showAnswer(2) ?>
    <hr>
    <div>
        <p class="text-muted">3. You want to allow your users to submit HTML code in a form, 
            which will then be displayed as real code and not affect your site layout. 
            Which function do you apply to the text, when displaying it?</p>
        A <input type="checkbox" name="p3[]" value="a" /> strip_tags()
        <br/>
        B <input type="checkbox" name="p3[]" value="b" /> htmlentities()
        <br/>
        C <input type="checkbox" name="p3[]" value="c" /> htmltidy()
        <br/>
        D <input type="checkbox" name="p3[]" value="d" /> htmlspecialchars()
        <br/>
        E <input type="checkbox" name="p3[]" value="e" /> showhtml()
        <br/>
    </div>
    <?php echo CheckAnswer::showAnswer(3) ?>
    <hr>

    <button type="submit" class="btn btn-default">Submit</button>
</form>