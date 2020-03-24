function showInfo(data, tabletop) {
    console.log(data)
    for (var i = 0; i < data.length; i++) {
        $('.question-queue').append(
           '<p class="content">' + data[i].Content + '</p>'
    
            );


    }
    var element = document.getElementById("spinner");
    element.parentNode.removeChild(element);
}

