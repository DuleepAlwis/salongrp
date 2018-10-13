<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 11:24 PM
 */

class ServicePayment extends Payment
{
    private $AppointmentId;
    private $beauticianId;
    private $commission;

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
        return $this->beauticianId;
    }

    /**
     * @param mixed $beauticianId
     */
    public function setBeauticianId($beauticianId)
    {
        $this->beauticianId = $beauticianId;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param mixed $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return mixed
     */

}