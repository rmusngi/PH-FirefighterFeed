<!DOCTYPE html>
<html lang="en">


<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $(".jump").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Brainly StyleGuide-->
    <link rel="icon" type="image/x-icon"
        href="https://styleguide.brainly.ph/images/favicons/brainly/favicon-0c2222f36b.ico">
    <link href="https://styleguide.brainly.com/149.0.0/style-guide.css" rel="stylesheet" />
    <!--End of Styleguide-->
    <link href="css/style.css" rel="stylesheet">
    <!--TableTop-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.1/tabletop.min.js'></script>
    <script type='text/javascript'>
        var publicSpreadsheetUrl =
            'https://docs.google.com/spreadsheets/d/1FMojb1FVxkjzWpwKUzwTAwtiiKKdEe3FnSCJT_g-6Fk/pubhtml';

        function init() {
            Tabletop.init({
                key: publicSpreadsheetUrl,
                callback: showInfo,
                simpleSheet: true
            })
        }
        window.addEventListener('DOMContentLoaded', init)
    </script>
    <title>Plant a Tree with Brainly</title>
</head>

<body>
    <!--Main Questions-->
    <div class="container">
        <div class="row">
            <div class="col-md-2 subject-area" id="subject-area">
                <div class="subject-drop">
                    <div class="sg-select subject-select">
                        <select class="sg-select__element pick-subject" onchange="location=this.value;">
                            <option value="index.html" selected="selected">All Subjects</option>
                            <option value="filipino.html">Filipino</option>
                            <option value="math.html">Math</option>
                            <option value="ap.html">AP</option>
                            <option value="english.html">English</option>
                            <option value="science.html">Science</option>
                            <option value="physics.html">Physics</option>
                            <option value="chemistry.html">Chemistry</option>
                            <option value="biology.html">Biology</option>
                            <option value="history.html">History</option>
                            <option value="geography.html">Geography</option>
                            <option value="esp.html">ESP</option>
                            <option value="economics.html">Economics</option>
                            <option value="tle.html">TLE</option>
                            <option value="int-science.html">Integrated Science</option>
                            <option value="health.html">Health</option>
                            <option value="art.html">Art</option>
                            <option value="pe.html">PE</option>
                            <option value="religion.html">Religion</option>
                            <option value="computer.html">Computer</option>
                        </select>
                    </div>
                </div>
                <div class="subjects">
                    <div class="subject-left"><a href="index.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-all"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">All subjects</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="filipino.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-language"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Filipino</div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="math.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-mathematics"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Math</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="ap.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-social-science"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">AP</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left">
                        <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                <use xlink:href="#icon-subject-english"></use>
                            </svg></div>
                        <div class="subject-name"><a href="english.html">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">English</div>
                        </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="science.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-life-science"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Science</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="physics.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-physics"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Physics</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="chemistry.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-chemistry"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Chemistry</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="biology.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-environment"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Biology</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="history.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-history"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">History</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="geography.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-geography"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Geography</div>
                            </div>
                    </div>
                    <div class="subject-left"><a href="esp.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-philosophy"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">ESP</div>
                            </div>
                    </div>
                    <div class="subject-left"><a href="economics.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-economics"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Economics</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="tle.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-technology"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">TLE</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="int-science.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-science"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Int. Science</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="health.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-health"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Health </div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left">
                        <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                <use xlink:href="#icon-subject-music"></use>
                            </svg></div>
                        <div class="subject-name"><a href="music.html">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Music</div>
                        </div>
                        </a>
                    </div>
                    <div class="subject-left">
                        <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                <use xlink:href="#icon-subject-art"></use>
                            </svg></div>
                        <div class="subject-name"><a href="art.html">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Art</div>
                        </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="pe.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-physical-education"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">PE</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="religion.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-religion"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Religion</div>
                            </div>
                        </a>
                    </div>
                    <div class="subject-left"><a href="computer.html">
                            <div class="subject-icon"><svg class="sg-subject-icon sg-subject-icon--small">
                                    <use xlink:href="#icon-subject-informatics"></use>
                                </svg></div>
                            <div class="subject-name">
                                <div class="sg-text sg-text--small sg-text--gray sg-text--bold">Computer</div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="list-q" id="#qlist">
                <div class="question-queue">
                </div>
                <div class="sg-spinner-container" id="spinner">
                    <div class="sg-spinner sg-spinner"></div><span class="span-loading">LOADING QUESTIONS</span>
                </div>
                <button class="sg-button-primary sg-button-primary--alt" id="loadMore">Load More</button>
            </div>
        </div>
        <div class="col-md-2">
            <div class="data">
                <div class="sg-box sg-box--no-border sg-box--full sg-box--no-min-height sg-box--with-shadow">
                    <div class="sg-box__hole"><img src="img\tree.png" height="100px" alt="">
                        <div class="stats">
                            <h1 class="sg-text sg-text-bit sg-text-bit--medium">Important Reminder. PLEASE READ</h1>
                            <p class="sg-text">Please only answer on this feed. If you answer questions outside this
                                feed, your answers will not be counted</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <!--Brainly Scripts-->
    <script src="https://styleguide.brainly.com/images/icons-36daf88c55.js"></script>
    <script src="https://styleguide.brainly.com/images/subjects-icons-a01adb2d40.js"></script>
    <script src="https://styleguide.brainly.com/images/subjects-mono-icons-341dc27120.js"></script>
    <script src="https://styleguide.brainly.com/images/math-symbols-icons-7c9d6883f2.js"></script>

    <!--Scripts-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>

    <script src="js/backtotop.js"></script>
    <script src="js/scoreboard.js"></script>
    <script src="js/tabletop.js"></script>
    <script src="js/loader.js"></script>
</body>

</html>