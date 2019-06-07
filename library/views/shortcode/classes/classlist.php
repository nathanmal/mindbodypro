<?php 

if( isset($classes) && count($classes) )
{

  


  foreach($classes as $class) {

    $start = $class->getStartDateTime();
    $name  = $class->getClassDescription()->getName();
    $staff = $class->getStaff()->getName();

    // Skip canceled classes
    if( $class->getIsCanceled() ) continue;
    
    $progID    = $class->getClassDescription()->getProgram()->getID();
    $schedID   = $class->getClassScheduleID();
    $locID     = $class->getLocation()->getID();
    $classDate = $start->format('m/d/Y');
    $studio    = '45374';

    $link = 'https://clients.mindbodyonline.com/asp/res_a.asp?';
    $link .= 'tg=' . $progID . '&classId=' . $schedID . '&classDate=' . $classDate . '&clsLoc=' . $locID;
    $link .= '&studioid='.$studio;

  ?>
  <a href="<?=$link?>" target="_blank">
  <div class="row class-row">
    <div class="col-lg-2 class-time"><?= $start->format('h:i a') ?></div>
    <div class="col-lg-6 class-name"><?= $name ?></div>
    <div class="col-lg-4 class-coach"><?= $staff ?></div>
  </div>
  </a>
  <?php
  }
}