<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsMultiDaySchedule StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsMultiDaySchedule
 * @subpackage Structs
 */
class AcsMultiDaySchedule extends AcsScheduleBase
{
    /**
     * The DayIntervals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfRGDayIntervals|null
     */
    protected ?\ArrayType\ArrayOfRGDayIntervals $DayIntervals = null;
    /**
     * Constructor method for AcsMultiDaySchedule
     * @uses AcsMultiDaySchedule::setDayIntervals()
     * @param \ArrayType\ArrayOfRGDayIntervals $dayIntervals
     */
    public function __construct(?\ArrayType\ArrayOfRGDayIntervals $dayIntervals = null)
    {
        $this
            ->setDayIntervals($dayIntervals);
    }
    /**
     * Get DayIntervals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfRGDayIntervals|null
     */
    public function getDayIntervals(): ?\ArrayType\ArrayOfRGDayIntervals
    {
        return isset($this->DayIntervals) ? $this->DayIntervals : null;
    }
    /**
     * Set DayIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfRGDayIntervals $dayIntervals
     * @return \StructType\AcsMultiDaySchedule
     */
    public function setDayIntervals(?\ArrayType\ArrayOfRGDayIntervals $dayIntervals = null): self
    {
        if (is_null($dayIntervals) || (is_array($dayIntervals) && empty($dayIntervals))) {
            unset($this->DayIntervals);
        } else {
            $this->DayIntervals = $dayIntervals;
        }
        
        return $this;
    }
}
