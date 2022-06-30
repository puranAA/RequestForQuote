<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Block;

/**
 * RequestForQuote content block
 */
class RequestForQuote extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Request For Quote'));
        
        return parent::_prepareLayout();
    }
}
