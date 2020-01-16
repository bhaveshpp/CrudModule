<?php
namespace Bhaveshpp\Bolgpost\Model;
use Magento\Framework\Model\AbstractModel;
use Bhaveshpp\Blogpost\Model\ResourceModel\Blogposts;
class Blogpost extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(Blogposts::class);
    }
}

