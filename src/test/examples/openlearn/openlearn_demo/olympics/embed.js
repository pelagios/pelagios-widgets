function showAPIURL(format,label,item){
    // first toggle all the ticks
    var formats = new Array('png','jpg','gif','js','json','xml','go','do');
    for (f in formats) {
        var img = document.getElementById(label+formats[f]+'tick');
        if (img != null) {
            img.className = 'tick embedhidden';
        }
    }
    var img = document.getElementById(label+format+'tick');
    target = document.getElementById('embedoutputform'+label);
    if (target.outputtext.value == item+'.'+format){ // this is where you've clicked the same thing twice
        img.className += ' embedhidden';
        target.outputtext.value=''; 
    } else {
        target.outputtext.value=item+'.'+format;
        img.className = img.className.replace(new RegExp(' ?embedhidden'), '');
    }
}