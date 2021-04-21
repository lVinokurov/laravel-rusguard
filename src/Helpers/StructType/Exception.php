<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Exception StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Exception
 * @subpackage Structs
 */
class Exception extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The FactoryType
     * Meta information extracted from the WSDL
     * - ref: ser:FactoryType
     * @var string|null
     */
    protected ?string $FactoryType = null;
    /**
     * Constructor method for Exception
     * @uses Exception::setAny()
     * @uses Exception::setFactoryType()
     * @param \DOMDocument|string|null $any
     * @param string $factoryType
     */
    public function __construct($any = null, ?string $factoryType = null)
    {
        $this
            ->setAny($any)
            ->setFactoryType($factoryType);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \StructType\Exception
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
    /**
     * Get FactoryType value
     * @return string|null
     */
    public function getFactoryType(): ?string
    {
        return $this->FactoryType;
    }
    /**
     * Set FactoryType value
     * @param string $factoryType
     * @return \StructType\Exception
     */
    public function setFactoryType(?string $factoryType = null): self
    {
        // validation for constraint: string
        if (!is_null($factoryType) && !is_string($factoryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($factoryType, true), gettype($factoryType)), __LINE__);
        }
        $this->FactoryType = $factoryType;
        
        return $this;
    }
}
