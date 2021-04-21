<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RGDayIntervals StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RGDayIntervals
 * @subpackage Structs
 */
class RGDayIntervals extends AbstractStructBase
{
    /**
     * The TimeIntervals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfRGTimeInterval|null
     */
    protected ?\ArrayType\ArrayOfRGTimeInterval $TimeIntervals = null;
    /**
     * Constructor method for RGDayIntervals
     * @uses RGDayIntervals::setTimeIntervals()
     * @param \ArrayType\ArrayOfRGTimeInterval $timeIntervals
     */
    public function __construct(?\ArrayType\ArrayOfRGTimeInterval $timeIntervals = null)
    {
        $this
            ->setTimeIntervals($timeIntervals);
    }
    /**
     * Get TimeIntervals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfRGTimeInterval|null
     */
    public function getTimeIntervals(): ?\ArrayType\ArrayOfRGTimeInterval
    {
        return isset($this->TimeIntervals) ? $this->TimeIntervals : null;
    }
    /**
     * Set TimeIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfRGTimeInterval $timeIntervals
     * @return \StructType\RGDayIntervals
     */
    public function setTimeIntervals(?\ArrayType\ArrayOfRGTimeInterval $timeIntervals = null): self
    {
        if (is_null($timeIntervals) || (is_array($timeIntervals) && empty($timeIntervals))) {
            unset($this->TimeIntervals);
        } else {
            $this->TimeIntervals = $timeIntervals;
        }
        
        return $this;
    }
}
