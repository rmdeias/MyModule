<?php
namespace Remi\Helloworld\Controller\Say;
class Hello extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
       echo 'Execute Action Say_Hello OK';
       die();
    }
}