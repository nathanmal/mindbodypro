<?php

namespace Mindbody\API\Service\ClientService;

class GetCrossRegionalClientAssociationsResult extends \Mindbody\API\Common\MBResult
{

    /**
     * @var ArrayOfCrossRegionalAssociation $CrossRegionalClientAssociations
     */
    protected $CrossRegionalClientAssociations = null;

    /**
     * @param StatusCode $Status
     * @param int $ErrorCode
     * @param XMLDetailLevel $XMLDetail
     * @param int $ResultCount
     * @param int $CurrentPageIndex
     * @param int $TotalPageCount
     */
    public function __construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount)
    {
      parent::__construct($Status, $ErrorCode, $XMLDetail, $ResultCount, $CurrentPageIndex, $TotalPageCount);
    }

    /**
     * @return ArrayOfCrossRegionalAssociation
     */
    public function getCrossRegionalClientAssociations()
    {
      return $this->CrossRegionalClientAssociations;
    }

    /**
     * @param ArrayOfCrossRegionalAssociation $CrossRegionalClientAssociations
     * @return \Mindbody\Service\ClientService\GetCrossRegionalClientAssociationsResult
     */
    public function setCrossRegionalClientAssociations($CrossRegionalClientAssociations)
    {
      $this->CrossRegionalClientAssociations = $CrossRegionalClientAssociations;
      return $this;
    }

}
