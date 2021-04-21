<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkplaceModuleSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkplaceModuleSaveData
 * @subpackage Structs
 */
class WorkplaceModuleSaveData extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The IsMobile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMobile = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for WorkplaceModuleSaveData
     * @uses WorkplaceModuleSaveData::setComment()
     * @uses WorkplaceModuleSaveData::setIsMobile()
     * @uses WorkplaceModuleSaveData::setName()
     * @param string $comment
     * @param bool $isMobile
     * @param string $name
     */
    public function __construct(?string $comment = null, ?bool $isMobile = null, ?string $name = null)
    {
        $this
            ->setComment($comment)
            ->setIsMobile($isMobile)
            ->setName($name);
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\WorkplaceModuleSaveData
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get IsMobile value
     * @return bool|null
     */
    public function getIsMobile(): ?bool
    {
        return $this->IsMobile;
    }
    /**
     * Set IsMobile value
     * @param bool $isMobile
     * @return \StructType\WorkplaceModuleSaveData
     */
    public function setIsMobile(?bool $isMobile = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMobile) && !is_bool($isMobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMobile, true), gettype($isMobile)), __LINE__);
        }
        $this->IsMobile = $isMobile;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\WorkplaceModuleSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
