<?php
/**
 * @category   Ktplnew
 * @package    Ktplnew_RequestForQuote
 */

namespace Ktplnew\RequestForQuote\Controller\Adminhtml\Items;

class Index extends \Ktplnew\RequestForQuote\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Ktplnew_RequestForQuote::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Request For Quote'));
        $resultPage->addBreadcrumb(__('Request For Quote'), __('Request For Quote'));
        $resultPage->addBreadcrumb(__('Quotes'), __('Quotes'));
        return $resultPage;
    }
}
