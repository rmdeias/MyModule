<?php
namespace Remi\Jobs\Model\ResourceModel\Department;
 
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
 
    protected $_idFieldName = \Remi\Jobs\Model\Department::DEPARTMENT_ID;
 
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Remi\Jobs\Model\Department', 'Remi\Jobs\Model\ResourceModel\Department');
    }
 
}