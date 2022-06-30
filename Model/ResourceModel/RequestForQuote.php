<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Model\ResourceModel;

class RequestForQuote extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('ktplnew_requestforquote', 'requestforquote_id');   //here "ktplnew_requestforquote" is table name and "requestforquote_id" is the primary key of custom table
    }
}
