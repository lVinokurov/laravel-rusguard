<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Put ServiceType
 * @subpackage Services
 */
class Put extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PutNotify
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PutNotify $parameters
     * @return \StructType\PutNotifyResponse|bool
     */
    public function PutNotify(\StructType\PutNotify $parameters)
    {
        try {
            $this->setResult($resultPutNotify = $this->getSoapClient()->__soapCall('PutNotify', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPutNotify;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\PutNotifyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
