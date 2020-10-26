<?php
namespace Remi\Jobs\Model\Source;
 
class Department implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Remi\Jobs\Model\Department
     */
    protected $_department;
 
    /**
     * Constructor
     *
     * @param \Remi\Jobs\Model\Department $department
     */
    public function __construct(\Remi\Jobs\Model\Department $department)
    {
        $this->_department = $department;
    }
 
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $departmentCollection = $this->_department->getCollection()
            ->addFieldToSelect('entity_id')
            ->addFieldToSelect('name');
        foreach ($departmentCollection as $department) {
            $options[] = [
                'label' => $department->getName(),
                'value' => $department->getId(),
            ];
        }
        return $options;
    }
}