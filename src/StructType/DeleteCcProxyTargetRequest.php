<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCcProxyTargetRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCcProxyTargetRequest extends AbstractStructBase
{
    /**
     * The MidocoCcProxyTarget
     * Meta information extracted from the WSDL
     * - ref: MidocoCcProxyTarget
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget $MidocoCcProxyTarget = null;
    /**
     * Constructor method for DeleteCcProxyTargetRequest
     * @uses DeleteCcProxyTargetRequest::setMidocoCcProxyTarget()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null)
    {
        $this
            ->setMidocoCcProxyTarget($midocoCcProxyTarget);
    }
    /**
     * Get MidocoCcProxyTarget value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget|null
     */
    public function getMidocoCcProxyTarget(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget
    {
        return $this->MidocoCcProxyTarget;
    }
    /**
     * Set MidocoCcProxyTarget value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteCcProxyTargetRequest
     */
    public function setMidocoCcProxyTarget(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null): self
    {
        $this->MidocoCcProxyTarget = $midocoCcProxyTarget;
        
        return $this;
    }
}
