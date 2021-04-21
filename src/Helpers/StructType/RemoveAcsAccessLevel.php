<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveAcsAccessLevel StructType
 * @subpackage Structs
 */
class RemoveAcsAccessLevel extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The accessPointIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $accessPointIds = null;
    /**
     * Constructor method for RemoveAcsAccessLevel
     * @uses RemoveAcsAccessLevel::setId()
     * @uses RemoveAcsAccessLevel::setAccessPointIds()
     * @param string $id
     * @param \ArrayType\ArrayOfguid $accessPointIds
     */
    public function __construct(?string $id = null, ?\ArrayType\ArrayOfguid $accessPointIds = null)
    {
        $this
            ->setId($id)
            ->setAccessPointIds($accessPointIds);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\RemoveAcsAccessLevel
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get accessPointIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAccessPointIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->accessPointIds) ? $this->accessPointIds : null;
    }
    /**
     * Set accessPointIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $accessPointIds
     * @return \StructType\RemoveAcsAccessLevel
     */
    public function setAccessPointIds(?\ArrayType\ArrayOfguid $accessPointIds = null): self
    {
        if (is_null($accessPointIds) || (is_array($accessPointIds) && empty($accessPointIds))) {
            unset($this->accessPointIds);
        } else {
            $this->accessPointIds = $accessPointIds;
        }
        
        return $this;
    }
}
