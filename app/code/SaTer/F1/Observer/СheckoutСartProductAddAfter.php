<?php

namespace Sater\F1\Observer;

use Magento\Framework\Event\ObserverInterface;

class СheckoutСartProductAddAfter implements ObserverInterface
{
     public function __construct()
     {
         //Оголошення залежностей
     }

     public function execute(\Magento\Framework\Event\Observer $observer)
     {
         $product = $observer->getProduct();
         $item = $observer->getQuoteItem();
         /* Альтернативна версія "гетера" 
         $product = $observer->getData('product');
         $item = $observer->getData('quote_item');

         */
         //Код, який потрібно виконати при події
      }
}