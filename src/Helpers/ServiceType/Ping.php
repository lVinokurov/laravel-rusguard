<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Ping ServiceType
 * @subpackage Services
 */
class Ping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Ping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Ping $parameters
     * @return \StructType\PingResponse|bool
     */
    public function Ping(\StructType\Ping $parameters)
    {
        try {
            $this->setResult($resultPing = $this->getSoapClient()->__soapCall('Ping', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultPing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\PingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
