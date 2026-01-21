TYPO3 TER Upload with tailor test
=================================

This repository provides a test extension to verify automatic
extension publishing to the TYPO3 Extension Repository (TER)
using `tailor`.

To verify extended bundling stuff, this extension contains a
`static` folder having a static lib (dummy) included and also
a basic build step to include a composer package and thus the
`vendor` folder to simulate how a real extension would do that.

A GitHub worklow is also provide to mimic the workflow how it
would be done for real extension publishing, with an additional
verification step to download the TER Archive as integration
test.