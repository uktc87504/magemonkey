<?php

class Ebizmarts_MageMonkey_Block_Adminhtml_Bulksync_Export extends Mage_Adminhtml_Block_Widget_Form_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_bulksync';
        $this->_blockGroup = 'monkey';
        $this->_mode       = 'export';

        parent::__construct();

        $this->_updateButton('save', 'label', Mage::helper('monkey')->__('All set!'));
    }

    public function getHeaderText()
    {
    	return Mage::helper('monkey')->__('New Export');
    }

}