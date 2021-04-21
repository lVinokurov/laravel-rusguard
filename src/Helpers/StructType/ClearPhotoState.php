<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearPhotoState StructType
 * @subpackage Structs
 */
class ClearPhotoState extends AbstractStructBase
{
    /**
     * The marker
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $marker = null;
    /**
     * The contextId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * Constructor method for ClearPhotoState
     * @uses ClearPhotoState::setMarker()
     * @uses ClearPhotoState::setContextId()
     * @param string $marker
     * @param string $contextId
     */
    public function __construct(?string $marker = null, ?string $contextId = null)
    {
        $this
            ->setMarker($marker)
            ->setContextId($contextId);
    }
    /**
     * Get marker value
     * @return string|null
     */
    public function getMarker(): ?string
    {
        return $this->marker;
    }
    /**
     * Set marker value
     * @uses \EnumType\RecognitionMarker::valueIsValid()
     * @uses \EnumType\RecognitionMarker::getValidValues()
     * @throws InvalidArgumentException
     * @param string $marker
     * @return \StructType\ClearPhotoState
     */
    public function setMarker(?string $marker = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\RecognitionMarker::valueIsValid($marker)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RecognitionMarker', is_array($marker) ? implode(', ', $marker) : var_export($marker, true), implode(', ', \EnumType\RecognitionMarker::getValidValues())), __LINE__);
        }
        $this->marker = $marker;
        
        return $this;
    }
    /**
     * Get contextId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContextId(): ?string
    {
        return isset($this->contextId) ? $this->contextId : null;
    }
    /**
     * Set contextId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contextId
     * @return \StructType\ClearPhotoState
     */
    public function setContextId(?string $contextId = null): self
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        if (is_null($contextId) || (is_array($contextId) && empty($contextId))) {
            unset($this->contextId);
        } else {
            $this->contextId = $contextId;
        }
        
        return $this;
    }
}
