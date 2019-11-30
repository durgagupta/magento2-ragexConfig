<?php

namespace Ace\RegexConfig\Block\System\Form\Field;

class Regex extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{
    /**
     * @var \Magento\Framework\Data\Form\Element\Factory
     */
    protected $elementFactory;


    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Data\Form\Element\Factory $elementFactory
     * @param array $data
     */
    public function __construct (
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Data\Form\Element\Factory $elementFactory,
        array $data = []
    ) {
        $this->elementFactory = $elementFactory;
        parent::__construct($context, $data);
    }

    /**
     *
     */
    protected function _construct ()
    {
        $this->addColumn('date', ['label' => __('Date'), 'style' => 'width:180px', 'class' => 'holiday']);
        $this->addColumn('content', ['label' => __('Content'), 'style' => 'width:230px']);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('More');
        parent::_construct();
        $this->setTemplate('system/config/form/field/regex.phtml');
    }
}
