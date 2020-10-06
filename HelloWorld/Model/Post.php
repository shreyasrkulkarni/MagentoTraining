<?php
namespace MageMastery\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'customer_details';

	protected $_cacheTag = 'customer_details';

	protected $_eventPrefix = 'customer_details';

	protected function _construct()
	{
		$this->_init('MageMastery\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}