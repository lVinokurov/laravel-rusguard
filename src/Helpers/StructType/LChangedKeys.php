<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LChangedKeys StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LChangedKeys
 * @subpackage Structs
 */
class LChangedKeys extends AbstractStructBase
{
    /**
     * The AllRowsNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AllRowsNumber = null;
    /**
     * The Keys
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfLKeyInfo $Keys = null;
    /**
     * Constructor method for LChangedKeys
     * @uses LChangedKeys::setAllRowsNumber()
     * @uses LChangedKeys::setKeys()
     * @param int $allRowsNumber
     * @param \ArrayType\ArrayOfLKeyInfo $keys
     */
    public function __construct(?int $allRowsNumber = null, ?\ArrayType\ArrayOfLKeyInfo $keys = null)
    {
        $this
            ->setAllRowsNumber($allRowsNumber)
            ->setKeys($keys);
    }
    /**
     * Get AllRowsNumber value
     * @return int|null
     */
    public function getAllRowsNumber(): ?int
    {
        return $this->AllRowsNumber;
    }
    /**
     * Set AllRowsNumber value
     * @param int $allRowsNumber
     * @return \StructType\LChangedKeys
     */
    public function setAllRowsNumber(?int $allRowsNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($allRowsNumber) && !(is_int($allRowsNumber) || ctype_digit($allRowsNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($allRowsNumber, true), gettype($allRowsNumber)), __LINE__);
        }
        $this->AllRowsNumber = $allRowsNumber;
        
        return $this;
    }
    /**
     * Get Keys value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLKeyInfo|null
     */
    public function getKeys(): ?\ArrayType\ArrayOfLKeyInfo
    {
        return isset($this->Keys) ? $this->Keys : null;
    }
    /**
     * Set Keys value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLKeyInfo $keys
     * @return \StructType\LChangedKeys
     */
    public function setKeys(?\ArrayType\ArrayOfLKeyInfo $keys = null): self
    {
        if (is_null($keys) || (is_array($keys) && empty($keys))) {
            unset($this->Keys);
        } else {
            $this->Keys = $keys;
        }
        
        return $this;
    }
}
