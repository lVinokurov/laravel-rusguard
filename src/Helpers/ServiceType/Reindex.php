<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Reindex ServiceType
 * @subpackage Services
 */
class Reindex extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReindexKeys
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReindexKeys $parameters
     * @return \StructType\ReindexKeysResponse|bool
     */
    public function ReindexKeys(\StructType\ReindexKeys $parameters)
    {
        try {
            $this->setResult($resultReindexKeys = $this->getSoapClient()->__soapCall('ReindexKeys', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReindexKeys;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ReindexKeysResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
