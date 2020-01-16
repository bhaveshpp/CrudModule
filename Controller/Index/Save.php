<?php
namespace Bhaveshpp\Blogpost\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Bhaveshpp\Blogpost\Model\PostFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class Save extends Action 
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
        $data = $this->getRequest()->getPost();
        $post = $this->_postFactory->create();
        if ($data->get('post_id')) {
            $post->load($data->get('post_id'));
        }
        $post->setPostTitle($data->get('post_title'));
        $post->setPostAuthor($data->get('post_author'));
        $post->setPostDiscription($data->get('post_discription'));
        $post->save();

        return $this->_resultRedirectFactory->create()->setPath('blogs');

    }
}
