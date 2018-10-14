
<section id="login">
  <!-- Login Form -->
  <form class="form-login" action="<?= $action ?>" method="post">
      <h2><?= __('Client Login') ?></h2>

      <?php 
      if( ! empty($errors) )
      {
        foreach($errors as $error) {
          echo '<div class="form-error">' . $error .'</div>';
        }
      }
      ?>

      <!-- Username -->
      <div class="form-label-group">
        <input type="text" name="login[username]" id="loginUsername" class="form-control" placeholder="<?= __('User Name') ?>" required autofocus>
        <label for="loginUsername"><?= __('Username') ?></label>
      </div>
      <!-- Password -->
      <div class="form-label-group">
        <input type="password" name="login[password]" id="loginPassword" class="form-control" placeholder="<?= __('Password') ?>" required>
        <label for="loginPassword"><?= __('Password') ?></label>
      </div>
      <!-- Remember Me -->
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" name="login[rememberme]" class="custom-control-input" id="loginRememberMe" value="1">
        <label class="custom-control-label" for="loginRememberMe" ><?= __('Remember Me') ?></label>
      </div>
      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login[submit]" value="submit" ><?= __('Sign In') ?></button>
      <hr class="my-4">

      <input type="hidden" name="login[redirect]" value="<?= $redirect ?>" />
      <input type="hidden" name="login[nonce]" value="<?= $nonce ?>" />
  </form>
  <!-- Register Link -->
  <div class="register">
    <?= __("Don't have an account?") ?> <a href="<?= site_url('account/register') ?>"><?= __('Register FREE!') ?></a>
  </div>
  <!-- Mindbody Branding -->
  <div class="mindbody">
    <img src="<?= Theme::asset('images/mindbody.png') ?>" />
  </div>
</section>