<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */


namespace Ktplnew\RequestForQuote\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Quotes');
        $this->_addButtonLabel = __('Add New Quote');
        parent::_construct();
		
    }
}
