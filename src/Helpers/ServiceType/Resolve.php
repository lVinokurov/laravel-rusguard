<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Resolve ServiceType
 * @subpackage Services
 */
class Resolve extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ResolvePhotoBankEntity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ResolvePhotoBankEntity $parameters
     * @return \StructType\ResolvePhotoBankEntityResponse|bool
     */
    public function ResolvePhotoBankEntity(\StructType\ResolvePhotoBankEntity $parameters)
    {
        try {
            $this->setResult($resultResolvePhotoBankEntity = $this->getSoapClient()->__soapCall('ResolvePhotoBankEntity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultResolvePhotoBankEntity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ResolvePhotoBankEntityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
