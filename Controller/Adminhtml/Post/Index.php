<?php
namespace Bhaveshpp\Blogpost\Controller\Adminhtml\Post;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action 
{
    protected $_resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu("Magento_Backend::content");
        $resultPage->addBreadcrumb(__("Blogpost"),__("All Posts"));
        $resultPage->getConfig()->getTitle()->set("All Posts");
        
        return $resultPage;
    }

}
