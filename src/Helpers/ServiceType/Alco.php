<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Alco ServiceType
 * @subpackage Services
 */
class Alco extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AlcoGroupChangePriority
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AlcoGroupChangePriority $parameters
     * @return \StructType\AlcoGroupChangePriorityResponse|bool
     */
    public function AlcoGroupChangePriority(\StructType\AlcoGroupChangePriority $parameters)
    {
        try {
            $this->setResult($resultAlcoGroupChangePriority = $this->getSoapClient()->__soapCall('AlcoGroupChangePriority', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAlcoGroupChangePriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AlcoGroupChangePriorityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
