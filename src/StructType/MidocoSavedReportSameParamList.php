<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportSameParamList StructType
 * @subpackage Structs
 */
class MidocoSavedReportSameParamList extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportExt
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt $MidocoJasperReportExt = null;
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO[]
     */
    protected array $MidocoJasperReportParamValue = [];
    /**
     * Constructor method for MidocoSavedReportSameParamList
     * @uses MidocoSavedReportSameParamList::setMidocoJasperReportExt()
     * @uses MidocoSavedReportSameParamList::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt $midocoJasperReportExt = null, array $midocoJasperReportParamValue = [])
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt)
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt|null
     */
    public function getMidocoJasperReportExt(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * Set MidocoJasperReportExt value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoSavedReportSameParamList
     */
    public function setMidocoJasperReportExt(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoJasperReportExt $midocoJasperReportExt = null): self
    {
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO[]
     */
    public function getMidocoJasperReportParamValue(): array
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParamValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSavedReportSameParamListMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportSameParamListMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($midocoSavedReportSameParamListMidocoJasperReportParamValueItem) ? get_class($midocoSavedReportSameParamListMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($midocoSavedReportSameParamListMidocoJasperReportParamValueItem), var_export($midocoSavedReportSameParamListMidocoJasperReportParamValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoSavedReportSameParamList
     */
    public function setMidocoJasperReportParamValue(array $midocoJasperReportParamValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamValueArrayErrorMessage = self::validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue($midocoJasperReportParamValue))) {
            throw new InvalidArgumentException($midocoJasperReportParamValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoSavedReportSameParamList
     */
    public function addToMidocoJasperReportParamValue(\Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\JasperReportParamValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamValue[] = $item;
        
        return $this;
    }
}
