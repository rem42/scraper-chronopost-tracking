<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackESDResponse.
 */
#[\AllowDynamicProperties]
class TrackESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultTrackSkybillV2 $return = null;

    /**
     * Constructor method for trackESDResponse.
     *
     * @uses TrackESDResponse::setReturn()
     */
    public function __construct(?ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultTrackSkybillV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
