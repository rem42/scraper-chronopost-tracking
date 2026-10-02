<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType.
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchPOD.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\SearchPODResponse|bool
     */
    public function searchPOD(\Scraper\ScraperChronopostTracking\StructType\SearchPOD $parameters)
    {
        try {
            $this->setResult($resultSearchPOD = $this->getSoapClient()->__soapCall('searchPOD', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSearchPOD;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named searchPODWithSenderRef.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\SearchPODWithSenderRefResponse|bool
     */
    public function searchPODWithSenderRef(\Scraper\ScraperChronopostTracking\StructType\SearchPODWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultSearchPODWithSenderRef = $this->getSoapClient()->__soapCall('searchPODWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSearchPODWithSenderRef;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperChronopostTracking\StructType\SearchPODResponse|\Scraper\ScraperChronopostTracking\StructType\SearchPODWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
