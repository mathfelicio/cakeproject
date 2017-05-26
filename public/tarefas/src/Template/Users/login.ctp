<?= $this->Html->css('login') ?>

<div id="fullscreen_bg" class="fullscreen_bg"/>
    <div class="container">
        
        <div class="form-signin">
            <h1 class="form-signin-heading text-muted">Sign In</h1>
            <?php echo $this->Form->create(); ?>
            <fieldset>
                <?php
                    echo $this->Form->input('username', ['class' => 'form-control']);
                    echo $this->Form->input('password', ['class' => 'form-control']);
                ?>
            </fieldset>
            <?php echo $this->Form->button('Login', ['class' => 'btn btn-lg btn-primary btn-block']);?>
            <?php echo $this->Form->end(); ?>
        </div>
</div>