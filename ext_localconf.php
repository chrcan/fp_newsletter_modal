<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'FpNewsletterModal',
        'Link',
        [
            \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showLink'
        ],
        // non-cacheable actions
        // [
        //     \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showLink'
        // ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    link {
                        iconIdentifier = fp_newsletter_modal-plugin-link
                        title = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_link.name
                        description = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_link.description
                        tt_content_defValues {
                            CType = list
                            list_type = fpnewslettermodal_link
                        }
                    }
                }
                show = *
            }
       }'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'FpNewsletterModal',
        'ModalBox',
        [
            \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showModal'
        ],
        // non-cacheable actions
        [
            \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showModal'
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    modalbox {
                        iconIdentifier = fp_newsletter_modal-plugin-modalbox
                        title = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_modalbox.name
                        description = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_modalbox.description
                        tt_content_defValues {
                            CType = list
                            list_type = fpnewslettermodal_modalbox
                        }
                    }
                }
                show = *
            }
        }'
    );
})();
