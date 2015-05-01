# GET NORMAL DESKTOP SCROLL FROM Editorial Markdown Exported as html with style.

## Issue: Preview - Copy HTML - Document with Styling, amd Scrolling behavior.

Editorial IOS app (see)[http://omz-software.com/editorial/] has an excellent Markdown preview from which you can copy the **html with style** to the clipboard. Paste into a new file as html. IMHO, **This file does now scroll correctly in desktop browsers.** I have found that the following changes to said pasted html file can fix that.  

### FIX as of this date, it works for me, no guarantees for you ;)

**IN THE HEAD, CSS BLOCK OF THE EXPORTED HTML DOC, COMMENT OUT THESE ITEMS**   


* this change
`  //overflow: hidden; `

* look in ` #content-wrapper ` or anywhere else you find these, make it like:
`  //overflow-y: scroll; `    
`  //overflow-x: hidden; `    
    
* Also, in CSS ` pre ` or maybe elsewhere in CSS, do this
`  //whites-space: nowrap; `    


These should give expexted results on desktop browsers. No Guarantees.