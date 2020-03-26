function showInfo(data, tabletop) {
    console.log(data)
    for (var i = 0; i < data.length; i++) { $('.question-queue').append('<div class="brainly-questions"><div class="sg-box sg-box--with-shadow question-individual"><div class="sg-box__hole question-content"><div class="sg-content-box"><div class="sg-content-box__header"><ul class="sg-breadcrumb-list"><li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].subject + '</a></li><li class "sg-breadcrumb-list__element"> <li class="sg-breadcrumb-list__element"><a href="#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].Level + '</a></li><li class="sg-breadcrumb-list__element"><a href = "#" class = "sg-text sg-text--link sg-text--bold sg-text--gray">' + data[i].date + '</a> </li> </ul></div><div class = "sg-content-box__content question-text"><div class="sg-text">' + data[i].Content + '  </div> <div class = "sg-content-box__actions question-cta"><button class = "sg-button-primary answer-question" ><a target="_blank" href="' + data[i].LINK + '">Answer!</a></button></div></div></div></div>'); }
    for (var i = 0; i < data.length; i++) {
        $('.footer-count').append(
            '<div class="sg-footer__container"><div class="row"><div class="col-md-3"><div class="tree-count sg-flex sg-flex--full-height sg-flex--margin-right-s"><div class="sg-box sg-box--mint-secondary-light sg-box--no-border sg-box--xsmall-padding sg-box--no-min-height"><div class="sg-box__hole"><div class="sg-flex sg-flex--full-height sg-flex--align-items-center sg-flex--justify-content-center sg-flex--row"><div class="sg-flex sg-flex--margin-right-xs"><span class="sg-headline sg-headline--large sg-headline--mint-dark sg-headline--extra-bold">' + data[i].treecount + '</span></div><div class="sg-text sg-text--small sg-text--bold sg-text--to-center"><div include-html="data/target-text.txt"</div></div></div></div></div></div></div><div class="col-md-9"><h2 class="sg-headline sg-headline--extra-bold progress-text"><div include-html="footer-text.txt"></div></h2><div class="progress"><div class="progress-bar progress-bar-animated bg-success" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%"></div></div></div></div></div>');
    }
    for (var i = 0; i < data.length; i++) { $('.scoreboard').append('<li><span class="name"><a href="' + data[i].Link + '" target="_blank">' + data[i].topDonators + '</a></span><span class="points">' + data[i].treesDonated + '</span></li><hr>'); }
    var element = document.getElementById("spinner"); element.parentNode.removeChild(element);
}