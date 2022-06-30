<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Block\Adminhtml\Items\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('ktplnew_requestforquote_items_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Quote'));
    }
}
