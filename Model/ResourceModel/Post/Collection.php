<?php
namespace Bhaveshpp\Blogpost\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'blogpost_collection';
	protected $_eventObject = 'post_collection';

	protected function _construct()
	{
		$this->_init('Bhaveshpp\Blogpost\Model\Post', 'Bhaveshpp\Blogpost\Model\ResourceModel\Post');
	}

}