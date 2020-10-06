<?php
namespace Remi\Jobs\Model\ResourceModel\Job;
 
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
 
    protected $_idFieldName = \Remi\Jobs\Model\Job::JOB_ID;
 
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Remi\Jobs\Model\Job', 'Remi\Jobs\Model\ResourceModel\Job');
    }
 
}