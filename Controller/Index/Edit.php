<?php
namespace Bhaveshpp\Blogpost\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Bhaveshpp\Blogpost\Model\PostFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class Edit extends Action 
{
    protected $_pageFactory;
    
    protected $_postFactory;
    
    protected $_resultRedirectFactory;

    public function __construct(
        Context $context,
        PageFactory $pagefactory,
        PostFactory $postfactory,
        RedirectFactory $resultRedirectFactory)
    {
        $this->_pageFactory = $pagefactory;
        $this->_postFactory = $postfactory;
        $this->_resultRedirectFactory = $resultRedirectFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
