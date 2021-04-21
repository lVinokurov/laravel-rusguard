<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateWorkTimeTable StructType
 * @subpackage Structs
 */
class UpdateWorkTimeTable extends AbstractStructBase
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
     * The beginDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $beginDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for UpdateWorkTimeTable
     * @uses UpdateWorkTimeTable::setWorkScheduleID()
     * @uses UpdateWorkTimeTable::setData()
     * @uses UpdateWorkTimeTable::setBeginDate()
     * @uses UpdateWorkTimeTable::setEndDate()
     * @param string $workScheduleID
     * @param \ArrayType\ArrayOfWorkTimetableSlimInfo $data
     * @param string $beginDate
     * @param string $endDate
     */
    public function __construct(?string $workScheduleID = null, ?\ArrayType\ArrayOfWorkTimetableSlimInfo $data = null, ?string $beginDate = null, ?string $endDate = null)
    {
        $this
            ->setWorkScheduleID($workScheduleID)
            ->setData($data)
            ->setBeginDate($beginDate)
            ->setEndDate($endDate);
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
     * @return \StructType\UpdateWorkTimeTable
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
     * @return \StructType\UpdateWorkTimeTable
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
    /**
     * Get beginDate value
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return $this->beginDate;
    }
    /**
     * Set beginDate value
     * @param string $beginDate
     * @return \StructType\UpdateWorkTimeTable
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->beginDate = $beginDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\UpdateWorkTimeTable
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
