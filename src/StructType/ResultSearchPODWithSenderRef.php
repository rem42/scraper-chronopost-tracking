<?php

declare(strict_types=1);

namespace Scraper\ScraperChronopostTracking\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultSearchPODWithSenderRef StructType.
 */
#[\AllowDynamicProperties]
class ResultSearchPODWithSenderRef extends AbstractStructBase
{
    /** The errorCode */
    protected int $errorCode;

    /**
     * The listParcelPOD
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ParcelPOD>|null
     */
    protected ?array $listParcelPOD = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for resultSearchPODWithSenderRef.
     *
     * @uses ResultSearchPODWithSenderRef::setErrorCode()
     * @uses ResultSearchPODWithSenderRef::setListParcelPOD()
     * @uses ResultSearchPODWithSenderRef::setErrorMessage()
     *
     * @param array<ParcelPOD> $listParcelPOD
     */
    public function __construct(int $errorCode, ?array $listParcelPOD = null, ?string $errorMessage = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setListParcelPOD($listParcelPOD)
            ->setErrorMessage($errorMessage)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get listParcelPOD value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ParcelPOD>|null
     */
    public function getListParcelPOD(): ?array
    {
        return $this->listParcelPOD ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setListParcelPOD method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListParcelPOD method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListParcelPODForArrayConstraintFromSetListParcelPOD(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $resultSearchPODWithSenderRefListParcelPODItem) {
            // validation for constraint: itemType
            if (!$resultSearchPODWithSenderRefListParcelPODItem instanceof ParcelPOD) {
                $invalidValues[] = is_object($resultSearchPODWithSenderRefListParcelPODItem) ? get_class($resultSearchPODWithSenderRefListParcelPODItem) : sprintf('%s(%s)', gettype($resultSearchPODWithSenderRefListParcelPODItem), var_export($resultSearchPODWithSenderRefListParcelPODItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The listParcelPOD property can only contain items of type \Scraper\ScraperChronopostTracking\StructType\ParcelPOD, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set listParcelPOD value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ParcelPOD> $listParcelPOD
     *
     * @throws \InvalidArgumentException
     */
    public function setListParcelPOD(?array $listParcelPOD = null): self
    {
        // validation for constraint: array
        if ('' !== ($listParcelPODArrayErrorMessage = self::validateListParcelPODForArrayConstraintFromSetListParcelPOD($listParcelPOD))) {
            throw new \InvalidArgumentException($listParcelPODArrayErrorMessage, __LINE__);
        }

        if (is_null($listParcelPOD) || (is_array($listParcelPOD) && empty($listParcelPOD))) {
            unset($this->listParcelPOD);
        } else {
            $this->listParcelPOD = $listParcelPOD;
        }

        return $this;
    }

    /**
     * Add item to listParcelPOD value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToListParcelPOD(ParcelPOD $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ParcelPOD) {
            throw new \InvalidArgumentException(sprintf('The listParcelPOD property can only contain items of type \Scraper\ScraperChronopostTracking\StructType\ParcelPOD, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listParcelPOD[] = $item;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
