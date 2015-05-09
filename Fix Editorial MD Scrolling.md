# GET NORMAL DESKTOP SCROLL with an Editorial Markdown file Exported as `html with styling` .

## Issue: `Preview - Copy HTML - Document with Styling`, Looks cool, but Scrolling behavior in desktop browsers is messed up.

The amazing **Editorial IOS app** [see](http://omz-software.com/editorial/) has an excellent Markdown preview from which you can copy the **html with styling** to the clipboard. You can paste this HTML into a new file, BUT in my experience, **it will not scroll correctly in MY desktop browsers.**

# To FIX Scrolling: as of this date, it works for me. (No guarantees for you ;)

## In the HEAD section, CSS BLOCK OF THE EXPORTED HTML DOC, COMMENT OUT THESE ITEMS

* This change:   
` //overflow: hidden; `

* Look in ` #content-wrapper ` or anywhere else you find these, this change:   
` //overflow-y: scroll; `   
` AND`    
` //overflow-x: hidden; `

* Also, in CSS ` pre ` or maybe elsewhere in CSS, this change:   
` //whites-space: nowrap; `


That should give expexted results on desktop browsers. No Guarantees.
