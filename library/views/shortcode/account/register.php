<!-- Registration Form Shortcode -->
<section id="register">
  
  <h2><?= __('Client Registration') ?></h2>

  <form class="form-register" action="<?=$action?>" method="post">
      
      <?php 

      if( ! empty($errors) )
      {
        foreach($errors as $error) {
          echo '<div class="form-error">' . $error .'</div>';
        }
      }
      ?>

      <?= $shortcode->render_section('account') ?>
      <?= $shortcode->render_section('personal') ?>
      <?= $shortcode->render_section('emergencycontact') ?>
      
      <!-- Liability Waiver -->
      <h3><?= __('Liability Waiver') ?></h3>

      <div class="liability-waiver">
        <?php include( MBPRO_LIB . 'views/waiver.php'); ?>
      </div>
    
      <?php 
      $agreerr = isset($errors['agreement']) ? 'error' : '';
      ?>
      <div class="custom-control custom-checkbox checkbox-agreement mb-3 <?=$agreerr?>">
        <input type="checkbox" name="register[liabilityrelease]" class="custom-control-input" id="inputLiabilityRelease">
        <label class="custom-control-label" for="inputLiabilityRelease">I have read and agree to the PDXStrength liability waiver</label>
      </div>

      <hr class="my-4">

     <!--  <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="newsletter" checked>
        <label class="custom-control-label" for="newsletter">Subscribe to PDXStrength Newsletter</label>
      </div>
 -->
      <input type="hidden" name="register[nonce]" value="<?= $nonce ?>" />

      <button class="btn btn-lg btn-primary btn-block text-uppercase" name="register[submit]" type="submit">Register</button>
    
    </form>
    
     <div class="mindbody">
       <img src="<?= Theme::asset('images/mindbody.png') ?>" />
     </div>
</section>