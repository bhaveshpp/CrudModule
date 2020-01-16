<?php
namespace Bhaveshpp\Blogpost\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Bhaveshpp\Blogpost\Model\PostFactory;

class Index extends Action 
{
    protected $_pageFactory;
    protected $_postFactory;

    public function __construct(
        Context $context,
        PageFactory $pagefactory,
        PostFactory $postfactory)
    {
        $this->_isScopePrivate = true;
        $this->_pageFactory = $pagefactory;
        $this->_postFactory = $postfactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
