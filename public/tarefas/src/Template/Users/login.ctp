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


<?= $this->Html->script('jquery.min') ?>
<script>
$.ajax({
        url: 'https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=[API_KEY]&safe_search=&lat=' + '-22.90278' + '&lon=' + '-43.2075' + '&format=json&nojsoncallback=1',
        error: function() {
                 console.log('FlickerAPI Error');
               },
        success: function(data) {
          var photoID = data.photos.photo[0].id;
          var ownerID = data.photos.photo[0].owner;
          var backgroundImageUrl = 'http://www.flickr.com/photos/' + ownerID + '/' + photoID + '/';

          $('.fullscreen_bg').css('background-image','url(' + backgroundImageUrl + ')');
               },
        always: function() {
                console.log('finished flicker');
               }

});
</script>