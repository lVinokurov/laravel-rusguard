<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhotoOrder StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoOrder
 * @subpackage Structs
 */
class PhotoOrder extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The LeavePhotoMarkerLikeBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LeavePhotoMarkerLikeBase = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The OwnerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OwnerType = null;
    /**
     * The PhotoMarker
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $PhotoMarker = null;
    /**
     * The PhotoNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PhotoNumber = null;
    /**
     * Constructor method for PhotoOrder
     * @uses PhotoOrder::setID()
     * @uses PhotoOrder::setLeavePhotoMarkerLikeBase()
     * @uses PhotoOrder::setName()
     * @uses PhotoOrder::setOrder()
     * @uses PhotoOrder::setOwnerType()
     * @uses PhotoOrder::setPhotoMarker()
     * @uses PhotoOrder::setPhotoNumber()
     * @param string $iD
     * @param bool $leavePhotoMarkerLikeBase
     * @param string $name
     * @param int $order
     * @param string $ownerType
     * @param array|string $photoMarker
     * @param int $photoNumber
     */
    public function __construct(?string $iD = null, ?bool $leavePhotoMarkerLikeBase = null, ?string $name = null, ?int $order = null, ?string $ownerType = null, $photoMarker = [], ?int $photoNumber = null)
    {
        $this
            ->setID($iD)
            ->setLeavePhotoMarkerLikeBase($leavePhotoMarkerLikeBase)
            ->setName($name)
            ->setOrder($order)
            ->setOwnerType($ownerType)
            ->setPhotoMarker($photoMarker)
            ->setPhotoNumber($photoNumber);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\PhotoOrder
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get LeavePhotoMarkerLikeBase value
     * @return bool|null
     */
    public function getLeavePhotoMarkerLikeBase(): ?bool
    {
        return $this->LeavePhotoMarkerLikeBase;
    }
    /**
     * Set LeavePhotoMarkerLikeBase value
     * @param bool $leavePhotoMarkerLikeBase
     * @return \StructType\PhotoOrder
     */
    public function setLeavePhotoMarkerLikeBase(?bool $leavePhotoMarkerLikeBase = null): self
    {
        // validation for constraint: boolean
        if (!is_null($leavePhotoMarkerLikeBase) && !is_bool($leavePhotoMarkerLikeBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leavePhotoMarkerLikeBase, true), gettype($leavePhotoMarkerLikeBase)), __LINE__);
        }
        $this->LeavePhotoMarkerLikeBase = $leavePhotoMarkerLikeBase;
        
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
     * @return \StructType\PhotoOrder
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
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \StructType\PhotoOrder
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get OwnerType value
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->OwnerType;
    }
    /**
     * Set OwnerType value
     * @uses \EnumType\OwnerFieldType::valueIsValid()
     * @uses \EnumType\OwnerFieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ownerType
     * @return \StructType\PhotoOrder
     */
    public function setOwnerType(?string $ownerType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OwnerFieldType::valueIsValid($ownerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OwnerFieldType', is_array($ownerType) ? implode(', ', $ownerType) : var_export($ownerType, true), implode(', ', \EnumType\OwnerFieldType::getValidValues())), __LINE__);
        }
        $this->OwnerType = $ownerType;
        
        return $this;
    }
    /**
     * Get PhotoMarker value
     * @return string
     */
    public function getPhotoMarker(): ?string
    {
        return $this->PhotoMarker;
    }
    /**
     * This method is responsible for validating the values passed to the setPhotoMarker method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhotoMarker method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhotoMarkerForArrayConstraintsFromSetPhotoMarker(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $photoOrderPhotoMarkerItem) {
            // validation for constraint: enumeration
            if (!\EnumType\PhotoMarker::valueIsValid($photoOrderPhotoMarkerItem)) {
                $invalidValues[] = is_object($photoOrderPhotoMarkerItem) ? get_class($photoOrderPhotoMarkerItem) : sprintf('%s(%s)', gettype($photoOrderPhotoMarkerItem), var_export($photoOrderPhotoMarkerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PhotoMarker', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\PhotoMarker::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhotoMarker value
     * @uses \EnumType\PhotoMarker::valueIsValid()
     * @uses \EnumType\PhotoMarker::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $photoMarker
     * @return \StructType\PhotoOrder
     */
    public function setPhotoMarker($photoMarker = []): self
    {
        // validation for constraint: list
        if ('' !== ($photoMarkerArrayErrorMessage = self::validatePhotoMarkerForArrayConstraintsFromSetPhotoMarker(is_string($photoMarker) ? explode(' ', $photoMarker) : $photoMarker))) {
            throw new InvalidArgumentException($photoMarkerArrayErrorMessage, __LINE__);
        }
        $this->PhotoMarker = is_array($photoMarker) ? implode(' ', $photoMarker) : $photoMarker;
        
        return $this;
    }
    /**
     * Get PhotoNumber value
     * @return int|null
     */
    public function getPhotoNumber(): ?int
    {
        return $this->PhotoNumber;
    }
    /**
     * Set PhotoNumber value
     * @param int $photoNumber
     * @return \StructType\PhotoOrder
     */
    public function setPhotoNumber(?int $photoNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($photoNumber) && !(is_int($photoNumber) || ctype_digit($photoNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($photoNumber, true), gettype($photoNumber)), __LINE__);
        }
        $this->PhotoNumber = $photoNumber;
        
        return $this;
    }
}
