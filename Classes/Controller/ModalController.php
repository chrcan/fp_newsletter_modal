<?php

namespace Rcdesign\FpNewsletterModal\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class ModalController extends ActionController
{
    /**
     * Display a button for fp_newsletter
     *
     * @return ResponseInterface
     */
    public function showButtonAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * Display modal box for fp_newsletter
     *
     * @return ResponseInterface
     */
    public function showModalAction(): ResponseInterface
    {
        $this->view->assign('contentObject', $this->configurationManager->getContentObject()->data);
        return $this->htmlResponse();
    }
}
