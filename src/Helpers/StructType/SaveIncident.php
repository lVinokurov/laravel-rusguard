<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIncident StructType
 * @subpackage Structs
 */
class SaveIncident extends AbstractStructBase
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
     * The info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentSaveInfo|null
     */
    protected ?\StructType\IncidentSaveInfo $info = null;
    /**
     * Constructor method for SaveIncident
     * @uses SaveIncident::setId()
     * @uses SaveIncident::setInfo()
     * @param string $id
     * @param \StructType\IncidentSaveInfo $info
     */
    public function __construct(?string $id = null, ?\StructType\IncidentSaveInfo $info = null)
    {
        $this
            ->setId($id)
            ->setInfo($info);
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
     * @return \StructType\SaveIncident
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
     * Get info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentSaveInfo|null
     */
    public function getInfo(): ?\StructType\IncidentSaveInfo
    {
        return isset($this->info) ? $this->info : null;
    }
    /**
     * Set info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentSaveInfo $info
     * @return \StructType\SaveIncident
     */
    public function setInfo(?\StructType\IncidentSaveInfo $info = null): self
    {
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->info);
        } else {
            $this->info = $info;
        }
        
        return $this;
    }
}
