<?php

namespace Mindbody\API\Service\StaffService;

class ValidateLoginRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \Mindbody\Service\StaffService\ValidateLoginRequest
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Mindbody\Service\StaffService\ValidateLoginRequest
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
