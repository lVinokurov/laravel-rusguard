<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersByWorkplaceResponse StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersByWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFoldersByWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFavoriteFolderInfo|null
     */
    protected ?\ArrayType\ArrayOfFavoriteFolderInfo $GetFavoriteFoldersByWorkplaceResult = null;
    /**
     * Constructor method for GetFavoriteFoldersByWorkplaceResponse
     * @uses GetFavoriteFoldersByWorkplaceResponse::setGetFavoriteFoldersByWorkplaceResult()
     * @param \ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersByWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersByWorkplaceResult = null)
    {
        $this
            ->setGetFavoriteFoldersByWorkplaceResult($getFavoriteFoldersByWorkplaceResult);
    }
    /**
     * Get GetFavoriteFoldersByWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFavoriteFolderInfo|null
     */
    public function getGetFavoriteFoldersByWorkplaceResult(): ?\ArrayType\ArrayOfFavoriteFolderInfo
    {
        return isset($this->GetFavoriteFoldersByWorkplaceResult) ? $this->GetFavoriteFoldersByWorkplaceResult : null;
    }
    /**
     * Set GetFavoriteFoldersByWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersByWorkplaceResult
     * @return \StructType\GetFavoriteFoldersByWorkplaceResponse
     */
    public function setGetFavoriteFoldersByWorkplaceResult(?\ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersByWorkplaceResult = null): self
    {
        if (is_null($getFavoriteFoldersByWorkplaceResult) || (is_array($getFavoriteFoldersByWorkplaceResult) && empty($getFavoriteFoldersByWorkplaceResult))) {
            unset($this->GetFavoriteFoldersByWorkplaceResult);
        } else {
            $this->GetFavoriteFoldersByWorkplaceResult = $getFavoriteFoldersByWorkplaceResult;
        }
        
        return $this;
    }
}
