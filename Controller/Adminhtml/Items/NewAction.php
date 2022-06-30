<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote

 */

namespace Ktplnew\RequestForQuote\Controller\Adminhtml\Items;

class NewAction extends \Ktplnew\RequestForQuote\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
