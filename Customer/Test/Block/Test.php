<?php

namespace Customer\Test\Block;

/**
 * Test content block
 */
class Test extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Hello Customer!!'));
        
        return parent::_prepareLayout();
    }
}