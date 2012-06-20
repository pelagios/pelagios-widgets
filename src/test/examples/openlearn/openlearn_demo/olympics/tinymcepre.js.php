
    function mce_saveOnSubmit(id) {
        var prevOnSubmit = document.getElementById(id).form.onsubmit;
        document.getElementById(id).form.onsubmit = function() {

            /*
             * See Bug 8929;
             * Need to toggle the editor, otherwise content entered in the plain text box
             * will be overwritten by the rich text editor.
             *
             */
            var elements = document.getElementById(id).form.elements;
            for(i=0; i<elements.length; i++){
                if (elements[i].className.indexOf('form-textarea-advanced') != -1) {
                    tinyMCE.execCommand('mceToggleEditor',false,elements[i].id);
                }
            }

            tinyMCE.triggerSave();

            /*
             * This logic below is designed to trigger a programmed onSubmit() on a form if existed.
             * If there is none, then tinyMCE has done its job and the form should submit.
             *
             */
            var ret = true;
            if ((prevOnSubmit !== null) && (prevOnSubmit !== undefined)) {
                if (prevOnSubmit()) {
                  ret = true;
                  prevOnSubmit = null;
                } else {
                  ret = false;
                }
            }
            return ret;
        };
    }