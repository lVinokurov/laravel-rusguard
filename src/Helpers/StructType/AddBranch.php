<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBranch StructType
 * @subpackage Structs
 */
class AddBranch extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for AddBranch
     * @uses AddBranch::setName()
     * @uses AddBranch::setDescription()
     * @param string $name
     * @param string $description
     */
    public function __construct(?string $name = null, ?string $description = null)
    {
        $this
            ->setName($name)
            ->setDescription($description);
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AddBranch
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\AddBranch
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
}
