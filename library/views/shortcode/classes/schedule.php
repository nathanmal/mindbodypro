<?php 

$days = array();

foreach( $classes as $class )
{
  $start = $class->getStartDateTime();

  $day = $start->format('D m/d');

  if( ! isset($days[$day]) ) $days[$day] = array();

  $days[$day][] = $class;

}

?>

<section id="schedule">

  <h2><?= __('Class Schedule') ?></h2>

  <div class="daily-schedule">
    
    <?php 

    foreach( $days as $day => $dayclasses )
    {
      ?>
        <table class="table table-striped table-schedule">
          <thead>
            <tr>
              <th><?= $day ?></th>
              <th>Class</th>
              <th>Coach</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($dayclasses as $class) {

            $start     = $class->getStartDateTime();
            $end       = $class->getEndDateTime();
            $name      = $class->getClassDescription()->getName();
            $staff     = $class->getStaff()->getName();

            ?> 
              <tr>
                <td><?= $start->format('h:i a') ?> - <?= $end->format('h:i a') ?></td>
                <td><?= $name ?></td>
                <td><?= $staff ?></td>
                <td><a href="#" class="btn btn-primary">Enroll</a></td>
              </tr>
            <?php
            } 
            ?>
          </tbody>
        </table>
      <?php

    }
    ?>

  </div>
</section>