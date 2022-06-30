<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Model;

use Magento\Framework\Model\AbstractModel;

class RequestForQuote extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Ktplnew\RequestForQuote\Model\ResourceModel\RequestForQuote');
    }
}
