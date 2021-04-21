<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveAcsBoxAccessLevel StructType
 * @subpackage Structs
 */
class RemoveAcsBoxAccessLevel extends AbstractStructBase
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
     * The accessElementIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $accessElementIds = null;
    /**
     * Constructor method for RemoveAcsBoxAccessLevel
     * @uses RemoveAcsBoxAccessLevel::setId()
     * @uses RemoveAcsBoxAccessLevel::setAccessElementIds()
     * @param string $id
     * @param \ArrayType\ArrayOfguid $accessElementIds
     */
    public function __construct(?string $id = null, ?\ArrayType\ArrayOfguid $accessElementIds = null)
    {
        $this
            ->setId($id)
            ->setAccessElementIds($accessElementIds);
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
     * @return \StructType\RemoveAcsBoxAccessLevel
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
     * Get accessElementIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAccessElementIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->accessElementIds) ? $this->accessElementIds : null;
    }
    /**
     * Set accessElementIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $accessElementIds
     * @return \StructType\RemoveAcsBoxAccessLevel
     */
    public function setAccessElementIds(?\ArrayType\ArrayOfguid $accessElementIds = null): self
    {
        if (is_null($accessElementIds) || (is_array($accessElementIds) && empty($accessElementIds))) {
            unset($this->accessElementIds);
        } else {
            $this->accessElementIds = $accessElementIds;
        }
        
        return $this;
    }
}
