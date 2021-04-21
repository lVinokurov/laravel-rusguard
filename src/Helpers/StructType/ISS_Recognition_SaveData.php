<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Recognition_SaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Recognition_SaveData
 * @subpackage Structs
 */
class ISS_Recognition_SaveData extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Port
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Port = null;
    /**
     * The ResolvedUnrecognizedSymbols
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ResolvedUnrecognizedSymbols = null;
    /**
     * The Similarity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Similarity = null;
    /**
     * Constructor method for ISS_Recognition_SaveData
     * @uses ISS_Recognition_SaveData::setAddress()
     * @uses ISS_Recognition_SaveData::setName()
     * @uses ISS_Recognition_SaveData::setPort()
     * @uses ISS_Recognition_SaveData::setResolvedUnrecognizedSymbols()
     * @uses ISS_Recognition_SaveData::setSimilarity()
     * @param string $address
     * @param string $name
     * @param int $port
     * @param int $resolvedUnrecognizedSymbols
     * @param int $similarity
     */
    public function __construct(?string $address = null, ?string $name = null, ?int $port = null, ?int $resolvedUnrecognizedSymbols = null, ?int $similarity = null)
    {
        $this
            ->setAddress($address)
            ->setName($name)
            ->setPort($port)
            ->setResolvedUnrecognizedSymbols($resolvedUnrecognizedSymbols)
            ->setSimilarity($similarity);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \StructType\ISS_Recognition_SaveData
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
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
     * @return \StructType\ISS_Recognition_SaveData
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
    /**
     * Get Port value
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->Port;
    }
    /**
     * Set Port value
     * @param int $port
     * @return \StructType\ISS_Recognition_SaveData
     */
    public function setPort(?int $port = null): self
    {
        // validation for constraint: int
        if (!is_null($port) && !(is_int($port) || ctype_digit($port))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->Port = $port;
        
        return $this;
    }
    /**
     * Get ResolvedUnrecognizedSymbols value
     * @return int|null
     */
    public function getResolvedUnrecognizedSymbols(): ?int
    {
        return $this->ResolvedUnrecognizedSymbols;
    }
    /**
     * Set ResolvedUnrecognizedSymbols value
     * @param int $resolvedUnrecognizedSymbols
     * @return \StructType\ISS_Recognition_SaveData
     */
    public function setResolvedUnrecognizedSymbols(?int $resolvedUnrecognizedSymbols = null): self
    {
        // validation for constraint: int
        if (!is_null($resolvedUnrecognizedSymbols) && !(is_int($resolvedUnrecognizedSymbols) || ctype_digit($resolvedUnrecognizedSymbols))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resolvedUnrecognizedSymbols, true), gettype($resolvedUnrecognizedSymbols)), __LINE__);
        }
        $this->ResolvedUnrecognizedSymbols = $resolvedUnrecognizedSymbols;
        
        return $this;
    }
    /**
     * Get Similarity value
     * @return int|null
     */
    public function getSimilarity(): ?int
    {
        return $this->Similarity;
    }
    /**
     * Set Similarity value
     * @param int $similarity
     * @return \StructType\ISS_Recognition_SaveData
     */
    public function setSimilarity(?int $similarity = null): self
    {
        // validation for constraint: int
        if (!is_null($similarity) && !(is_int($similarity) || ctype_digit($similarity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($similarity, true), gettype($similarity)), __LINE__);
        }
        $this->Similarity = $similarity;
        
        return $this;
    }
}
