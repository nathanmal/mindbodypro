<?php defined('ABSPATH') OR die('Unauthorized Access');

namespace Mindbody\Admin;

use \Mindbody;
use \Mindbody\Admin\Page;

class Import extends Page
{
  public $title = 'Import';

  public $menu_title = 'Import';
  
  public function render_page_content()
  {


    $service = Mindbody::service('Staff');

    $data = $service->GetStaff()->getData();

    $service->printData();

    $staff = $data->getStaffMembers()->getStaff();

    foreach($staff as $staffmember)
    {
      echo $staffmember->getName() . '<br/>';
    }

  }


}