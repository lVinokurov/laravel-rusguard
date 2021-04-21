<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionSendEmailActionSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionSendEmailActionSlimInfo
 * @subpackage Structs
 */
class ReactionSendEmailActionSlimInfo extends ReactionSendEmailActionSaveData
{
    /**
     * The CommonData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReactionActionSlimInfo|null
     */
    protected ?\StructType\ReactionActionSlimInfo $CommonData = null;
    /**
     * Constructor method for ReactionSendEmailActionSlimInfo
     * @uses ReactionSendEmailActionSlimInfo::setCommonData()
     * @param \StructType\ReactionActionSlimInfo $commonData
     */
    public function __construct(?\StructType\ReactionActionSlimInfo $commonData = null)
    {
        $this
            ->setCommonData($commonData);
    }
    /**
     * Get CommonData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReactionActionSlimInfo|null
     */
    public function getCommonData(): ?\StructType\ReactionActionSlimInfo
    {
        return isset($this->CommonData) ? $this->CommonData : null;
    }
    /**
     * Set CommonData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReactionActionSlimInfo $commonData
     * @return \StructType\ReactionSendEmailActionSlimInfo
     */
    public function setCommonData(?\StructType\ReactionActionSlimInfo $commonData = null): self
    {
        if (is_null($commonData) || (is_array($commonData) && empty($commonData))) {
            unset($this->CommonData);
        } else {
            $this->CommonData = $commonData;
        }
        
        return $this;
    }
}
