<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2.
 */
#[\AllowDynamicProperties]
class TrackSkybillV2 extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $language = null;

    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for trackSkybillV2.
     *
     * @uses TrackSkybillV2::setLanguage()
     * @uses TrackSkybillV2::setSkybillNumber()
     */
    public function __construct(?string $language = null, ?string $skybillNumber = null)
    {
        $this
            ->setLanguage($language)
            ->setSkybillNumber($skybillNumber)
        ;
    }

    /**
     * Get language value.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value.
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }

    /**
     * Get skybillNumber value.
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    /**
     * Set skybillNumber value.
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;

        return $this;
    }
}
