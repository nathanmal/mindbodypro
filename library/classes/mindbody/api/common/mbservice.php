<?php 

namespace Mindbody\API;

use \Mindbody\API\Common\ClassMap;

abstract class MBService extends \SoapClient
{
  /**
   * Map of shared classes
   * @var array
   */
  protected $classmap = array(
    // Common
    'MBObject'                         => 'Mindbody\\API\\Common\\MBObject',
    'MBRequest'                        => 'Mindbody\\API\\Common\\MBRequest',
    'MBResult'                         => 'Mindbody\\API\\Common\\MBResult',
    
    // Constants
    'ActionCode'                       => 'Mindbody\\API\\Constants\\ActionCode',
    'AppointmentStatus'                => 'Mindbody\\API\\Constants\\AppointmentStatus',
    'AvailabilityDisplay'              => 'Mindbody\\API\\Constants\\AvailabilityDisplay',
    'DayOfWeek'                        => 'Mindbody\\API\\Constants\\DayOfWeek',
    'EAutopayStatus'                   => 'Mindbody\\API\\Constants\\EAutopayStatus',
    'EPaymentMethod'                   => 'Mindbody\\API\\Constants\\EPaymentMethod',
    'ScheduleType'                     => 'Mindbody\\API\\Constants\\ScheduleType',
    'StaffFilter'                      => 'Mindbody\\API\\Constants\\StaffFilter',
    'StatusCode'                       => 'Mindbody\\API\\Constants\\StatusCode',
    'XMLDetailLevel'                   => 'Mindbody\\API\\Constants\\XMLDetailLevel',
    
    // Collections
    'ArrayOfAppointment'               => 'Mindbody\\API\\Collection\\ArrayOfAppointment',
    'ArrayOfAvailability'              => 'Mindbody\\API\\Collection\\ArrayOfAvailability',
    'ArrayOfCartItem'                  => 'Mindbody\\API\\Collection\\ArrayOfCartItem',
    'ArrayOfClass'                     => 'Mindbody\\API\\Collection\\ArrayOfClass',
    'ArrayOfClassDescription'          => 'Mindbody\\API\\Collection\\ArrayOfClassDescription',
    'ArrayOfClassSchedule'             => 'Mindbody\\API\\Collection\\ArrayOfClassSchedule',
    'ArrayOfClient'                    => 'Mindbody\\API\\Collection\\ArrayOfClient',
    'ArrayOfClientContract'            => 'Mindbody\\API\\Collection\\ArrayOfClientContract',
    'ArrayOfClientIndex'               => 'Mindbody\\API\\Collection\\ArrayOfClientIndex',
    'ArrayOfClientIndexValue'          => 'Mindbody\\API\\Collection\\ArrayOfClientIndexValue',
    'ArrayOfClientMembership'          => 'Mindbody\\API\\Collection\\ArrayOfClientMembership',
    'ArrayOfClientRelationship'        => 'Mindbody\\API\\Collection\\ArrayOfClientRelationship',
    'ArrayOfClientService'             => 'Mindbody\\API\\Collection\\ArrayOfClientService',
    'ArrayOfContactLog'                => 'Mindbody\\API\\Collection\\ArrayOfContactLog',
    'ArrayOfContactLogComment'         => 'Mindbody\\API\\Collection\\ArrayOfContactLogComment',
    'ArrayOfContactLogSubtype'         => 'Mindbody\\API\\Collection\\ArrayOfContactLogSubtype',
    'ArrayOfContactLogType'            => 'Mindbody\\API\\Collection\\ArrayOfContactLogType',
    'ArrayOfContract'                  => 'Mindbody\\API\\Collection\\ArrayOfContract',
    'ArrayOfContractItem'              => 'Mindbody\\API\\Collection\\ArrayOfContractItem',
    'ArrayOfCourse'                    => 'Mindbody\\API\\Collection\\ArrayOfCourse',
    'ArrayOfCrossRegionalAssociation'  => 'Mindbody\\API\\Collection\\ArrayOfCrossRegionalAssociation',
    'ArrayOfCustomClientField'         => 'Mindbody\\API\\Collection\\ArrayOfCustomClientField',
    'ArrayOfCustomPaymentInfo'         => 'Mindbody\\API\\Collection\\ArrayOfCustomPaymentInfo',
    'ArrayOfDateTime'                  => 'Mindbody\\API\\Collection\\ArrayOfDateTime',
    'ArrayOfDayOfWeek'                 => 'Mindbody\\API\\Collection\\ArrayOfDayOfWeek',
    'ArrayOfFormulaNote'               => 'Mindbody\\API\\Collection\\ArrayOfFormulaNote',
    'ArrayOfGenderOption'              => 'Mindbody\\API\\Collection\\ArrayOfGenderOption',
    'ArrayOfInt'                       => 'Mindbody\\API\\Collection\\ArrayOfInt',
    'ArrayOfLocation'                  => 'Mindbody\\API\\Collection\\ArrayOfLocation',
    'ArrayOfLong'                      => 'Mindbody\\API\\Collection\\ArrayOfLong',
    'ArrayOfMembershipTypeRestriction' => 'Mindbody\\API\\Collection\\ArrayOfMembershipTypeRestriction',
    'ArrayOfMobileProvider'            => 'Mindbody\\API\\Collection\\ArrayOfMobileProvider',
    'ArrayOfOption'                    => 'Mindbody\\API\\Collection\\ArrayOfOption',
    'ArrayOfPackage'                   => 'Mindbody\\API\\Collection\\ArrayOfPackage',
    'ArrayOfPayment'                   => 'Mindbody\\API\\Collection\\ArrayOfPayment',
    'ArrayOfPaymentInfo'               => 'Mindbody\\API\\Collection\\ArrayOfPaymentInfo',
    'ArrayOfPermission'                => 'Mindbody\\API\\Collection\\ArrayOfPermission',
    'ArrayOfProduct'                   => 'Mindbody\\API\\Collection\\ArrayOfProduct',
    'ArrayOfProgram'                   => 'Mindbody\\API\\Collection\\ArrayOfProgram',
    'ArrayOfProspectStage'             => 'Mindbody\\API\\Collection\\ArrayOfProspectStage',
    'ArrayOfProviderIDUpdate'          => 'Mindbody\\API\\Collection\\ArrayOfProviderIDUpdate',
    'ArrayOfPurchasedItem'             => 'Mindbody\\API\\Collection\\ArrayOfPurchasedItem',
    'ArrayOfRelationship'              => 'Mindbody\\API\\Collection\\ArrayOfRelationship',
    'ArrayOfRep'                       => 'Mindbody\\API\\Collection\\ArrayOfRep',
    'ArrayOfResource'                  => 'Mindbody\\API\\Collection\\ArrayOfResource',
    'ArrayOfSale'                      => 'Mindbody\\API\\Collection\\ArrayOfSale',
    'ArrayOfSaleItem'                  => 'Mindbody\\API\\Collection\\ArrayOfSaleItem',
    'ArrayOfSalesRep'                  => 'Mindbody\\API\\Collection\\ArrayOfSalesRep',
    'ArrayOfScheduleItem'              => 'Mindbody\\API\\Collection\\ArrayOfScheduleItem',
    'ArrayOfSemester'                  => 'Mindbody\\API\\Collection\\ArrayOfSemester',
    'ArrayOfService'                   => 'Mindbody\\API\\Collection\\ArrayOfService',
    'ArrayOfSessionType'               => 'Mindbody\\API\\Collection\\ArrayOfSessionType',
    'ArrayOfSite'                      => 'Mindbody\\API\\Collection\\ArrayOfSite',
    'ArrayOfStaff'                     => 'Mindbody\\API\\Collection\\ArrayOfStaff',
    'ArrayOfStaffFilter'               => 'Mindbody\\API\\Collection\\ArrayOfStaffFilter',
    'ArrayOfString'                    => 'Mindbody\\API\\Collection\\ArrayOfString',
    'ArrayOfUnavailability'            => 'Mindbody\\API\\Collection\\ArrayOfUnavailability',
    'ArrayOfUpcomingAutopayEvent'      => 'Mindbody\\API\\Collection\\ArrayOfUpcomingAutopayEvent',
    'ArrayOfVisit'                     => 'Mindbody\\API\\Collection\\ArrayOfVisit',
    'ArrayOfWaitlistEntry'             => 'Mindbody\\API\\Collection\\ArrayOfWaitlistEntry',
    
    // Credentials
    'SourceCredentials'                => 'Mindbody\\API\\Credentials\\SourceCredentials',
    'StaffCredentials'                 => 'Mindbody\\API\\Credentials\\StaffCredentials',
    'UserCredentials'                  => 'Mindbody\\API\\Credentials\\UserCredentials',
    
    // MBObject
    'Appointment'                      => 'Mindbody\\API\\MBObject\\Appointment',
    'Availability'                     => 'Mindbody\\API\\MBObject\\Availability',
    'CartItem'                         => 'Mindbody\\API\\MBObject\\CartItem',
    'ClassCustom'                      => 'Mindbody\\API\\MBObject\\ClassCustom',
    'ClassDescription'                 => 'Mindbody\\API\\MBObject\\ClassDescription',
    'ClassSchedule'                    => 'Mindbody\\API\\MBObject\\ClassSchedule',
    'Client'                           => 'Mindbody\\API\\MBObject\\Client',
    'ClientContract'                   => 'Mindbody\\API\\MBObject\\ClientContract',
    'ClientIndex'                      => 'Mindbody\\API\\MBObject\\ClientIndex',
    'ClientIndexValue'                 => 'Mindbody\\API\\MBObject\\ClientIndexValue',
    'ClientMembership'                 => 'Mindbody\\API\\MBObject\\ClientMembership',
    'ClientRelationship'               => 'Mindbody\\API\\MBObject\\ClientRelationship',
    'ClientService'                    => 'Mindbody\\API\\MBObject\\ClientService',
    'Color'                            => 'Mindbody\\API\\MBObject\\Color',
    'ContactLog'                       => 'Mindbody\\API\\MBObject\\ContactLog',
    'ContactLogComment'                => 'Mindbody\\API\\MBObject\\ContactLogComment',
    'ContactLogSubtype'                => 'Mindbody\\API\\MBObject\\ContactLogSubtype',
    'ContactLogType'                   => 'Mindbody\\API\\MBObject\\ContactLogType',
    'Contract'                         => 'Mindbody\\API\\MBObject\\Contract',
    'FormulaNote'                      => 'Mindbody\\API\\MBObject\\FormulaNote',
    'Item'                             => 'Mindbody\\API\\MBObject\\Item',
    'Location'                         => 'Mindbody\\API\\MBObject\\Location',
    'MembershipTypeRestriction'        => 'Mindbody\\API\\MBObject\\MembershipTypeRestriction',
    'Package'                          => 'Mindbody\\API\\MBObject\\Package',
    'Product'                          => 'Mindbody\\API\\MBObject\\Product',
    'Program'                          => 'Mindbody\\API\\MBObject\\Program',
    'Rep'                              => 'Mindbody\\API\\MBObject\\Rep',
    'Resource'                         => 'Mindbody\\API\\MBObject\\Resource',
    'SaleItem'                         => 'Mindbody\\API\\MBObject\\SaleItem',
    'SalesRep'                         => 'Mindbody\\API\\MBObject\\SalesRep',
    'ScheduleItem'                     => 'Mindbody\\API\\MBObject\\ScheduleItem',
    'Service'                          => 'Mindbody\\API\\MBObject\\Service',
    'SessionType'                      => 'Mindbody\\API\\MBObject\\SessionType',
    'ShoppingCart'                     => 'Mindbody\\API\\MBObject\\ShoppingCart',
    'Size'                             => 'Mindbody\\API\\MBObject\\Size',
    'Staff'                            => 'Mindbody\\API\\MBObject\\Staff',
    'Tip'                              => 'Mindbody\\API\\MBObject\\Tip',
    'Unavailability'                   => 'Mindbody\\API\\MBObject\\Unavailability',
    'Visit'                            => 'Mindbody\\API\\MBObject\\Visit',
    
    // Struct
    'AutopaySchedule'                  => 'Mindbody\\API\\Struct\\AutopaySchedule',
    'CashInfo'                         => 'Mindbody\\API\\Struct\\CashInfo',
    'CheckInfo'                        => 'Mindbody\\API\\Struct\\CheckInfo',
    'ClientCreditCard'                 => 'Mindbody\\API\\Struct\\ClientCreditCard',
    'CompInfo'                         => 'Mindbody\\API\\Struct\\CompInfo',
    'ContractItem'                     => 'Mindbody\\API\\Struct\\ContractItem',
    'Course'                           => 'Mindbody\\API\\Struct\\Course',
    'CreditCardInfo'                   => 'Mindbody\\API\\Struct\\CreditCardInfo',
    'CrossRegionalAssociation'         => 'Mindbody\\API\\Struct\\CrossRegionalAssociation',
    'CustomClientField'                => 'Mindbody\\API\\Struct\\CustomClientField',
    'CustomPaymentInfo'                => 'Mindbody\\API\\Struct\\CustomPaymentInfo',
    'DebitAccountInfo'                 => 'Mindbody\\API\\Struct\\DebitAccountInfo',
    'EncryptedTrackDataInfo'           => 'Mindbody\\API\\Struct\\EncryptedTrackDataInfo',
    'GenderOption'                     => 'Mindbody\\API\\Struct\\GenderOption',
    'GiftCardInfo'                     => 'Mindbody\\API\\Struct\\GiftCardInfo',
    'Level'                            => 'Mindbody\\API\\Struct\\Level',
    'Liability'                        => 'Mindbody\\API\\Struct\\Liability',
    'MobileProvider'                   => 'Mindbody\\API\\Struct\\MobileProvider',
    'Option'                           => 'Mindbody\\API\\Struct\\Option',
    'Payment'                          => 'Mindbody\\API\\Struct\\Payment',
    'PaymentInfo'                      => 'Mindbody\\API\\Struct\\PaymentInfo',
    'Permission'                       => 'Mindbody\\API\\Struct\\Permission',
    'ProspectStage'                    => 'Mindbody\\API\\Struct\\ProspectStage',
    'ProviderIDUpdate'                 => 'Mindbody\\API\\Struct\\ProviderIDUpdate',
    'PurchasedItem'                    => 'Mindbody\\API\\Struct\\PurchasedItem',
    'RecordSet'                        => 'Mindbody\\API\\Struct\\RecordSet',
    'Relationship'                     => 'Mindbody\\API\\Struct\\Relationship',
    'Row'                              => 'Mindbody\\API\\Struct\\Row',
    'Sale'                             => 'Mindbody\\API\\Struct\\Sale',
    'Semester'                         => 'Mindbody\\API\\Struct\\Semester',
    'Site'                             => 'Mindbody\\API\\Struct\\Site',
    'StoredCardInfo'                   => 'Mindbody\\API\\Struct\\StoredCardInfo',
    'TrackDataInfo'                    => 'Mindbody\\API\\Struct\\TrackDataInfo',
    'UpcomingAutopayEvent'             => 'Mindbody\\API\\Struct\\UpcomingAutopayEvent',
    'WaitlistEntry'                    => 'Mindbody\\API\\Struct\\WaitlistEntry',
  );

  /**
   * Name of the service
   * @var string
   */
  protected $servicename;

  /**
   * Service-specific classes
   * @var array
   */
  protected $servicemap = array();

  /**
   * Default soap options
   * @var array
   */
  protected $defaults = array (
    'soap_version' => SOAP_1_1,
    'trace'        => 1,
    'features'     => 1,
  );

  /**
   * Options array
   * @var array
   */
  protected $options = array();


  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct( array $options = array(), $wsdl = null )
  {  
    $classmap = isset($options['classmap']) ? $options['classmap'] : array();

    $options['classmap'] = array_merge( $classmap, $this->classmap, $this->servicemap )

    $this->options = array_merge($this->defaults, $options);

    $wsdl = 'https://api.mindbodyonline.com/0_5_1/' . $this->servicename . '.asmx?WSDL';

    parent::__construct($wsdl, $this->options);
  }

  /**
   * Get the full class name by short classname
   * @param  string $class [description]
   * @return [type]        [description]
   */
  public function className( string $class )
  {
    return isset($this->options['classmap'][$class]) ? $this->options['classmap'][$class] : NULL;
  }
}