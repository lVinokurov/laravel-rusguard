<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhotoOrders StructType
 * @subpackage Structs
 */
class GetPhotoOrders extends AbstractStructBase
{
    /**
     * The ownerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ownerType = null;
    /**
     * Constructor method for GetPhotoOrders
     * @uses GetPhotoOrders::setOwnerType()
     * @param string $ownerType
     */
    public function __construct(?string $ownerType = null)
    {
        $this
            ->setOwnerType($ownerType);
    }
    /**
     * Get ownerType value
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }
    /**
     * Set ownerType value
     * @uses \EnumType\OwnerFieldType::valueIsValid()
     * @uses \EnumType\OwnerFieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ownerType
     * @return \StructType\GetPhotoOrders
     */
    public function setOwnerType(?string $ownerType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OwnerFieldType::valueIsValid($ownerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OwnerFieldType', is_array($ownerType) ? implode(', ', $ownerType) : var_export($ownerType, true), implode(', ', \EnumType\OwnerFieldType::getValidValues())), __LINE__);
        }
        $this->ownerType = $ownerType;
        
        return $this;
    }
}
