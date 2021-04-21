<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWorkTimtable StructType
 * @subpackage Structs
 */
class SaveWorkTimtable extends AbstractStructBase
{
    /**
     * The workScheduleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workScheduleID = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkTimetableSlimInfo $data = null;
    /**
     * Constructor method for SaveWorkTimtable
     * @uses SaveWorkTimtable::setWorkScheduleID()
     * @uses SaveWorkTimtable::setData()
     * @param string $workScheduleID
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $data
     */
    public function __construct(?string $workScheduleID = null, ?\ArrayType\ArrayOfWorkTimetableSlimInfo $data = null)
    {
        $this
            ->setWorkScheduleID($workScheduleID)
            ->setData($data);
    }
    /**
     * Get workScheduleID value
     * @return string|null
     */
    public function getWorkScheduleID(): ?string
    {
        return $this->workScheduleID;
    }
    /**
     * Set workScheduleID value
     * @param string $workScheduleID
     * @return \StructType\SaveWorkTimtable
     */
    public function setWorkScheduleID(?string $workScheduleID = null): self
    {
        // validation for constraint: string
        if (!is_null($workScheduleID) && !is_string($workScheduleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workScheduleID, true), gettype($workScheduleID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workScheduleID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workScheduleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workScheduleID, true)), __LINE__);
        }
        $this->workScheduleID = $workScheduleID;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkTimetableSlimInfo|null
     */
    public function getData(): ?\ArrayType\ArrayOfWorkTimetableSlimInfo
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $data
     * @return \StructType\SaveWorkTimtable
     */
    public function setData(?\ArrayType\ArrayOfWorkTimetableSlimInfo $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
