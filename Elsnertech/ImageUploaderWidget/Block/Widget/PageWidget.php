<?php

namespace Elsnertech\ImageUploaderWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class PageWidget extends Template implements BlockInterface
{
   protected $_template = "Elsnertech_ImageUploaderWidget::widget/page_widget.phtml";

   public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \Magento\Store\Model\StoreManagerInterface $storeManager,
      array $data = []
   ) {
      parent::__construct($context, $data);
      $this->_storeManager = $storeManager;
   }

   public function getMediaPath()
   {
      $mediaUrl = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
      return $mediaUrl;
   }

}