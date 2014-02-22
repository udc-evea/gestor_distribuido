<?php

/**
 * server actions.
 *
 * @package    gestor_distribuido
 * @subpackage server
 * @author     Your name here
 */
class serverActions extends sfActions
{
  public function executeReport(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));    

    $hash = $request->getParameter('hash');
    
    $server = ServerQuery::create()
                ->findOneByHash($hash);
    
    $this->forward404Unless($server);
            
    $server->setUltimoReporte(new Datetime());
    $server->setUltimoReporteContenido($request->getParameter('report'));
    $server->actualizarEstadoServicios();
    $server->save();
    
    //$this->getLogger()->err($request->getParameter('report'));
    
    return sfView::NONE;
  }
  
  public function executeVerUltimoReporte(sfWebRequest $request)
  {
    $server = $this->getRoute()->getObject();
    $rep = $server->getUltimoReporteContenido() ? nl2br($server->getUltimoReporteContenido()) : "No hay datos.";
    
    return $this->renderText($rep);
  }
  
  public function executeReporteInactivos(sfWebRequest $request)
  {
    $env = sfConfig::get('sf_environment');
    $this->forward404Unless($this->desdeServerLocal() || $env == 'dev');
    
    try {
      $inactivos = ServerQuery::create()
                  ->inactivos()
                  ->joinWithRepoLocalidad()
                  ->porLocalidad()
                  ->find();
      if(count($inactivos) > 0)
        $this->mandarMailInactivos($inactivos);
    } catch(Exception $e) {
      $this->getLogger()->warning("Error al enviar correo: ".$e->getMessage());
      return sfView::NONE;
    }
    return sfView::NONE;
  }
  
  public function mandarMailInactivos($inactivos)
  {
    $config = sfConfig::get('app_mails_serversInactivos');
    
    $message = $this->getMailer()->compose();
    $message->setSubject($config['subject']);
    $message->setTo($config['to']);
    $message->setFrom($config['from']);
    
    $html = $this->getPartial('servers/mail_inactivos', array('servers' => $inactivos));
    $message->setBody($html, 'text/html');
    
    $this->getMailer()->send($message);
  }
  
  protected function desdeServerLocal()
  {
    $origen = $this->getRequest()->getHost();
    
    return in_array($origen, array('localhost', '127.0.0.1'));
  }
  
  //<editor-fold desc="metodos de modulo">
  public function executeIndex(sfWebRequest $request)
  {
    $this->Servers = ServerQuery::create()
            ->joinWithRepoLocalidad()
            ->porLocalidad()
            ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ServerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ServerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Server = ServerQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Server, sprintf('Object Server does not exist (%s).', $request->getParameter('id')));
    $this->form = new ServerForm($Server);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Server = ServerQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Server, sprintf('Object Server does not exist (%s).', $request->getParameter('id')));
    $this->form = new ServerForm($Server);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Server = ServerQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Server, sprintf('Object Server does not exist (%s).', $request->getParameter('id')));
    $Server->delete();

    $this->redirect('server/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Server = $form->save();

      $this->redirect('server/edit?id='.$Server->getId());
    }
  }
  //</editor-fold>
}
