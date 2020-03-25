function showInfo(data, tabletop) {
    console.log(data)
    for (var i = 0; i < data.length; i++) {
        $('.question-queue').append(
            '<div class="brainly-questions"><div class="sg-box sg-box--with-shadow question-individual"><div class="sg-box__hole question-content"><div class="sg-content-box"><div class="sg-content-box__header"><ul class="sg-breadcrumb-list"><li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].subject + '</a></li><li class "sg-breadcrumb-list__element"> <li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].Level + '</a></li><li class="sg-breadcrumb-list__element"><a href = "#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].date + '</a> </li> </ul></div><div class = "sg-content-box__content question-text"><div class="sg-text">' + data[i].Content + '  </div> <div class = "sg-content-box__actions question-cta"><button class = "sg-button-primary answer-question" ><a target="_blank" href="' + data[i].LINK + '">Answer!</a></button></div></div></div></div>'

        );


    }