<?php

namespace Mindbody\Service\ClassService;


/**
 * Provides methods and attributes relating to classes and enrollments.
 */
class Class_x0020_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetClasses' => 'Mindbody\\Service\\ClassService\\GetClasses',
      'GetClassesRequest' => 'Mindbody\\Service\\ClassService\\GetClassesRequest',
      'MBRequest' => 'Mindbody\\Service\\ClassService\\MBRequest',
      'SourceCredentials' => 'Mindbody\\Service\\ClassService\\SourceCredentials',
      'ArrayOfInt' => 'Mindbody\\Service\\ClassService\\ArrayOfInt',
      'UserCredentials' => 'Mindbody\\Service\\ClassService\\UserCredentials',
      'ArrayOfString' => 'Mindbody\\Service\\ClassService\\ArrayOfString',
      'ArrayOfLong' => 'Mindbody\\Service\\ClassService\\ArrayOfLong',
      'GetClassesResponse' => 'Mindbody\\Service\\ClassService\\GetClassesResponse',
      'GetClassesResult' => 'Mindbody\\Service\\ClassService\\GetClassesResult',
      'MBResult' => 'Mindbody\\Service\\ClassService\\MBResult',
      'ArrayOfClass' => 'Mindbody\\Service\\ClassService\\ArrayOfClass',
      'Class' => 'Mindbody\\Service\\ClassService\\ClassCustom',
      'MBObject' => 'Mindbody\\Service\\ClassService\\MBObject',
      'Site' => 'Mindbody\\Service\\ClassService\\Site',
      'ClassDescription' => 'Mindbody\\Service\\ClassService\\ClassDescription',
      'Level' => 'Mindbody\\Service\\ClassService\\Level',
      'Program' => 'Mindbody\\Service\\ClassService\\Program',
      'SessionType' => 'Mindbody\\Service\\ClassService\\SessionType',
      'Resource' => 'Mindbody\\Service\\ClassService\\Resource',
      'ClientService' => 'Mindbody\\Service\\ClassService\\ClientService',
      'SalesRep' => 'Mindbody\\Service\\ClassService\\SalesRep',
      'Rep' => 'Mindbody\\Service\\ClassService\\Rep',
      'Staff' => 'Mindbody\\Service\\ClassService\\Staff',
      'ArrayOfAppointment' => 'Mindbody\\Service\\ClassService\\ArrayOfAppointment',
      'Appointment' => 'Mindbody\\Service\\ClassService\\Appointment',
      'ScheduleItem' => 'Mindbody\\Service\\ClassService\\ScheduleItem',
      'Unavailability' => 'Mindbody\\Service\\ClassService\\Unavailability',
      'Availability' => 'Mindbody\\Service\\ClassService\\Availability',
      'ArrayOfProgram' => 'Mindbody\\Service\\ClassService\\ArrayOfProgram',
      'Location' => 'Mindbody\\Service\\ClassService\\Location',
      'Client' => 'Mindbody\\Service\\ClassService\\Client',
      'ArrayOfClientIndex' => 'Mindbody\\Service\\ClassService\\ArrayOfClientIndex',
      'ClientIndex' => 'Mindbody\\Service\\ClassService\\ClientIndex',
      'ArrayOfClientIndexValue' => 'Mindbody\\Service\\ClassService\\ArrayOfClientIndexValue',
      'ClientIndexValue' => 'Mindbody\\Service\\ClassService\\ClientIndexValue',
      'ClientCreditCard' => 'Mindbody\\Service\\ClassService\\ClientCreditCard',
      'ArrayOfClientRelationship' => 'Mindbody\\Service\\ClassService\\ArrayOfClientRelationship',
      'ClientRelationship' => 'Mindbody\\Service\\ClassService\\ClientRelationship',
      'Relationship' => 'Mindbody\\Service\\ClassService\\Relationship',
      'ArrayOfRep' => 'Mindbody\\Service\\ClassService\\ArrayOfRep',
      'ArrayOfSalesRep' => 'Mindbody\\Service\\ClassService\\ArrayOfSalesRep',
      'ArrayOfCustomClientField' => 'Mindbody\\Service\\ClassService\\ArrayOfCustomClientField',
      'CustomClientField' => 'Mindbody\\Service\\ClassService\\CustomClientField',
      'Liability' => 'Mindbody\\Service\\ClassService\\Liability',
      'ProspectStage' => 'Mindbody\\Service\\ClassService\\ProspectStage',
      'ArrayOfResource' => 'Mindbody\\Service\\ClassService\\ArrayOfResource',
      'ArrayOfUnavailability' => 'Mindbody\\Service\\ClassService\\ArrayOfUnavailability',
      'ArrayOfAvailability' => 'Mindbody\\Service\\ClassService\\ArrayOfAvailability',
      'ArrayOfLocation' => 'Mindbody\\Service\\ClassService\\ArrayOfLocation',
      'ArrayOfProviderIDUpdate' => 'Mindbody\\Service\\ClassService\\ArrayOfProviderIDUpdate',
      'ProviderIDUpdate' => 'Mindbody\\Service\\ClassService\\ProviderIDUpdate',
      'Visit' => 'Mindbody\\Service\\ClassService\\Visit',
      'ArrayOfVisit' => 'Mindbody\\Service\\ClassService\\ArrayOfVisit',
      'ArrayOfClient' => 'Mindbody\\Service\\ClassService\\ArrayOfClient',
      'UpdateClientVisits' => 'Mindbody\\Service\\ClassService\\UpdateClientVisits',
      'UpdateClientVisitsRequest' => 'Mindbody\\Service\\ClassService\\UpdateClientVisitsRequest',
      'UpdateClientVisitsResponse' => 'Mindbody\\Service\\ClassService\\UpdateClientVisitsResponse',
      'UpdateClientVisitsResult' => 'Mindbody\\Service\\ClassService\\UpdateClientVisitsResult',
      'GetClassVisits' => 'Mindbody\\Service\\ClassService\\GetClassVisits',
      'GetClassVisitsRequest' => 'Mindbody\\Service\\ClassService\\GetClassVisitsRequest',
      'GetClassVisitsResponse' => 'Mindbody\\Service\\ClassService\\GetClassVisitsResponse',
      'GetClassVisitsResult' => 'Mindbody\\Service\\ClassService\\GetClassVisitsResult',
      'GetClassDescriptions' => 'Mindbody\\Service\\ClassService\\GetClassDescriptions',
      'GetClassDescriptionsRequest' => 'Mindbody\\Service\\ClassService\\GetClassDescriptionsRequest',
      'GetClassDescriptionsResponse' => 'Mindbody\\Service\\ClassService\\GetClassDescriptionsResponse',
      'GetClassDescriptionsResult' => 'Mindbody\\Service\\ClassService\\GetClassDescriptionsResult',
      'ArrayOfClassDescription' => 'Mindbody\\Service\\ClassService\\ArrayOfClassDescription',
      'GetEnrollments' => 'Mindbody\\Service\\ClassService\\GetEnrollments',
      'GetEnrollmentsRequest' => 'Mindbody\\Service\\ClassService\\GetEnrollmentsRequest',
      'GetEnrollmentsResponse' => 'Mindbody\\Service\\ClassService\\GetEnrollmentsResponse',
      'GetEnrollmentsResult' => 'Mindbody\\Service\\ClassService\\GetEnrollmentsResult',
      'ArrayOfClassSchedule' => 'Mindbody\\Service\\ClassService\\ArrayOfClassSchedule',
      'ClassSchedule' => 'Mindbody\\Service\\ClassService\\ClassSchedule',
      'Course' => 'Mindbody\\Service\\ClassService\\Course',
      'GetClassSchedules' => 'Mindbody\\Service\\ClassService\\GetClassSchedules',
      'GetClassSchedulesRequest' => 'Mindbody\\Service\\ClassService\\GetClassSchedulesRequest',
      'GetClassSchedulesResponse' => 'Mindbody\\Service\\ClassService\\GetClassSchedulesResponse',
      'GetClassSchedulesResult' => 'Mindbody\\Service\\ClassService\\GetClassSchedulesResult',
      'AddClientsToClasses' => 'Mindbody\\Service\\ClassService\\AddClientsToClasses',
      'AddClientsToClassesRequest' => 'Mindbody\\Service\\ClassService\\AddClientsToClassesRequest',
      'AddClientsToClassesResponse' => 'Mindbody\\Service\\ClassService\\AddClientsToClassesResponse',
      'AddClientsToClassesResult' => 'Mindbody\\Service\\ClassService\\AddClientsToClassesResult',
      'AddClientToClass' => 'Mindbody\\Service\\ClassService\\AddClientToClass',
      'AddClientToClassRequest' => 'Mindbody\\Service\\ClassService\\AddClientToClassRequest',
      'AddClientToClassResponse' => 'Mindbody\\Service\\ClassService\\AddClientToClassResponse',
      'RemoveClientsFromClasses' => 'Mindbody\\Service\\ClassService\\RemoveClientsFromClasses',
      'RemoveClientsFromClassesRequest' => 'Mindbody\\Service\\ClassService\\RemoveClientsFromClassesRequest',
      'RemoveClientsFromClassesResponse' => 'Mindbody\\Service\\ClassService\\RemoveClientsFromClassesResponse',
      'RemoveClientsFromClassesResult' => 'Mindbody\\Service\\ClassService\\RemoveClientsFromClassesResult',
      'AddClientsToEnrollments' => 'Mindbody\\Service\\ClassService\\AddClientsToEnrollments',
      'AddClientsToEnrollmentsRequest' => 'Mindbody\\Service\\ClassService\\AddClientsToEnrollmentsRequest',
      'ArrayOfDateTime' => 'Mindbody\\Service\\ClassService\\ArrayOfDateTime',
      'AddClientsToEnrollmentsResponse' => 'Mindbody\\Service\\ClassService\\AddClientsToEnrollmentsResponse',
      'AddClientsToEnrollmentsResult' => 'Mindbody\\Service\\ClassService\\AddClientsToEnrollmentsResult',
      'RemoveFromWaitlist' => 'Mindbody\\Service\\ClassService\\RemoveFromWaitlist',
      'RemoveFromWaitlistRequest' => 'Mindbody\\Service\\ClassService\\RemoveFromWaitlistRequest',
      'RemoveFromWaitlistResponse' => 'Mindbody\\Service\\ClassService\\RemoveFromWaitlistResponse',
      'RemoveFromWaitlistResult' => 'Mindbody\\Service\\ClassService\\RemoveFromWaitlistResult',
      'GetSemesters' => 'Mindbody\\Service\\ClassService\\GetSemesters',
      'GetSemestersRequest' => 'Mindbody\\Service\\ClassService\\GetSemestersRequest',
      'GetSemestersResponse' => 'Mindbody\\Service\\ClassService\\GetSemestersResponse',
      'GetSemestersResult' => 'Mindbody\\Service\\ClassService\\GetSemestersResult',
      'ArrayOfSemester' => 'Mindbody\\Service\\ClassService\\ArrayOfSemester',
      'Semester' => 'Mindbody\\Service\\ClassService\\Semester',
      'GetCourses' => 'Mindbody\\Service\\ClassService\\GetCourses',
      'GetCoursesRequest' => 'Mindbody\\Service\\ClassService\\GetCoursesRequest',
      'GetCoursesResponse' => 'Mindbody\\Service\\ClassService\\GetCoursesResponse',
      'GetCoursesResult' => 'Mindbody\\Service\\ClassService\\GetCoursesResult',
      'ArrayOfCourse' => 'Mindbody\\Service\\ClassService\\ArrayOfCourse',
      'GetWaitlistEntries' => 'Mindbody\\Service\\ClassService\\GetWaitlistEntries',
      'GetWaitlistEntriesRequest' => 'Mindbody\\Service\\ClassService\\GetWaitlistEntriesRequest',
      'GetWaitlistEntriesResponse' => 'Mindbody\\Service\\ClassService\\GetWaitlistEntriesResponse',
      'GetWaitlistEntriesResult' => 'Mindbody\\Service\\ClassService\\GetWaitlistEntriesResult',
      'ArrayOfWaitlistEntry' => 'Mindbody\\Service\\ClassService\\ArrayOfWaitlistEntry',
      'WaitlistEntry' => 'Mindbody\\Service\\ClassService\\WaitlistEntry',
      'SubstituteClassTeacher' => 'Mindbody\\Service\\ClassService\\SubstituteClassTeacher',
      'SubstituteClassTeacherRequest' => 'Mindbody\\Service\\ClassService\\SubstituteClassTeacherRequest',
      'SubstituteClassTeacherResponse' => 'Mindbody\\Service\\ClassService\\SubstituteClassTeacherResponse',
      'SubstituteClassTeacherResult' => 'Mindbody\\Service\\ClassService\\SubstituteClassTeacherResult',
      'SubtituteClassTeacher' => 'Mindbody\\Service\\ClassService\\SubtituteClassTeacher',
      'SubtituteClassTeacherResponse' => 'Mindbody\\Service\\ClassService\\SubtituteClassTeacherResponse',
      'CancelSingleClass' => 'Mindbody\\Service\\ClassService\\CancelSingleClass',
      'CancelSingleClassRequest' => 'Mindbody\\Service\\ClassService\\CancelSingleClassRequest',
      'CancelSingleClassResponse' => 'Mindbody\\Service\\ClassService\\CancelSingleClassResponse',
      'CancelSingleClassResult' => 'Mindbody\\Service\\ClassService\\CancelSingleClassResult',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'soap_version' => 1,
      'trace' => 1,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a list of classes.
     *
     * @param GetClasses $parameters
     * @return GetClassesResponse
     */
    public function GetClasses(GetClasses $parameters)
    {
      return $this->__soapCall('GetClasses', array($parameters));
    }

    /**
     * Update a list of visits.
     *
     * @param UpdateClientVisits $parameters
     * @return UpdateClientVisitsResponse
     */
    public function UpdateClientVisits(UpdateClientVisits $parameters)
    {
      return $this->__soapCall('UpdateClientVisits', array($parameters));
    }

    /**
     * Gets a class with a list of clients.
     *
     * @param GetClassVisits $parameters
     * @return GetClassVisitsResponse
     */
    public function GetClassVisits(GetClassVisits $parameters)
    {
      return $this->__soapCall('GetClassVisits', array($parameters));
    }

    /**
     * Gets a list of class descriptions.
     *
     * @param GetClassDescriptions $parameters
     * @return GetClassDescriptionsResponse
     */
    public function GetClassDescriptions(GetClassDescriptions $parameters)
    {
      return $this->__soapCall('GetClassDescriptions', array($parameters));
    }

    /**
     * Gets a list of enrollments.
     *
     * @param GetEnrollments $parameters
     * @return GetEnrollmentsResponse
     */
    public function GetEnrollments(GetEnrollments $parameters)
    {
      return $this->__soapCall('GetEnrollments', array($parameters));
    }

    /**
     * Gets a list of class schedules.
     *
     * @param GetClassSchedules $parameters
     * @return GetClassSchedulesResponse
     */
    public function GetClassSchedules(GetClassSchedules $parameters)
    {
      return $this->__soapCall('GetClassSchedules', array($parameters));
    }

    /**
     * Adds clients to classes (signup).
     *
     * @param AddClientsToClasses $parameters
     * @return AddClientsToClassesResponse
     */
    public function AddClientsToClasses(AddClientsToClasses $parameters)
    {
      return $this->__soapCall('AddClientsToClasses', array($parameters));
    }

    /**
     * Adds a client to a class.
     *
     * @param AddClientToClass $parameters
     * @return AddClientToClassResponse
     */
    public function AddClientToClass(AddClientToClass $parameters)
    {
      return $this->__soapCall('AddClientToClass', array($parameters));
    }

    /**
     * Removes clients from classes.
     *
     * @param RemoveClientsFromClasses $parameters
     * @return RemoveClientsFromClassesResponse
     */
    public function RemoveClientsFromClasses(RemoveClientsFromClasses $parameters)
    {
      return $this->__soapCall('RemoveClientsFromClasses', array($parameters));
    }

    /**
     * Adds clients to enrollments (signup).
     *
     * @param AddClientsToEnrollments $parameters
     * @return AddClientsToEnrollmentsResponse
     */
    public function AddClientsToEnrollments(AddClientsToEnrollments $parameters)
    {
      return $this->__soapCall('AddClientsToEnrollments', array($parameters));
    }

    /**
     * Removes client from enrollment waitlist
     *
     * @param RemoveFromWaitlist $parameters
     * @return RemoveFromWaitlistResponse
     */
    public function RemoveFromWaitlist(RemoveFromWaitlist $parameters)
    {
      return $this->__soapCall('RemoveFromWaitlist', array($parameters));
    }

    /**
     * Gets a list of semesters.
     *
     * @param GetSemesters $parameters
     * @return GetSemestersResponse
     */
    public function GetSemesters(GetSemesters $parameters)
    {
      return $this->__soapCall('GetSemesters', array($parameters));
    }

    /**
     * Gets a list of courses.
     *
     * @param GetCourses $parameters
     * @return GetCoursesResponse
     */
    public function GetCourses(GetCourses $parameters)
    {
      return $this->__soapCall('GetCourses', array($parameters));
    }

    /**
     * Get waitlist entries.
     *
     * @param GetWaitlistEntries $parameters
     * @return GetWaitlistEntriesResponse
     */
    public function GetWaitlistEntries(GetWaitlistEntries $parameters)
    {
      return $this->__soapCall('GetWaitlistEntries', array($parameters));
    }

    /**
     * Substitutes the teacher for a class.
     *
     * @param SubstituteClassTeacher $parameters
     * @return SubstituteClassTeacherResponse
     */
    public function SubstituteClassTeacher(SubstituteClassTeacher $parameters)
    {
      return $this->__soapCall('SubstituteClassTeacher', array($parameters));
    }

    /**
     * Substitutes the teacher for a class.
     *
     * @param SubtituteClassTeacher $parameters
     * @return SubtituteClassTeacherResponse
     */
    public function SubtituteClassTeacher(SubtituteClassTeacher $parameters)
    {
      return $this->__soapCall('SubtituteClassTeacher', array($parameters));
    }

    /**
     * Cancels a single class instance.
     *
     * @param CancelSingleClass $parameters
     * @return CancelSingleClassResponse
     */
    public function CancelSingleClass(CancelSingleClass $parameters)
    {
      return $this->__soapCall('CancelSingleClass', array($parameters));
    }

}
