<?php 

$days = array();

foreach( $classes as $class )
{
  $start = $class->getStartDateTime();

  $day = $start->format('m/d/Y');

  if( ! isset($days[$day]) ) $days[$day] = array();

  $days[$day][] = $class;

}


?>

<section id="schedule">

  <h2><?= __('Class Schedule') ?></h2>

  <div class="daily-schedule">
    
    <?php 

    $gmt_offset = get_option('gmt_offset');

    $gmt_interval = new DateInterval( 'PT' . abs($gmt_offset) . 'H' );

    foreach( $days as $day => $dayclasses )
    { 

      $date = Datetime::createFromFormat('m/d/Y', $day);

      usort($dayclasses, 'mb_classes_sort_by_date');

      ?>
        <div class="table-responsive">
        <table class="table table-striped table-schedule">
          <thead>
            <tr class="date-header">
              <th colspan="4"><?= $date->format('l, F jS Y') ?></th>
            </tr>
            <tr class="detail-header">
              <th>Time</th>
              <th>Class</th>
              <th>Coach</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            foreach($dayclasses as $class) {

            // Skip canceled classes
            if( $class->getIsCanceled() )
            {
              continue;
            }


            $start     = $class->getStartDateTime();
            $end       = $class->getEndDateTime();
            $name      = $class->getClassDescription()->getName();
            $staff     = $class->getStaff()->getName();

            $progID    = $class->getClassDescription()->getProgram()->getID();
            $schedID   = $class->getClassScheduleID();
            $locID     = $class->getLocation()->getID();
            $classDate = $start->format('m/d/Y');
            $studio    = '45374';

            $link = 'https://clients.mindbodyonline.com/asp/res_a.asp?';
            $link .= 'tg=' . $progID . '&classId=' . $schedID . '&classDate=' . $classDate . '&clsLoc=' . $locID;
            $link .= '&studioid='.$studio;

            $now = (new \DateTime('now'))->sub($gmt_interval);

            $disabled = $start <= $now ? 'disabled' :'';

            $enroll = '<a href="'.$link.'" target="_blank" class="btn btn-primary '.$disabled.'" '.$disabled.'>'.__('Enroll') .'</a>';

            $duration  = '<span class="class-duration">(' . mb_class_duration($class) . ')</span>';

            ?> 
              <tr>

                <td class="class-time"><?= $start->format('h:i a') . $duration ?></td>
                <td class="class-name"><?= $name ?></td>
                <td class="class-staff"><?= $staff ?></td>
                <td class="class-enroll"><?= $enroll ?></td>
              </tr>
            <?php
            } 
            ?>
          </tbody>
        </table>
        </div>
      <?php

    }
    ?>

  </div>
</section>