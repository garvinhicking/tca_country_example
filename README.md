# TCA type=country

This is a dummy extension to showcase this patch:

https://review.typo3.org/c/Packages/TYPO3.CMS/+/86177

It is needed to use this extension.

# Usage

* Activate extension
* Setup or use an existing storage page and insert a few records of type "License"
* Insert the "License" plugin on a page
* Include the TypoScript in your root page (sys_template, no Site Set Yet). Note that `storagePid` is currently bypassed through `setRespectStoragePage(false)` for simplicity.
* View the page with the plugin, check out the List/New/Edit actions
