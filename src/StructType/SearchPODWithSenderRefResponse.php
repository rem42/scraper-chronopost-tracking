<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse.
 */
#[\AllowDynamicProperties]
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultSearchPODWithSenderRef $return = null;

    /**
     * Constructor method for searchPODWithSenderRefResponse.
     *
     * @uses SearchPODWithSenderRefResponse::setReturn()
     */
    public function __construct(?ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultSearchPODWithSenderRef
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
