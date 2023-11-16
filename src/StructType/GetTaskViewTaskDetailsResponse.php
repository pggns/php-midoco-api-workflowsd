<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewTaskDetailsResponse StructType
 * @subpackage Structs
 */
class GetTaskViewTaskDetailsResponse extends AbstractStructBase
{
    /**
     * The TaskDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaskDetails
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails[]
     */
    protected array $TaskDetails = [];
    /**
     * The count
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * Constructor method for GetTaskViewTaskDetailsResponse
     * @uses GetTaskViewTaskDetailsResponse::setTaskDetails()
     * @uses GetTaskViewTaskDetailsResponse::setCount()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails[] $taskDetails
     * @param int $count
     */
    public function __construct(array $taskDetails = [], ?int $count = 0)
    {
        $this
            ->setTaskDetails($taskDetails)
            ->setCount($count);
    }
    /**
     * Get TaskDetails value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails[]
     */
    public function getTaskDetails(): array
    {
        return $this->TaskDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTaskDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskDetailsForArrayConstraintsFromSetTaskDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTaskViewTaskDetailsResponseTaskDetailsItem) {
            // validation for constraint: itemType
            if (!$getTaskViewTaskDetailsResponseTaskDetailsItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails) {
                $invalidValues[] = is_object($getTaskViewTaskDetailsResponseTaskDetailsItem) ? get_class($getTaskViewTaskDetailsResponseTaskDetailsItem) : sprintf('%s(%s)', gettype($getTaskViewTaskDetailsResponseTaskDetailsItem), var_export($getTaskViewTaskDetailsResponseTaskDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskDetails property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails[] $taskDetails
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewTaskDetailsResponse
     */
    public function setTaskDetails(array $taskDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($taskDetailsArrayErrorMessage = self::validateTaskDetailsForArrayConstraintsFromSetTaskDetails($taskDetails))) {
            throw new InvalidArgumentException($taskDetailsArrayErrorMessage, __LINE__);
        }
        $this->TaskDetails = $taskDetails;
        
        return $this;
    }
    /**
     * Add item to TaskDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewTaskDetailsResponse
     */
    public function addToTaskDetails(\Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails) {
            throw new InvalidArgumentException(sprintf('The TaskDetails property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskDetails[] = $item;
        
        return $this;
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewTaskDetailsResponse
     */
    public function setCount(?int $count = 0): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
}
