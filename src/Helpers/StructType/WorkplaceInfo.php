<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkplaceInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkplaceInfo
 * @subpackage Structs
 */
class WorkplaceInfo extends WorkplaceSaveData
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsBuiltIn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsBuiltIn = null;
    /**
     * The Modules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkplaceModuleInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkplaceModuleInfo $Modules = null;
    /**
     * Constructor method for WorkplaceInfo
     * @uses WorkplaceInfo::setId()
     * @uses WorkplaceInfo::setIsBuiltIn()
     * @uses WorkplaceInfo::setModules()
     * @param string $id
     * @param bool $isBuiltIn
     * @param \ArrayType\ArrayOfWorkplaceModuleInfo $modules
     */
    public function __construct(?string $id = null, ?bool $isBuiltIn = null, ?\ArrayType\ArrayOfWorkplaceModuleInfo $modules = null)
    {
        $this
            ->setId($id)
            ->setIsBuiltIn($isBuiltIn)
            ->setModules($modules);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\WorkplaceInfo
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
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsBuiltIn value
     * @return bool|null
     */
    public function getIsBuiltIn(): ?bool
    {
        return $this->IsBuiltIn;
    }
    /**
     * Set IsBuiltIn value
     * @param bool $isBuiltIn
     * @return \StructType\WorkplaceInfo
     */
    public function setIsBuiltIn(?bool $isBuiltIn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBuiltIn) && !is_bool($isBuiltIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBuiltIn, true), gettype($isBuiltIn)), __LINE__);
        }
        $this->IsBuiltIn = $isBuiltIn;
        
        return $this;
    }
    /**
     * Get Modules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkplaceModuleInfo|null
     */
    public function getModules(): ?\ArrayType\ArrayOfWorkplaceModuleInfo
    {
        return isset($this->Modules) ? $this->Modules : null;
    }
    /**
     * Set Modules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkplaceModuleInfo $modules
     * @return \StructType\WorkplaceInfo
     */
    public function setModules(?\ArrayType\ArrayOfWorkplaceModuleInfo $modules = null): self
    {
        if (is_null($modules) || (is_array($modules) && empty($modules))) {
            unset($this->Modules);
        } else {
            $this->Modules = $modules;
        }
        
        return $this;
    }
}
