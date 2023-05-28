<?php

namespace Rcdesign\FpNewsletterModal\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class ModalController extends ActionController
{
    /**
     * Displays a button for modalbox
     *
     * @return ResponseInterface
     */
    public function showLinkAction(): ResponseInterface
    {
        $this->view->assign(
            'contentObject',
            $this->configurationManager->getContentObject()->data
        );
        return $this->htmlResponse();
    }
    /**
     * Displays a form into the modalbox
     *
     * @return ResponseInterface
     */
    public function showModalAction(): ResponseInterface
    {
        $this->view->assign(
            'contentObject',
            $this->configurationManager->getContentObject()->data
        );
        // Debugg
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->configurationManager->getContentObject()->data);
        // die();
        return $this->htmlResponse();
    }
}
