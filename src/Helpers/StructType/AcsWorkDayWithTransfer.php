<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsWorkDayWithTransfer StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsWorkDayWithTransfer
 * @subpackage Structs
 */
class AcsWorkDayWithTransfer extends AcsCustomizableDayBase
{
    /**
     * The TransferedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransferedDate = null;
    /**
     * Constructor method for AcsWorkDayWithTransfer
     * @uses AcsWorkDayWithTransfer::setTransferedDate()
     * @param string $transferedDate
     */
    public function __construct(?string $transferedDate = null)
    {
        $this
            ->setTransferedDate($transferedDate);
    }
    /**
     * Get TransferedDate value
     * @return string|null
     */
    public function getTransferedDate(): ?string
    {
        return $this->TransferedDate;
    }
    /**
     * Set TransferedDate value
     * @param string $transferedDate
     * @return \StructType\AcsWorkDayWithTransfer
     */
    public function setTransferedDate(?string $transferedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transferedDate) && !is_string($transferedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferedDate, true), gettype($transferedDate)), __LINE__);
        }
        $this->TransferedDate = $transferedDate;
        
        return $this;
    }
}
