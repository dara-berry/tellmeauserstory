<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agile User Story Generator">
    <meta name="author" content="Aeryith">
    <link rel="shortcut icon" href="/media/book_open.ico">

    <title>Agile User Story Generator - Tell Me a User Story</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/superhero-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>

<div class="jumbotron">
    <div class="container">
        <h1>Tell Me a User Story</h1>
        <p>This application is an <strong>agile user story</strong> generator designed to help people write better agile user stories. This application is completely free. No signing up. No adds. Just pure learning and fun.</p>
        <h2> Try it today!</h2>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <div class="well">
            <form class="form-horizontal" id="storyGen" method="post" action="processContact.php">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Agile User Story Generator</legend>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label col-lg-2" for="who">Who</label>
                        <div class="controls">
                            <input id="who" name="who" type="text" placeholder="End User" class="input-xlarge col-lg-10" required="required">
                            <p class="help-block col-lg-offset-2">This is the end user that will use the new widget/function. <br />Example: Registered Customer</p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label col-lg-2" for="what">What</label>
                        <div class="controls">
                            <input id="what" name="what" type="text" placeholder="New widget/function" class="input-xlarge col-lg-10" required="required">
                            <p class="help-block col-lg-offset-2">High level description of newly added functionality. This does not exist yet. <br />Example: add shipping address to user profile</p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label col-lg-2" for="why">Why</label>
                        <div class="controls">
                            <input id="why" name="why" type="text" placeholder="Added value" class="input-xlarge col-lg-10" required="required">
                            <p class="help-block col-lg-offset-2">Added value to end user. <br />Example: get orders shipped to a new address</p>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                        <label class="control-label col-lg-2" for="select">Story Type</label>
                        <div class="controls">
                            <select id="storyType" name="type" class="col-lg-4">
                                <option value="vanilla" selected>Vanilla, Please</option>
                                <option value="fairy">Fairy Tale</option>
                                <option value="pirate">Pirate Adventure</option>
                            </select>
                            <button id="submit" name="button" class="btn btn-large btn-primary offset2 col-lg-offset-2 col-lg-4">Generate Story</button>
                        </div>

                    </div>


                </fieldset>
            </form>
            </div>
        </div> <!-- end span6 -->

        <div class="col-md-6">
           <!-- Generated story appears here -->
            <div id="storyArticle" style="display: none">
                <p>This was hidden.</p>
            </div>


        </div> <!-- end span6 -->
    </div> <!-- end .row -->


    <hr>

    <footer>
        <?php function auto_copyright($year = 'auto'){
             if(intval($year) == 'auto'){ $year = date('Y'); }
             if(intval($year) == date('Y')){ echo intval($year); }
             if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
             if(intval($year) > date('Y')){ echo date('Y'); }
         } ?>
        <p>©  <?php auto_copyright(); ?> Tell Me a User Story | <a href="https://github.com/aeryith/tellmeauserstory"><span class="glyphicon glyphicon-cloud-download"></span> GitHub</a> | <button class="btn-link" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-envelope"></span> Aeryith</button>

        <!-- Modal -->
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Send a Message</h4>
                    </div>
                    <div class="modal-body">
                        <form id="contactForm" class="form-horizontal clearfix" style="margin: 0 15px" name="contactform">

                            <div class="form-group">
                               <label class="control-label col-lg-2" for="senderName">Your Name</label>
                               <input type="text" class="col-lg-10" name="senderName" id="name" placeholder="Please type your name" required="required" maxlength="40" />
                            </div>

                            <div class="form-group">
                               <label class="control-label col-lg-2" for="senderEmail">Your Email</label>
                               <input type="email" class="col-lg-10" name="senderEmail" id="email" placeholder="Please type your email address" required="required" maxlength="50" />
                            </div>

                            <div class="form-group">
                               <textarea name="message" class="col-lg-12" id="message" placeholder="Please type your message" required="required" cols="80" rows="10" maxlength="10000"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel" name="cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" id="sendMessage" name="sendMessage" class="btn btn-primary">Send Email</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="pull-right clearfix">
            <p style="font-size: .8em; line-height: 1.5em; text-align: right"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br />This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" rel="dc:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.aeryith.com/" property="cc:attributionName" rel="cc:attributionURL">Aeryith</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</p>
        </div>
    </footer>
</div> <!-- /container -->

<!-- Hidden DIVS
================================================== -->
<div id="sendingMessage" class="statusMessage" style="display: none"><p>Sending your message. Please wait...</p></div>
<div id="successMessage" class="statusMessage" style="display: none"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
<div id="failureMessage" class="statusMessage" style="display: none"><p>There was a problem sending your message. Please try again.</p></div>
<div id="incompleteMessage" class="statusMessage" style="display: none"><p>Please complete all the fields in the form before sending.</p></div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $("button#sendMessage").click(function(){
            $.ajax({
                type: "POST",
                url: "processContact.php", //sends email
                data: $('form#contactForm').serialize(),
                success: function() {
                    $('#contact .modal-body').html("<div id='message'></div>");
                    $('#message').html("<h2>Contact Form Submitted!</h2>")
                        .append("<p>We will be in touch soon.</p>")
                        .hide()
                        .fadeIn(1500, function() {
                            $('#message').append("<span class=\"glyphicon glyphicon-ok-sign\"></span>");
                        });

                    $('#contact .modal-footer').html("<button type=\"button\" id=\"cancel\" name=\"cancel\" class=\"btn btn-default\" data-dismiss=\"modal\">OK</button>");
                },
                error: function(obj, status){
                    alert(status);
                }
            });
        });

        return false;
    });

    $("button#submit").click(function(){
        console.log('Submitting story.');
        $.ajax({
            type: "POST",
            url: "processStory.php", //generates story
            data: $('form#storyGen').serialize(),
            success: function(msg){

                $('#storyArticle').html(msg);
                $( "#storyArticle").fadeIn( "slow" );
                console.log('This was returned: ' + msg);


            },
            error: function(obj, status){
                $('#storyArticle').html("<p>Sorry, something went wrong. We'll look into this right away!</p>");
                console.log('Something went wrong. ' + status );
            }
        });
        return false;
    });

    //This clears the text box fields when the contact form is closed
    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
    });
</script>

</body>
</html>