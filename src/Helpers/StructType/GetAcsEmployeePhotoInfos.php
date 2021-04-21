<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhotoInfos StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhotoInfos extends AbstractStructBase
{
    /**
     * The includeRemovedEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemovedEmployees = null;
    /**
     * Constructor method for GetAcsEmployeePhotoInfos
     * @uses GetAcsEmployeePhotoInfos::setIncludeRemovedEmployees()
     * @param bool $includeRemovedEmployees
     */
    public function __construct(?bool $includeRemovedEmployees = null)
    {
        $this
            ->setIncludeRemovedEmployees($includeRemovedEmployees);
    }
    /**
     * Get includeRemovedEmployees value
     * @return bool|null
     */
    public function getIncludeRemovedEmployees(): ?bool
    {
        return $this->includeRemovedEmployees;
    }
    /**
     * Set includeRemovedEmployees value
     * @param bool $includeRemovedEmployees
     * @return \StructType\GetAcsEmployeePhotoInfos
     */
    public function setIncludeRemovedEmployees(?bool $includeRemovedEmployees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeRemovedEmployees) && !is_bool($includeRemovedEmployees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRemovedEmployees, true), gettype($includeRemovedEmployees)), __LINE__);
        }
        $this->includeRemovedEmployees = $includeRemovedEmployees;
        
        return $this;
    }
}
