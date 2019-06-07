<?php

namespace Mindbody\API\Service\ClassService;

/**
 * Provides methods and attributes relating to classes and enrollments.
 */
class Class_x0020_Service extends \Mindbody\API\Common\MBService
{   
    /**
     * Name of the service
     * @var [type]
     */
    protected $servicename = 'ClassService';

    /**
     * Service-specific classes
     * @var array
     */
    protected $servicemap = array (
      'AddClientsToClasses'              => 'Mindbody\\API\\Service\\ClassService\\AddClientsToClasses',
      'AddClientsToClassesRequest'       => 'Mindbody\\API\\Service\\ClassService\\AddClientsToClassesRequest',
      'AddClientsToClassesResponse'      => 'Mindbody\\API\\Service\\ClassService\\AddClientsToClassesResponse',
      'AddClientsToClassesResult'        => 'Mindbody\\API\\Service\\ClassService\\AddClientsToClassesResult',
      'AddClientsToEnrollments'          => 'Mindbody\\API\\Service\\ClassService\\AddClientsToEnrollments',
      'AddClientsToEnrollmentsRequest'   => 'Mindbody\\API\\Service\\ClassService\\AddClientsToEnrollmentsRequest',
      'AddClientsToEnrollmentsResponse'  => 'Mindbody\\API\\Service\\ClassService\\AddClientsToEnrollmentsResponse',
      'AddClientsToEnrollmentsResult'    => 'Mindbody\\API\\Service\\ClassService\\AddClientsToEnrollmentsResult',
      'AddClientToClass'                 => 'Mindbody\\API\\Service\\ClassService\\AddClientToClass',
      'AddClientToClassRequest'          => 'Mindbody\\API\\Service\\ClassService\\AddClientToClassRequest',
      'AddClientToClassResponse'         => 'Mindbody\\API\\Service\\ClassService\\AddClientToClassResponse',
      'CancelSingleClass'                => 'Mindbody\\API\\Service\\ClassService\\CancelSingleClass',
      'CancelSingleClassRequest'         => 'Mindbody\\API\\Service\\ClassService\\CancelSingleClassRequest',
      'CancelSingleClassResponse'        => 'Mindbody\\API\\Service\\ClassService\\CancelSingleClassResponse',
      'CancelSingleClassResult'          => 'Mindbody\\API\\Service\\ClassService\\CancelSingleClassResult',
      'Class_x0020_Service'              => 'Mindbody\\API\\Service\\ClassService\\Class_x0020_Service',
      'GetClassDescriptions'             => 'Mindbody\\API\\Service\\ClassService\\GetClassDescriptions',
      'GetClassDescriptionsRequest'      => 'Mindbody\\API\\Service\\ClassService\\GetClassDescriptionsRequest',
      'GetClassDescriptionsResponse'     => 'Mindbody\\API\\Service\\ClassService\\GetClassDescriptionsResponse',
      'GetClassDescriptionsResult'       => 'Mindbody\\API\\Service\\ClassService\\GetClassDescriptionsResult',
      'GetClasses'                       => 'Mindbody\\API\\Service\\ClassService\\GetClasses',
      'GetClassesRequest'                => 'Mindbody\\API\\Service\\ClassService\\GetClassesRequest',
      'GetClassesResponse'               => 'Mindbody\\API\\Service\\ClassService\\GetClassesResponse',
      'GetClassesResult'                 => 'Mindbody\\API\\Service\\ClassService\\GetClassesResult',
      'GetClassSchedules'                => 'Mindbody\\API\\Service\\ClassService\\GetClassSchedules',
      'GetClassSchedulesRequest'         => 'Mindbody\\API\\Service\\ClassService\\GetClassSchedulesRequest',
      'GetClassSchedulesResponse'        => 'Mindbody\\API\\Service\\ClassService\\GetClassSchedulesResponse',
      'GetClassSchedulesResult'          => 'Mindbody\\API\\Service\\ClassService\\GetClassSchedulesResult',
      'GetClassVisits'                   => 'Mindbody\\API\\Service\\ClassService\\GetClassVisits',
      'GetClassVisitsRequest'            => 'Mindbody\\API\\Service\\ClassService\\GetClassVisitsRequest',
      'GetClassVisitsResponse'           => 'Mindbody\\API\\Service\\ClassService\\GetClassVisitsResponse',
      'GetClassVisitsResult'             => 'Mindbody\\API\\Service\\ClassService\\GetClassVisitsResult',
      'GetCourses'                       => 'Mindbody\\API\\Service\\ClassService\\GetCourses',
      'GetCoursesRequest'                => 'Mindbody\\API\\Service\\ClassService\\GetCoursesRequest',
      'GetCoursesResponse'               => 'Mindbody\\API\\Service\\ClassService\\GetCoursesResponse',
      'GetCoursesResult'                 => 'Mindbody\\API\\Service\\ClassService\\GetCoursesResult',
      'GetEnrollments'                   => 'Mindbody\\API\\Service\\ClassService\\GetEnrollments',
      'GetEnrollmentsRequest'            => 'Mindbody\\API\\Service\\ClassService\\GetEnrollmentsRequest',
      'GetEnrollmentsResponse'           => 'Mindbody\\API\\Service\\ClassService\\GetEnrollmentsResponse',
      'GetEnrollmentsResult'             => 'Mindbody\\API\\Service\\ClassService\\GetEnrollmentsResult',
      'GetSemesters'                     => 'Mindbody\\API\\Service\\ClassService\\GetSemesters',
      'GetSemestersRequest'              => 'Mindbody\\API\\Service\\ClassService\\GetSemestersRequest',
      'GetSemestersResponse'             => 'Mindbody\\API\\Service\\ClassService\\GetSemestersResponse',
      'GetSemestersResult'               => 'Mindbody\\API\\Service\\ClassService\\GetSemestersResult',
      'GetWaitlistEntries'               => 'Mindbody\\API\\Service\\ClassService\\GetWaitlistEntries',
      'GetWaitlistEntriesRequest'        => 'Mindbody\\API\\Service\\ClassService\\GetWaitlistEntriesRequest',
      'GetWaitlistEntriesResponse'       => 'Mindbody\\API\\Service\\ClassService\\GetWaitlistEntriesResponse',
      'GetWaitlistEntriesResult'         => 'Mindbody\\API\\Service\\ClassService\\GetWaitlistEntriesResult',
      'RemoveClientsFromClasses'         => 'Mindbody\\API\\Service\\ClassService\\RemoveClientsFromClasses',
      'RemoveClientsFromClassesRequest'  => 'Mindbody\\API\\Service\\ClassService\\RemoveClientsFromClassesRequest',
      'RemoveClientsFromClassesResponse' => 'Mindbody\\API\\Service\\ClassService\\RemoveClientsFromClassesResponse',
      'RemoveClientsFromClassesResult'   => 'Mindbody\\API\\Service\\ClassService\\RemoveClientsFromClassesResult',
      'RemoveFromWaitlist'               => 'Mindbody\\API\\Service\\ClassService\\RemoveFromWaitlist',
      'RemoveFromWaitlistRequest'        => 'Mindbody\\API\\Service\\ClassService\\RemoveFromWaitlistRequest',
      'RemoveFromWaitlistResponse'       => 'Mindbody\\API\\Service\\ClassService\\RemoveFromWaitlistResponse',
      'RemoveFromWaitlistResult'         => 'Mindbody\\API\\Service\\ClassService\\RemoveFromWaitlistResult',
      'SubstituteClassTeacher'           => 'Mindbody\\API\\Service\\ClassService\\SubstituteClassTeacher',
      'SubstituteClassTeacherRequest'    => 'Mindbody\\API\\Service\\ClassService\\SubstituteClassTeacherRequest',
      'SubstituteClassTeacherResponse'   => 'Mindbody\\API\\Service\\ClassService\\SubstituteClassTeacherResponse',
      'SubstituteClassTeacherResult'     => 'Mindbody\\API\\Service\\ClassService\\SubstituteClassTeacherResult',
      'SubtituteClassTeacher'            => 'Mindbody\\API\\Service\\ClassService\\SubtituteClassTeacher',
      'SubtituteClassTeacherResponse'    => 'Mindbody\\API\\Service\\ClassService\\SubtituteClassTeacherResponse',
      'UpdateClientVisits'               => 'Mindbody\\API\\Service\\ClassService\\UpdateClientVisits',
      'UpdateClientVisitsRequest'        => 'Mindbody\\API\\Service\\ClassService\\UpdateClientVisitsRequest',
      'UpdateClientVisitsResponse'       => 'Mindbody\\API\\Service\\ClassService\\UpdateClientVisitsResponse',
      'UpdateClientVisitsResult'         => 'Mindbody\\API\\Service\\ClassService\\UpdateClientVisitsResult',
    );


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
