<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.*/
namespace Powersante\Initstoredroutines\Setup;
/*


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\App\ObjectManager;
class Data extends AbstractHelper
{
    protected $resourceConnection;
    public function __construct(
        Context $context,
        ResourceConnection $resourceConnection
    )
    {
        $this->resourceConnection = $resourceConnection;
        parent::__construct($context);
    }
    public function runSqlQuery($table)
    {
        $connection  = $this->resourceConnection->getConnection();
        // $table is table name
        $table = $connection->getTableName('remi_job');
        //For Select query
        $query = "Select * FROM " . $table;
        $result = $connection->fetchAll($query);
        $this->_logger->log(print_r($result,true);
        
        
    }

*/



use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Query;
use Magento\Framework\Setup;


class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        
        $sql = "CREATE PROCEDURE SelectAll2Customers ()
        BEGIN 
        SELECT * FROM admin_user;
        end;";

        $installer->getConnection()->exec($sql);
 
        $installer->endSetup();
    }
 
}