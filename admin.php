<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta charset="utf-8">
		<title>Help Center || J'pura Flames</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
        
	</head>
	<body>
	
	<script type="text/javascript">
	function loadQuestions(){$.ajax({
		type: 'POST',
		url: 'connect.php',
        contentType: "json",
       data: {	
		},
		success: function (response) {
        // We get the element having id of display_info and put the response inside it
		$.each(response,function(i,val){
		   if (val.ANSWER=="" || val.ANSWER == null){
        $( '#Question').append('<div id="'+val.POST_ID+'">'+'<hr>'+'<h4>Q - '+val.QUESTION+'<br>'+'<h5>'+'A - '+'Question will be answered shortly.'+' <button class="btn btn-primary pull-right btnAnswer" type="button" id="'+val.POST_ID+'">'+'Answer'+'</button>'+'<hr>'+'</div>');                 
              }
              else{
        $( '#Question').append('<div id="'+val.POST_ID+'">'+'<hr>'+'<h4>Q - '+val.QUESTION+'<br>'+'<h5>'+'A - '+val.ANSWER+' <button class="btn btn-primary pull-right btnAnswer" type="button" id="'+val.POST_ID+'">Answer</button>'+'<hr>'+'</div>');                 
             }
            
             $('#'+val.POST_ID).click(function() {
               if($('#txtQuestion').val()==""){
                alert('You should type a answer first');
               }
               else{
                $.ajax({
                    type: "POST",
                    url: "saveadmin.php",
                    data:  {ANSWER: $('#txtQuestion').val(),POST_ID:val.POST_ID},
                    success: function(data) {
                        $("#Question ").append(data+"<br/>");
                    },
                });
                $('#txtQuestion').val('');
                }
            });
    })
    },
    error:function(e){
        alert(e);
        
    }
	   });
       };
       
       $(document).ready(function() {
        loadQuestions();
      $('#txtQuestion').onkeypress(function (){
          var limit=3000;
          characterLimitation($(this),characters);
      });
       });
	</script>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
              	<ul class="nav">
          			<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	</ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Featured</a></li>
                    <li><a href="#stories"><i class="glyphicon glyphicon-list"></i> Stories</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Saved</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></li>
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="http://www.jpuraflames.com"><h3>J'pura Flames</h3> <i class="glyphicon glyphicon-heart-empty"></i> Flames Crew</a>
                    </li>
                </ul>
              
              	<!-- tiny only nav-->

              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand logo">Q</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="logout.php"><span class="badge">Log out</span></a>
                      </li>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                          
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail" style="height: 200px;width: 200px;"><img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xft1/v/t1.0-9/10352288_845606542144611_2996720856968621143_n.png?oh=e890abdb42c93fcb77cb504446f16c5e&oe=5693CCD9&__gda__=1452836179_a12da0221c1ff8eea57aa141ba916a50" class="img-responsive"></div>
                                <div class="panel-body">
                                 
                                </div>
                              </div>

                           
 
                              <div class="well"> 
                                   <form class="form-horizontal" role="form">
                                    <h4>Post your answer here and select the right question to be posted</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea style="height: 80px;" id="txtQuestion" class="form-control" placeholder="Please answer wisely because they matter the most"></textarea>
                                    </div>
                                    
                                  </form>
                              </div>
                           

                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                               


                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Question and Answers</h4></div>
                                  <div class="panel-body">
                                    <img src="http://blogs.richardson.com/wp-content/uploads/2015/08/best-sales-question-300-150x150.jpg" class="img-circle pull-right"> <a href="https://www.facebook.com/Jpuraflames">J'pura Flames </a>related Questions
                                    <div class="clearfix"></div>
                                    <div id="Question"></div>
                                    <div id="Answer"></div>

                                  </div>
                               </div>


                            
                              
                            
                          </div>
                       </div><!--/row-->
                      
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="https://twitter.com/jpuraflames">Twitter</a> <small class="text-muted">|</small> <a href="http://www.jpuraflames.com">Facebook</a> <small class="text-muted">|</small> 
                          </div>
                        </div>
                      
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright 2015</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                      
                      <h4 class="text-center">
                      <a href="http://www.jpuraflames.com" target="ext">Help Center of J'puraFlames.com</a>
                      </h4>
                        
                      <hr>
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>



	<!-- script references -->
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>