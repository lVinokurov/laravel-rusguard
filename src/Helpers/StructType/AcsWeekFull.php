<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsWeekFull StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsWeekFull
 * @subpackage Structs
 */
class AcsWeekFull extends AbstractStructBase
{
    /**
     * The Friday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Friday = null;
    /**
     * The Monday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Monday = null;
    /**
     * The Saturday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Saturday = null;
    /**
     * The Sunday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Sunday = null;
    /**
     * The Thursday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Thursday = null;
    /**
     * The Tuesday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Tuesday = null;
    /**
     * The Wednesday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule|null
     */
    protected ?\StructType\AcsDaySchedule $Wednesday = null;
    /**
     * Constructor method for AcsWeekFull
     * @uses AcsWeekFull::setFriday()
     * @uses AcsWeekFull::setMonday()
     * @uses AcsWeekFull::setSaturday()
     * @uses AcsWeekFull::setSunday()
     * @uses AcsWeekFull::setThursday()
     * @uses AcsWeekFull::setTuesday()
     * @uses AcsWeekFull::setWednesday()
     * @param \StructType\AcsDaySchedule $friday
     * @param \StructType\AcsDaySchedule $monday
     * @param \StructType\AcsDaySchedule $saturday
     * @param \StructType\AcsDaySchedule $sunday
     * @param \StructType\AcsDaySchedule $thursday
     * @param \StructType\AcsDaySchedule $tuesday
     * @param \StructType\AcsDaySchedule $wednesday
     */
    public function __construct(?\StructType\AcsDaySchedule $friday = null, ?\StructType\AcsDaySchedule $monday = null, ?\StructType\AcsDaySchedule $saturday = null, ?\StructType\AcsDaySchedule $sunday = null, ?\StructType\AcsDaySchedule $thursday = null, ?\StructType\AcsDaySchedule $tuesday = null, ?\StructType\AcsDaySchedule $wednesday = null)
    {
        $this
            ->setFriday($friday)
            ->setMonday($monday)
            ->setSaturday($saturday)
            ->setSunday($sunday)
            ->setThursday($thursday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday);
    }
    /**
     * Get Friday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getFriday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Friday) ? $this->Friday : null;
    }
    /**
     * Set Friday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $friday
     * @return \StructType\AcsWeekFull
     */
    public function setFriday(?\StructType\AcsDaySchedule $friday = null): self
    {
        if (is_null($friday) || (is_array($friday) && empty($friday))) {
            unset($this->Friday);
        } else {
            $this->Friday = $friday;
        }
        
        return $this;
    }
    /**
     * Get Monday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getMonday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Monday) ? $this->Monday : null;
    }
    /**
     * Set Monday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $monday
     * @return \StructType\AcsWeekFull
     */
    public function setMonday(?\StructType\AcsDaySchedule $monday = null): self
    {
        if (is_null($monday) || (is_array($monday) && empty($monday))) {
            unset($this->Monday);
        } else {
            $this->Monday = $monday;
        }
        
        return $this;
    }
    /**
     * Get Saturday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getSaturday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Saturday) ? $this->Saturday : null;
    }
    /**
     * Set Saturday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $saturday
     * @return \StructType\AcsWeekFull
     */
    public function setSaturday(?\StructType\AcsDaySchedule $saturday = null): self
    {
        if (is_null($saturday) || (is_array($saturday) && empty($saturday))) {
            unset($this->Saturday);
        } else {
            $this->Saturday = $saturday;
        }
        
        return $this;
    }
    /**
     * Get Sunday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getSunday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Sunday) ? $this->Sunday : null;
    }
    /**
     * Set Sunday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $sunday
     * @return \StructType\AcsWeekFull
     */
    public function setSunday(?\StructType\AcsDaySchedule $sunday = null): self
    {
        if (is_null($sunday) || (is_array($sunday) && empty($sunday))) {
            unset($this->Sunday);
        } else {
            $this->Sunday = $sunday;
        }
        
        return $this;
    }
    /**
     * Get Thursday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getThursday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Thursday) ? $this->Thursday : null;
    }
    /**
     * Set Thursday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $thursday
     * @return \StructType\AcsWeekFull
     */
    public function setThursday(?\StructType\AcsDaySchedule $thursday = null): self
    {
        if (is_null($thursday) || (is_array($thursday) && empty($thursday))) {
            unset($this->Thursday);
        } else {
            $this->Thursday = $thursday;
        }
        
        return $this;
    }
    /**
     * Get Tuesday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getTuesday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Tuesday) ? $this->Tuesday : null;
    }
    /**
     * Set Tuesday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $tuesday
     * @return \StructType\AcsWeekFull
     */
    public function setTuesday(?\StructType\AcsDaySchedule $tuesday = null): self
    {
        if (is_null($tuesday) || (is_array($tuesday) && empty($tuesday))) {
            unset($this->Tuesday);
        } else {
            $this->Tuesday = $tuesday;
        }
        
        return $this;
    }
    /**
     * Get Wednesday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule|null
     */
    public function getWednesday(): ?\StructType\AcsDaySchedule
    {
        return isset($this->Wednesday) ? $this->Wednesday : null;
    }
    /**
     * Set Wednesday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsDaySchedule $wednesday
     * @return \StructType\AcsWeekFull
     */
    public function setWednesday(?\StructType\AcsDaySchedule $wednesday = null): self
    {
        if (is_null($wednesday) || (is_array($wednesday) && empty($wednesday))) {
            unset($this->Wednesday);
        } else {
            $this->Wednesday = $wednesday;
        }
        
        return $this;
    }
}
