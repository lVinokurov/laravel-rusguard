<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Violator StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Violator
 * @subpackage Structs
 */
class Violator extends Absent
{
    /**
     * The IsSystematic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSystematic = null;
    /**
     * The MessageError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MessageError = null;
    /**
     * Constructor method for Violator
     * @uses Violator::setIsSystematic()
     * @uses Violator::setMessageError()
     * @param bool $isSystematic
     * @param string $messageError
     */
    public function __construct(?bool $isSystematic = null, ?string $messageError = null)
    {
        $this
            ->setIsSystematic($isSystematic)
            ->setMessageError($messageError);
    }
    /**
     * Get IsSystematic value
     * @return bool|null
     */
    public function getIsSystematic(): ?bool
    {
        return $this->IsSystematic;
    }
    /**
     * Set IsSystematic value
     * @param bool $isSystematic
     * @return \StructType\Violator
     */
    public function setIsSystematic(?bool $isSystematic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSystematic) && !is_bool($isSystematic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSystematic, true), gettype($isSystematic)), __LINE__);
        }
        $this->IsSystematic = $isSystematic;
        
        return $this;
    }
    /**
     * Get MessageError value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessageError(): ?string
    {
        return isset($this->MessageError) ? $this->MessageError : null;
    }
    /**
     * Set MessageError value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messageError
     * @return \StructType\Violator
     */
    public function setMessageError(?string $messageError = null): self
    {
        // validation for constraint: string
        if (!is_null($messageError) && !is_string($messageError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageError, true), gettype($messageError)), __LINE__);
        }
        if (is_null($messageError) || (is_array($messageError) && empty($messageError))) {
            unset($this->MessageError);
        } else {
            $this->MessageError = $messageError;
        }
        
        return $this;
    }
}
