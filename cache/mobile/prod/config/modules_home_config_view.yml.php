<?php
// auto-generated by sfViewConfigHandler
// date: 2011/10/09 15:52:24
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('bootstrap.css', '', array ());
  $response->addStylesheet('http://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.css', '', array ());
  $response->addJavascript('http://code.jquery.com/jquery-1.6.2.min.js', '', array ());
  $response->addJavascript('http://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.js', '', array ());
  $response->addJavascript('script', '', array ());


