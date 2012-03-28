<?php

/**
 * jquery actions.
 *
 * @package    wwwTest
 * @subpackage jquery
 * @author     Krzysztof Bryndza
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jqueryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeUlHideShow(sfWebRequest $request)
  {
  }
  
  public function executeHideShow(sfWebRequest $request)
  {
  }
}
