<?php

namespace Mindbody\API\Service\SaleService;

class UpdateProductsRequest extends \Mindbody\API\Common\MBRequest
{

    /**
     * @var ArrayOfProduct $Products
     */
    protected $Products = null;

    /**
     * @var boolean $Test
     */
    protected $Test = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return \Mindbody\Service\SaleService\UpdateProductsRequest
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTest()
    {
      return $this->Test;
    }

    /**
     * @param boolean $Test
     * @return \Mindbody\Service\SaleService\UpdateProductsRequest
     */
    public function setTest($Test)
    {
      $this->Test = $Test;
      return $this;
    }

}
