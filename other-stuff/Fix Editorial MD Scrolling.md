# GET NORMAL DESKTOP SCROLL Editorial's Markdown Exported as html with style.

## Issue: Preview - Copy HTML - Document with Styling. And Scrolling behavior in desktop browsers.

The amazing **Editorial IOS app** (see)[http://omz-software.com/editorial/] has an excellent Markdown preview from which you can copy the html with styling to the clipboard. You can paste this HTML into a new file, BUT in my experience, **it will not scroll correctly in MY desktop browsers.**

### FIX: as of this date, it works for me. (No guarantees for you ;)

IN THE HEAD, CSS BLOCK OF THE EXPORTED HTML DOC, COMMENT OUT THESE ITEMS:

This change:   
` //overflow: hidden; `


Look in ` #content-wrapper ` or anywhere else you find them, this change:   
` //overflow-y: scroll; `   
**AND**    
` //overflow-x: hidden; `


Also, in CSS ` pre ` or maybe elsewhere in CSS, this change:   
` //whites-space: nowrap; `


These should give expexted results on desktop browsers. No Guarantees.
