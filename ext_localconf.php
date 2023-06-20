<?php
defined('TYPO3') || die();

(static function() {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'FpNewsletterModal',
        'Modal',
        [
            \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showModal'
        ],
        // non-cacheable actions
        [

        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    modal {
                        iconIdentifier = fp_newsletter_modal-plugin-modal
                        title = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_modal.name
                        description = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_modal.description
                        tt_content_defValues {
                            CType = list
                            list_type = fpnewslettermodal_modal
                        }
                    }
                }
                show = *
            }
        }'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'FpNewsletterModal',
        'Button',
        [
            \Rcdesign\FpNewsletterModal\Controller\ModalController::class => 'showButton'
        ],
        // non-cacheable actions
        [

        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    button {
                        iconIdentifier = fp_newsletter_modal-plugin-button
                        title = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_button.name
                        description = LLL:EXT:fp_newsletter_modal/Resources/Private/Language/locallang.xlf:tx_fp_newsletter_modal_button.description
                        tt_content_defValues {
                            CType = list
                            list_type = fpnewslettermodal_button
                        }
                    }
                }
                show = *
            }
        }'
    );
})();
