<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtraAttributesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExtraAttributesResponse extends AbstractStructBase
{
    /**
     * The attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $attribute = null;
    /**
     * Constructor method for GetExtraAttributesResponse
     * @uses GetExtraAttributesResponse::setAttribute()
     * @param string[] $attribute
     */
    public function __construct(?array $attribute = null)
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get attribute value
     * @return string[]
     */
    public function getAttribute(): ?array
    {
        return $this->attribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtraAttributesResponseAttributeItem) {
            // validation for constraint: itemType
            if (!is_string($getExtraAttributesResponseAttributeItem)) {
                $invalidValues[] = is_object($getExtraAttributesResponseAttributeItem) ? get_class($getExtraAttributesResponseAttributeItem) : sprintf('%s(%s)', gettype($getExtraAttributesResponseAttributeItem), var_export($getExtraAttributesResponseAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attribute property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attribute value
     * @throws InvalidArgumentException
     * @param string[] $attribute
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetExtraAttributesResponse
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetExtraAttributesResponse
     */
    public function addToAttribute(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The attribute property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attribute[] = $item;
        
        return $this;
    }
}
