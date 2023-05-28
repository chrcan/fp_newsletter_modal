# TYPO3 Extension `fp_newsletter_modal`

This extension integrates the form of the extension fp_newsletter into a modal box, but you could also use it for another integration. 

|                  | Embedded dependency                                   |
|------------------|-------------------------------------------------------|
| **Repository:**  | https://github.com/bihor/fp_newsletter                |

To use the extension, the static template must be integrated and the ID of the fp_newsletter must be entered in the TypoScript setup.

.. code-block:: bash

	# Import fp_newsletter ID
	plugin.tx_fpnewslettermodal_modal{
    settings {
      fpNewsletterCeUid = 314
    }
  }

