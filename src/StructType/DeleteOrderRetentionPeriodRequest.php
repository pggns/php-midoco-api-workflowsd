<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderRetentionPeriodRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderRetentionPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for DeleteOrderRetentionPeriodRequest
     * @uses DeleteOrderRetentionPeriodRequest::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod|null
     */
    public function getMidocoOrderRetentionPeriod(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteOrderRetentionPeriodRequest
     */
    public function setMidocoOrderRetentionPeriod(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrderRetentionPeriod $midocoOrderRetentionPeriod = null): self
    {
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
}
