<?php
namespace Remi\Jobs\Model\ResourceModel;
 
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
/**
 * Department post mysql resource
 */
class Job extends AbstractDb
{
 
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        // Table Name and Primary Key column
        $this->_init('remi_job', 'entity_id');
    }
 
}