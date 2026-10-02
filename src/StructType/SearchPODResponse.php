<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse.
 */
#[\AllowDynamicProperties]
class SearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultSearchPOD $return = null;

    /**
     * Constructor method for searchPODResponse.
     *
     * @uses SearchPODResponse::setReturn()
     */
    public function __construct(?ResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultSearchPOD
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultSearchPOD $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
