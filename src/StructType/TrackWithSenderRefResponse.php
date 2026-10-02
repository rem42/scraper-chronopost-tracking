<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse.
 */
#[\AllowDynamicProperties]
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ResultTrackWithSenderRef $return = null;

    /**
     * Constructor method for trackWithSenderRefResponse.
     *
     * @uses TrackWithSenderRefResponse::setReturn()
     */
    public function __construct(?ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?ResultTrackWithSenderRef
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
