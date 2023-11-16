<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfGroupRequest StructType
 * @subpackage Structs
 */
class SaveMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for SaveMfGroupRequest
     * @uses SaveMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
