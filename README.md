# TYPO3 Extension `fp_newsletter_modal`

This extension integrates the form of the extension fp_newsletter into a modal box, but you could also use it for another integration. 

|                  | Embedded dependency                                   |
|------------------|-------------------------------------------------------|
| **Repository:**  | https://github.com/bihor/fp_newsletter                |

To use the extension, the static template must be included and the ID of the plugin.tx_fpnewslettermodal_button.settings.modalCeUid = (the ID of FP Newsletter: Modal) must be entered in the TypoScript setup of your site package.

```ts
	// Import fp_newsletter ID
	plugin.tx_fpnewslettermodal_button {
    settings {
      fpNewsletterCeUid = 314
    }
  }
```
In the TypoScript of the fp_newsletter_modal you must also enter the source = ID of the fp-newsletter!
Unfortunately, I did not succeed in transferring the ID automatically via TS.

```ts
// lib.fpNewsletterModal.renderContent = RECORDS
// lib.fpNewsletterModal.renderContent {
//     tables = tt_content
//     source = TEXT
//     source.data = current
//     dontCheckPid = 1
// }

lib.fpNewsletterModal.renderContent = RECORDS
lib.fpNewsletterModal.renderContent {
    tables = tt_content
    source = 314
    dontCheckPid = 1
}
```