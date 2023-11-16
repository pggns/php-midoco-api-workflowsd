<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskViewContextNew StructType
 * @subpackage Structs
 */
class TaskViewContextNew extends AbstractStructBase
{
    /**
     * The TaskViewSingleContext
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TaskViewSingleContext
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext[]
     */
    protected array $TaskViewSingleContext = [];
    /**
     * Constructor method for TaskViewContextNew
     * @uses TaskViewContextNew::setTaskViewSingleContext()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext[] $taskViewSingleContext
     */
    public function __construct(array $taskViewSingleContext = [])
    {
        $this
            ->setTaskViewSingleContext($taskViewSingleContext);
    }
    /**
     * Get TaskViewSingleContext value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext[]
     */
    public function getTaskViewSingleContext(): array
    {
        return $this->TaskViewSingleContext;
    }
    /**
     * This method is responsible for validating the values passed to the setTaskViewSingleContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaskViewSingleContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskViewSingleContextForArrayConstraintsFromSetTaskViewSingleContext(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taskViewContextNewTaskViewSingleContextItem) {
            // validation for constraint: itemType
            if (!$taskViewContextNewTaskViewSingleContextItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext) {
                $invalidValues[] = is_object($taskViewContextNewTaskViewSingleContextItem) ? get_class($taskViewContextNewTaskViewSingleContextItem) : sprintf('%s(%s)', gettype($taskViewContextNewTaskViewSingleContextItem), var_export($taskViewContextNewTaskViewSingleContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaskViewSingleContext property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaskViewSingleContext value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext[] $taskViewSingleContext
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew
     */
    public function setTaskViewSingleContext(array $taskViewSingleContext = []): self
    {
        // validation for constraint: array
        if ('' !== ($taskViewSingleContextArrayErrorMessage = self::validateTaskViewSingleContextForArrayConstraintsFromSetTaskViewSingleContext($taskViewSingleContext))) {
            throw new InvalidArgumentException($taskViewSingleContextArrayErrorMessage, __LINE__);
        }
        $this->TaskViewSingleContext = $taskViewSingleContext;
        
        return $this;
    }
    /**
     * Add item to TaskViewSingleContext value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContextNew
     */
    public function addToTaskViewSingleContext(\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext) {
            throw new InvalidArgumentException(sprintf('The TaskViewSingleContext property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewSingleContext, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaskViewSingleContext[] = $item;
        
        return $this;
    }
}
