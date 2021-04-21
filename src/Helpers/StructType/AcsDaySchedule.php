<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsDaySchedule StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsDaySchedule
 * @subpackage Structs
 */
class AcsDaySchedule extends AcsScheduleBase
{
    /**
     * The DayIntervals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RGDayIntervals|null
     */
    protected ?\StructType\RGDayIntervals $DayIntervals = null;
    /**
     * Constructor method for AcsDaySchedule
     * @uses AcsDaySchedule::setDayIntervals()
     * @param \StructType\RGDayIntervals $dayIntervals
     */
    public function __construct(?\StructType\RGDayIntervals $dayIntervals = null)
    {
        $this
            ->setDayIntervals($dayIntervals);
    }
    /**
     * Get DayIntervals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RGDayIntervals|null
     */
    public function getDayIntervals(): ?\StructType\RGDayIntervals
    {
        return isset($this->DayIntervals) ? $this->DayIntervals : null;
    }
    /**
     * Set DayIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\RGDayIntervals $dayIntervals
     * @return \StructType\AcsDaySchedule
     */
    public function setDayIntervals(?\StructType\RGDayIntervals $dayIntervals = null): self
    {
        if (is_null($dayIntervals) || (is_array($dayIntervals) && empty($dayIntervals))) {
            unset($this->DayIntervals);
        } else {
            $this->DayIntervals = $dayIntervals;
        }
        
        return $this;
    }
}
