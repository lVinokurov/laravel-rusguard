<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPositionCodesToAlcoGroup StructType
 * @subpackage Structs
 */
class SetPositionCodesToAlcoGroup extends AbstractStructBase
{
    /**
     * The alcoGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $alcoGroupId = null;
    /**
     * The codes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring|null
     */
    protected ?\ArrayType\ArrayOfstring $codes = null;
    /**
     * Constructor method for SetPositionCodesToAlcoGroup
     * @uses SetPositionCodesToAlcoGroup::setAlcoGroupId()
     * @uses SetPositionCodesToAlcoGroup::setCodes()
     * @param string $alcoGroupId
     * @param \ArrayType\ArrayOfstring $codes
     */
    public function __construct(?string $alcoGroupId = null, ?\ArrayType\ArrayOfstring $codes = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setCodes($codes);
    }
    /**
     * Get alcoGroupId value
     * @return string|null
     */
    public function getAlcoGroupId(): ?string
    {
        return $this->alcoGroupId;
    }
    /**
     * Set alcoGroupId value
     * @param string $alcoGroupId
     * @return \StructType\SetPositionCodesToAlcoGroup
     */
    public function setAlcoGroupId(?string $alcoGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($alcoGroupId) && !is_string($alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alcoGroupId, true), gettype($alcoGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($alcoGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($alcoGroupId, true)), __LINE__);
        }
        $this->alcoGroupId = $alcoGroupId;
        
        return $this;
    }
    /**
     * Get codes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getCodes(): ?\ArrayType\ArrayOfstring
    {
        return isset($this->codes) ? $this->codes : null;
    }
    /**
     * Set codes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $codes
     * @return \StructType\SetPositionCodesToAlcoGroup
     */
    public function setCodes(?\ArrayType\ArrayOfstring $codes = null): self
    {
        if (is_null($codes) || (is_array($codes) && empty($codes))) {
            unset($this->codes);
        } else {
            $this->codes = $codes;
        }
        
        return $this;
    }
}
