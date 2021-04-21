<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsWeekScheduleFull StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsWeekScheduleFull
 * @subpackage Structs
 */
class AcsWeekScheduleFull extends AcsScheduleBase
{
    /**
     * The Weeks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsWeekFull|null
     */
    protected ?\ArrayType\ArrayOfAcsWeekFull $Weeks = null;
    /**
     * Constructor method for AcsWeekScheduleFull
     * @uses AcsWeekScheduleFull::setWeeks()
     * @param \ArrayType\ArrayOfAcsWeekFull $weeks
     */
    public function __construct(?\ArrayType\ArrayOfAcsWeekFull $weeks = null)
    {
        $this
            ->setWeeks($weeks);
    }
    /**
     * Get Weeks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsWeekFull|null
     */
    public function getWeeks(): ?\ArrayType\ArrayOfAcsWeekFull
    {
        return isset($this->Weeks) ? $this->Weeks : null;
    }
    /**
     * Set Weeks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsWeekFull $weeks
     * @return \StructType\AcsWeekScheduleFull
     */
    public function setWeeks(?\ArrayType\ArrayOfAcsWeekFull $weeks = null): self
    {
        if (is_null($weeks) || (is_array($weeks) && empty($weeks))) {
            unset($this->Weeks);
        } else {
            $this->Weeks = $weeks;
        }
        
        return $this;
    }
}
