<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse.
 */
#[\AllowDynamicProperties]
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultTrackSearch $return = null;

    /**
     * Constructor method for trackSearchResponse.
     *
     * @uses TrackSearchResponse::setReturn()
     */
    public function __construct(?ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultTrackSearch
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultTrackSearch $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
