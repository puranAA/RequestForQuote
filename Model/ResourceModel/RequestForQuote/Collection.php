<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Model\ResourceModel\RequestForQuote;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'requestforquote_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Ktplnew\RequestForQuote\Model\RequestForQuote',
            'Ktplnew\RequestForQuote\Model\ResourceModel\RequestForQuote'
        );
    }
}
