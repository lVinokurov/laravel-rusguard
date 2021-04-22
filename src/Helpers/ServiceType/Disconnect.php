<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Disconnect ServiceType
 * @subpackage Services
 */
class Disconnect extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Disconnect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Disconnect $parameters
     * @return \StructType\DisconnectResponse|bool
     */
    public function Disconnect(\StructType\Disconnect $parameters)
    {
        try {
            $this->setResult($resultDisconnect = $this->getSoapClient()->__soapCall('Disconnect', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDisconnect;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DisconnectResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
