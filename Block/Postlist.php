<?php
namespace Bhaveshpp\Blogpost\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Bhaveshpp\Blogpost\Model\PostFactory;
class Postlist extends Template 
{
    private $_collection;

    public function __construct(
        Context $context,
        PostFactory $collection
        )
    {
        parent::__construct($context);
        $this->_collection = $collection;
    }

    public function getBlogpostlist()
    {
        $post = $this->_collection->create()->getCollection();
        if ($this->getRequest()->getParam('order')) {
            $post->setOrder($this->getRequest()->getParam('order'),'ASC');
        }
        return $post;
    }

    public function getBlogpost()
    {
        $post = $this->_collection->create();
        return $post->getCollection()->addFieldToFilter('post_id', $this->getRequest()->getParam('post_id'))->getData();
    }


}
