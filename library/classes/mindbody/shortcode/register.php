<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Shortcode;

use \Mindbody\Shortcode;

class Register extends Shortcode
{ 

  public function run( $args = array() )
  {

    $data = array(
      'username'  => '',
      'email'     => '',
      'firstname' => '',
      'lastname'  => '', 
      'address1'  => '',
      'address2'  => '',
      'city'      => '',
      'state'     => '',
      'zip'       => '',
      'subscribe' => '',
      'agreement' => '',
      'shortcode' => $this
    );

    $this->view('account/register', $data);

  }


  public function form_input( $name, $label, $value = NULL, $type = 'text', $required = FALSE, $autofocus = FALSE )
  {
    $ucname    = ucfirst($name);
    $required  = $required ? 'required' : '';
    $autofocus = $autofocus ? 'autofocus' : '';
    ?>

    <div class="form-label-group <?=$required?>">
      <input type="<?=$type?>" name="register[<?=$name?>]" id="register<?=$ucname?>" class="form-control" placeholder="<?= __($label) ?>" <?=$required?> <?=$autofocus?>>
      <label for="login<?=$ucname?>"><?= __($label) ?></label>
    </div>

    <?php
  }
}



