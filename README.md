# Block JSON Examples

## Example One

`script` setting in `block.json` set to a file path.

✅ `view.js` loads on page view.
✅ `view.js` does not load on other page views.
✅ `view.js` loads in editor.

## Example Two

`viewScript` setting in `block.json` set to a file path.

✅ `view.js` loads on page.
✅ `view.js` does not load on other pages.
✅ `view.js` does not load in editor.

## Example Three

`viewScript` setting in `block.json` set to a registered script handle.

✅ `view.js` loads on page.
✅ `view.js` does not load on other pages.
✅ `view.js` does not load in editor.

## Example Four

`script` setting in `block.json` set to a registered script handle.

✅ `view.js` loads on page view.
✅ `view.js` does not load on other page views.
✅ `view.js` loads in editor.

## Example Five

* `script` setting in `block.json` set to a registered script handle.
* `render_callback` set in PHP.

✅ `view.js` loads on page view.
✅ `view.js` does not load on other page views.
✅ `view.js` loads in editor.

## Example Six

* `viewScript` setting in `block.json` set to a registered script handle.
* `render_callback` set in PHP.
* Render callback enqueues `view.js` script.

✅ `view.js` loads on page view.
✅ `view.js` does not load on other page views.
✅ `view.js` loads in editor.
