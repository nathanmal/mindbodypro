<section id="register">
  
  <h2><?= __('Client Registration') ?></h2>

  <form class="form-register">
      <!-- Account Details -->
      <?php 
      $shortcode->form_input('username', 'User Name', $username, 'text', TRUE, TRUE);
      $shortcode->form_input('email', 'Email', $email, 'email', TRUE);
      $shortcode->form_input('password', 'Password', NULL, 'password', TRUE);
      $shortcode->form_input('confirmpassword', 'Confirm Password', NULL, 'password', TRUE);
      ?>

      <hr class="my-4">
      
      <!-- Personal Details -->
      
      <?php 
      $shortcode->form_input('address', 'Address', $address1, 'text', TRUE);
      $shortcode->form_input('address2', 'Address (Line 2)', $address2, 'text', TRUE);
      $shortcode->form_input('city', 'City', $city, 'text', TRUE);
      $shortcode->form_input('state', 'State', $state, 'text', TRUE);
      $shortcode->form_input('zip', 'Zipcode', $zip, 'text', TRUE);


      ?>

      <hr class="my-4">

      
      <div class="liability-waiver">
        <?php include( MBPRO_LIB . 'views/waiver.php'); ?>
      </div>

      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" name="register[agreement]" class="custom-control-input" id="inputAgreement">
        <label class="custom-control-label" for="inputAgreement">I have read and agree to the PDXStrength liability waiver</label>
      </div>

      <hr class="my-4">

     <!--  <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="newsletter" checked>
        <label class="custom-control-label" for="newsletter">Subscribe to PDXStrength Newsletter</label>
      </div>
 -->
      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
    
    </form>
    
     <div class="mindbody">
       <img src="<?= Theme::asset('images/mindbody.png') ?>" />
     </div>
</section>