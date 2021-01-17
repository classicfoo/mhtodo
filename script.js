function MarkAsDone(text) {
        var x = document.getElementById("title");
        var text = x.value;
        x.value = "X " + text.slice(2,text.length+1);
}