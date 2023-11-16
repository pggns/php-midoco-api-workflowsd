<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskDefinitionResponse StructType
 * @subpackage Structs
 */
class GetMidocoTaskDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskDefinition
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition[]
     */
    protected array $MidocoTaskDefinition = [];
    /**
     * Constructor method for GetMidocoTaskDefinitionResponse
     * @uses GetMidocoTaskDefinitionResponse::setMidocoTaskDefinition()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition[] $midocoTaskDefinition
     */
    public function __construct(array $midocoTaskDefinition = [])
    {
        $this
            ->setMidocoTaskDefinition($midocoTaskDefinition);
    }
    /**
     * Get MidocoTaskDefinition value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition[]
     */
    public function getMidocoTaskDefinition(): array
    {
        return $this->MidocoTaskDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskDefinitionForArrayConstraintsFromSetMidocoTaskDefinition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) {
            // validation for constraint: itemType
            if (!$getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition) {
                $invalidValues[] = is_object($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) ? get_class($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem) : sprintf('%s(%s)', gettype($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem), var_export($getMidocoTaskDefinitionResponseMidocoTaskDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskDefinition property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition[] $midocoTaskDefinition
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionResponse
     */
    public function setMidocoTaskDefinition(array $midocoTaskDefinition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskDefinitionArrayErrorMessage = self::validateMidocoTaskDefinitionForArrayConstraintsFromSetMidocoTaskDefinition($midocoTaskDefinition))) {
            throw new InvalidArgumentException($midocoTaskDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskDefinition = $midocoTaskDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionResponse
     */
    public function addToMidocoTaskDefinition(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskDefinition property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskDefinition[] = $item;
        
        return $this;
    }
}
