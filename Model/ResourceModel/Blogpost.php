<?php
namespace Bhaveshpp\Blogpost\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Blogpost extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('blogpost','post_id');
    }
}
