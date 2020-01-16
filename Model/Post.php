<?php
namespace Bhaveshpp\Blogpost\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'blogpost';

    protected $_cacheTag = 'blogpost';

    protected $_eventPrefix = 'blogpost';

    protected function _construct()
    {
        $this->_init('Bhaveshpp\Blogpost\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}
