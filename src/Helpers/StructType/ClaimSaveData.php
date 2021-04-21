<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimSaveData
 * @subpackage Structs
 */
class ClaimSaveData extends AbstractStructBase
{
    /**
     * The Resource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Resource = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for ClaimSaveData
     * @uses ClaimSaveData::setResource()
     * @uses ClaimSaveData::setType()
     * @param string $resource
     * @param string $type
     */
    public function __construct(?string $resource = null, ?string $type = null)
    {
        $this
            ->setResource($resource)
            ->setType($type);
    }
    /**
     * Get Resource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResource(): ?string
    {
        return isset($this->Resource) ? $this->Resource : null;
    }
    /**
     * Set Resource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $resource
     * @return \StructType\ClaimSaveData
     */
    public function setResource(?string $resource = null): self
    {
        // validation for constraint: string
        if (!is_null($resource) && !is_string($resource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resource, true), gettype($resource)), __LINE__);
        }
        if (is_null($resource) || (is_array($resource) && empty($resource))) {
            unset($this->Resource);
        } else {
            $this->Resource = $resource;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType(): ?string
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \StructType\ClaimSaveData
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        
        return $this;
    }
}
