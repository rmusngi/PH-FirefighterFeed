function showInfo(data, tabletop) {
    console.log(data)
    for (var i = 0; i < data.length; i++) {
        $('.question-queue').append(
           '<div class="brainly-questions"><div class="sg-box sg-box--with-shadow question-individual"><div class="sg-box__hole question-content"><div class="sg-content-box"><div class="sg-content-box__header"><ul class="sg-breadcrumb-list"><li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].subject + '</a></li><li class "sg-breadcrumb-list__element"> <li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].Level + '</a></li><li class="sg-breadcrumb-list__element"><a href = "#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].date + '</a> </li> </ul></div><div class = "sg-content-box__content question-text"><div class="sg-text">' + data[i].Content + '  </div> <div class = "sg-content-box__actions question-cta"><button class = "sg-button-primary answer-question" ><a data-toggle="modal" data-target="#exampleModal">Answer!</a></button></div></div></div></div><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <iframe src="' + data[i].LINK + '"></iframe> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button> </div> </div> </div> </div>'
    
            );


    }
    var element = document.getElementById("spinner");
    element.parentNode.removeChild(element);
}