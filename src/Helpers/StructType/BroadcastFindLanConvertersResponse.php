<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BroadcastFindLanConvertersResponse StructType
 * @subpackage Structs
 */
class BroadcastFindLanConvertersResponse extends AbstractStructBase
{
    /**
     * The BroadcastFindLanConvertersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLanCanConverter|null
     */
    protected ?\ArrayType\ArrayOfLanCanConverter $BroadcastFindLanConvertersResult = null;
    /**
     * Constructor method for BroadcastFindLanConvertersResponse
     * @uses BroadcastFindLanConvertersResponse::setBroadcastFindLanConvertersResult()
     * @param \ArrayType\ArrayOfLanCanConverter $broadcastFindLanConvertersResult
     */
    public function __construct(?\ArrayType\ArrayOfLanCanConverter $broadcastFindLanConvertersResult = null)
    {
        $this
            ->setBroadcastFindLanConvertersResult($broadcastFindLanConvertersResult);
    }
    /**
     * Get BroadcastFindLanConvertersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLanCanConverter|null
     */
    public function getBroadcastFindLanConvertersResult(): ?\ArrayType\ArrayOfLanCanConverter
    {
        return isset($this->BroadcastFindLanConvertersResult) ? $this->BroadcastFindLanConvertersResult : null;
    }
    /**
     * Set BroadcastFindLanConvertersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLanCanConverter $broadcastFindLanConvertersResult
     * @return \StructType\BroadcastFindLanConvertersResponse
     */
    public function setBroadcastFindLanConvertersResult(?\ArrayType\ArrayOfLanCanConverter $broadcastFindLanConvertersResult = null): self
    {
        if (is_null($broadcastFindLanConvertersResult) || (is_array($broadcastFindLanConvertersResult) && empty($broadcastFindLanConvertersResult))) {
            unset($this->BroadcastFindLanConvertersResult);
        } else {
            $this->BroadcastFindLanConvertersResult = $broadcastFindLanConvertersResult;
        }
        
        return $this;
    }
}
