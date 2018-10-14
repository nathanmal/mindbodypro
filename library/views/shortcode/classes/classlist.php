<?php 

if( isset($classes) && count($classes) )
{

  


  foreach($classes as $class) {

    $start = $class->getStartDateTime()->format('h:i a');
    $name  = $class->getClassDescription()->getName();
    $staff = $class->getStaff()->getName();

  ?> 
  
  <div class="row class-row">
    <div class="col-lg-2 class-time"><?= $start ?></div>
    <div class="col-lg-6 class-name"><?= $name ?></div>
    <div class="col-lg-4 class-coach"><?= $staff ?></div>
  </div>



  <?php
  }
}