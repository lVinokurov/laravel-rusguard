<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMapImage StructType
 * @subpackage Structs
 */
class SetMapImage extends AbstractStructBase
{
    /**
     * The mapId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $mapId = null;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $image = null;
    /**
     * Constructor method for SetMapImage
     * @uses SetMapImage::setMapId()
     * @uses SetMapImage::setImage()
     * @param string $mapId
     * @param string $image
     */
    public function __construct(?string $mapId = null, ?string $image = null)
    {
        $this
            ->setMapId($mapId)
            ->setImage($image);
    }
    /**
     * Get mapId value
     * @return string|null
     */
    public function getMapId(): ?string
    {
        return $this->mapId;
    }
    /**
     * Set mapId value
     * @param string $mapId
     * @return \StructType\SetMapImage
     */
    public function setMapId(?string $mapId = null): self
    {
        // validation for constraint: string
        if (!is_null($mapId) && !is_string($mapId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mapId, true), gettype($mapId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($mapId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $mapId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($mapId, true)), __LINE__);
        }
        $this->mapId = $mapId;
        
        return $this;
    }
    /**
     * Get image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImage(): ?string
    {
        return isset($this->image) ? $this->image : null;
    }
    /**
     * Set image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $image
     * @return \StructType\SetMapImage
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->image);
        } else {
            $this->image = $image;
        }
        
        return $this;
    }
}
