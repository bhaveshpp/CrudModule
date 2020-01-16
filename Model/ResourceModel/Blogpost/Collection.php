<?php
namespace Bhaveshpp\Blogpost\Model\ResourceModel\Blogpost;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Bhaveshpp\Blogpost\Model\Blogpost as Model;
use Bhaveshpp\Blogpost\Model\Blogpost\ResourceModel\Blogpost as ResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class,ResourceModel::class);
    }
}
