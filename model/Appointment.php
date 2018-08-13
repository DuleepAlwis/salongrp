<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/13/2018
 * Time: 7:22 PM
 */

class Appointment
{
    private $AppointmentId;
    private $CustomerId;
    private $BeauticianId;
    private $ServiceId;
    private $date;
    private $stime;
    private $etime;
    private $state;

    /**
     * @return mixed
     */
    public function getAppointmentId()
    {
        return $this->AppointmentId;
    }

    /**
     * @param mixed $AppointmentId
     */
    public function setAppointmentId($AppointmentId)
    {
        $this->AppointmentId = $AppointmentId;
    }

    /**
     * @return mixed
     */
    public function getBeauticianId()
    {
        return $this->BeauticianId;
    }

    /**
     * @param mixed $BeauticianId
     */
    public function setBeauticianId($BeauticianId)
    {
        $this->BeauticianId = $BeauticianId;
    }

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param mixed $ServiceId
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * @param mixed $etime
     */
    public function setEtime($etime)
    {
        $this->etime = $etime;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * @param mixed $stime
     */
    public function setStime($stime)
    {
        $this->stime = $stime;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param mixed $CustomerId
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
    }

}