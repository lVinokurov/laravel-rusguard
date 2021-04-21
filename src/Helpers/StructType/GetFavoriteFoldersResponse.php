<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersResponse StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersResponse extends AbstractStructBase
{
    /**
     * The GetFavoriteFoldersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFavoriteFolderInfo|null
     */
    protected ?\ArrayType\ArrayOfFavoriteFolderInfo $GetFavoriteFoldersResult = null;
    /**
     * Constructor method for GetFavoriteFoldersResponse
     * @uses GetFavoriteFoldersResponse::setGetFavoriteFoldersResult()
     * @param \ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersResult
     */
    public function __construct(?\ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersResult = null)
    {
        $this
            ->setGetFavoriteFoldersResult($getFavoriteFoldersResult);
    }
    /**
     * Get GetFavoriteFoldersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFavoriteFolderInfo|null
     */
    public function getGetFavoriteFoldersResult(): ?\ArrayType\ArrayOfFavoriteFolderInfo
    {
        return isset($this->GetFavoriteFoldersResult) ? $this->GetFavoriteFoldersResult : null;
    }
    /**
     * Set GetFavoriteFoldersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersResult
     * @return \StructType\GetFavoriteFoldersResponse
     */
    public function setGetFavoriteFoldersResult(?\ArrayType\ArrayOfFavoriteFolderInfo $getFavoriteFoldersResult = null): self
    {
        if (is_null($getFavoriteFoldersResult) || (is_array($getFavoriteFoldersResult) && empty($getFavoriteFoldersResult))) {
            unset($this->GetFavoriteFoldersResult);
        } else {
            $this->GetFavoriteFoldersResult = $getFavoriteFoldersResult;
        }
        
        return $this;
    }
}
