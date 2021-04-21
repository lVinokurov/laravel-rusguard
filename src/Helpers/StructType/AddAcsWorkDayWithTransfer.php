<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsWorkDayWithTransfer StructType
 * @subpackage Structs
 */
class AddAcsWorkDayWithTransfer extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The transferedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transferedDate = null;
    /**
     * Constructor method for AddAcsWorkDayWithTransfer
     * @uses AddAcsWorkDayWithTransfer::setName()
     * @uses AddAcsWorkDayWithTransfer::setDate()
     * @uses AddAcsWorkDayWithTransfer::setTransferedDate()
     * @param string $name
     * @param string $date
     * @param string $transferedDate
     */
    public function __construct(?string $name = null, ?string $date = null, ?string $transferedDate = null)
    {
        $this
            ->setName($name)
            ->setDate($date)
            ->setTransferedDate($transferedDate);
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AddAcsWorkDayWithTransfer
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\AddAcsWorkDayWithTransfer
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get transferedDate value
     * @return string|null
     */
    public function getTransferedDate(): ?string
    {
        return $this->transferedDate;
    }
    /**
     * Set transferedDate value
     * @param string $transferedDate
     * @return \StructType\AddAcsWorkDayWithTransfer
     */
    public function setTransferedDate(?string $transferedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transferedDate) && !is_string($transferedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferedDate, true), gettype($transferedDate)), __LINE__);
        }
        $this->transferedDate = $transferedDate;
        
        return $this;
    }
}
