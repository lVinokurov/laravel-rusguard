<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLicense StructType
 * @subpackage Structs
 */
class GetLicense extends AbstractStructBase
{
    /**
     * The moduleID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $moduleID = null;
    /**
     * The elementID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $elementID = null;
    /**
     * Constructor method for GetLicense
     * @uses GetLicense::setModuleID()
     * @uses GetLicense::setElementID()
     * @param string $moduleID
     * @param string $elementID
     */
    public function __construct(?string $moduleID = null, ?string $elementID = null)
    {
        $this
            ->setModuleID($moduleID)
            ->setElementID($elementID);
    }
    /**
     * Get moduleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleID(): ?string
    {
        return isset($this->moduleID) ? $this->moduleID : null;
    }
    /**
     * Set moduleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleID
     * @return \StructType\GetLicense
     */
    public function setModuleID(?string $moduleID = null): self
    {
        // validation for constraint: string
        if (!is_null($moduleID) && !is_string($moduleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleID, true), gettype($moduleID)), __LINE__);
        }
        if (is_null($moduleID) || (is_array($moduleID) && empty($moduleID))) {
            unset($this->moduleID);
        } else {
            $this->moduleID = $moduleID;
        }
        
        return $this;
    }
    /**
     * Get elementID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getElementID(): ?string
    {
        return isset($this->elementID) ? $this->elementID : null;
    }
    /**
     * Set elementID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $elementID
     * @return \StructType\GetLicense
     */
    public function setElementID(?string $elementID = null): self
    {
        // validation for constraint: string
        if (!is_null($elementID) && !is_string($elementID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elementID, true), gettype($elementID)), __LINE__);
        }
        if (is_null($elementID) || (is_array($elementID) && empty($elementID))) {
            unset($this->elementID);
        } else {
            $this->elementID = $elementID;
        }
        
        return $this;
    }
}
