<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleDefinitionResponse StructType
 * @subpackage Structs
 */
class SaveRuleDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleDefinition
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO $MidocoRuleDefinition = null;
    /**
     * Constructor method for SaveRuleDefinitionResponse
     * @uses SaveRuleDefinitionResponse::setMidocoRuleDefinition()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO $midocoRuleDefinition
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO $midocoRuleDefinition = null)
    {
        $this
            ->setMidocoRuleDefinition($midocoRuleDefinition);
    }
    /**
     * Get MidocoRuleDefinition value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO|null
     */
    public function getMidocoRuleDefinition(): ?\Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO
    {
        return $this->MidocoRuleDefinition;
    }
    /**
     * Set MidocoRuleDefinition value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO $midocoRuleDefinition
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveRuleDefinitionResponse
     */
    public function setMidocoRuleDefinition(?\Pggns\MidocoApi\WorkflowSD\StructType\RuleDefinitionDTO $midocoRuleDefinition = null): self
    {
        $this->MidocoRuleDefinition = $midocoRuleDefinition;
        
        return $this;
    }
}
