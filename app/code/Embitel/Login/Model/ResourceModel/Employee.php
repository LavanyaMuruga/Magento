<?php
namespace Embitel\Login\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDB
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('employee_details', 'entity_id');   //here "employee_details" is table name and "entity_id" is the primary key of custom table
    }
}