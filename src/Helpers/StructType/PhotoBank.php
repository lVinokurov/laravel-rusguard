<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhotoBank StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoBank
 * @subpackage Structs
 */
class PhotoBank extends PhotoBankShort
{
    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Photo = null;
    /**
     * Constructor method for PhotoBank
     * @uses PhotoBank::setPhoto()
     * @param string $photo
     */
    public function __construct(?string $photo = null)
    {
        $this
            ->setPhoto($photo);
    }
    /**
     * Get Photo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return isset($this->Photo) ? $this->Photo : null;
    }
    /**
     * Set Photo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $photo
     * @return \StructType\PhotoBank
     */
    public function setPhoto(?string $photo = null): self
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photo, true), gettype($photo)), __LINE__);
        }
        if (is_null($photo) || (is_array($photo) && empty($photo))) {
            unset($this->Photo);
        } else {
            $this->Photo = $photo;
        }
        
        return $this;
    }
}
