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
  public function executeIndex(sfWebRequest $request)
  {
    $this->Servers = ServerQuery::create()->find();
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
}
