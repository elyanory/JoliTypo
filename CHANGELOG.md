CHANGELOG
=========

### 0.1.1 (????-??-??) ###

* Fix double quote mess on complex DOM, the sibling fixer was runned after the simple regexp,
so his own regexp were useless
* `fixViaState` only replace the first matching occurrence, fix issue on multi-lines DOMText

### 0.1 (2013-08-29) ###

* Initial release, ready for test and production