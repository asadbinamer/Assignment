<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});


</script>

<script type="text/javascript">
  $(document).ready(function () {

   $("input[id='check']").change(function () {

      var maxAllowed = 1;

      var cnt = $("input[id='check']:checked").length;

      if (cnt > maxAllowed)

      {

         $(this).prop("checked", "");

         alert('Select maximum ' + maxAllowed + ' answer!');

     }

  });

});

</script>

<!-- <script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" class="form-control" name="answer[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script> -->
       
    </head>
    <body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <ul class="nav navbar-nav">
   
    <li><a href="#">Home</a></li>
      <li><a href="/questionairs">Questionairs</a></li>
      <li><a href="#">Results</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Profile</a></li>
    <li><a href="#">Logout</a></li>
    </ul>
    </div>
    </nav>
   <div class="container">
   <div class="row">
   <div class="col-sm-2">
  <label class="col-sm-12">Question type</label>
  </div>
  <div class="col-sm-3">
  <select class="form-control" name="type" value="type">
    <option value="form1">Text</option>
    <option value="form2">Multiple Choice(Single Option)</option>
    <option value="form3">Multiple Choice(Multiple Option)</option>
  </select>
  </div>
  </div>
  </div>

<br><br>
<div class="container">

<form class="form1 box" action="/text/{{$question->id}}" method="POST">
{{csrf_field()}}

<div id="sections">
  <div class="section">
  

	<div class="container">
	      <div class="row">
        <div class="col-sm-4">
         <label for="answer">Question</label>

      
             <input class="form-control" name="question[]" id="answer" value="" type="text" placeholder="Enter Answer" required />
       </div>
	         
			 <div class="col-sm-4">
		     <label for="answer">Answer</label>

			
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required />
			 </div>
			 <div class="col-sm-4">
			 </br></br>
			 
              <p><a href="#" class='remove'>Delete Question</a></p>
			  </div>
			  </div>
		    </div>
			

  
  </div>
</div>
<div class="container">
<p><a href="#" class='addsection'>Add Question</a></p>
<input class="btn btn-primary" type="submit" value="Save">
</div>

</form>


</div>

<div class="container">
<form class="form2 box" action="/multiple/{{$question->id}}" method="POST">

{{csrf_field()}}

<div id="">
  <div class="">
  
    <fieldset>
	<div class="container">
	      <div class="row">
	         <div class="col-sm-4">
             <label for="question">Question</label>
			 
			
             <input class="form-control" name="question[]" id="question" value="" type="text" placeholder="Enter Question" required />
			 </div>
			 <div class="col-sm-4">
		     <label for="answer">Answer</label>

		<!-- <div class="input_fields_wrap"> -->
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required/><input type="checkbox" name="correct[]" value="1" id="check">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="2" id="check">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="3" id="check">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="4" id="check">Correct
             
              <!-- <button class="add_field_button btn btn-primary">Add More Fields</button>
             </div> -->
			 </div>

			 <div class="col-sm-4">
			 </br></br>
			 
            <!--   <p><a href="#" class='remove'>Delete Question</a></p> -->

			  </div>
			  </div>
		    </div>
			

    </fieldset>
  </div>
</div>
<div class="container">
<!-- <p><a href="#" class='addsection1'>Add Question</a></p> -->
<input class="btn btn-primary" type="submit" value="Save">
</div>
</form>
</div>

<div class="container">
<form class="form3 box" action="/multiplechoice/{{$question->id}}" method="POST">
{{csrf_field()}}
<div id="">
  <div class="">
  
    <fieldset>
  <div class="container">
        <div class="row">
           <div class="col-sm-4">
             <label for="question">Question</label>
       
      
             <input class="form-control" name="question[]" id="question" value="" type="text" placeholder="Enter Question"/>
       </div>
       <div class="col-sm-4">
         <label for="answer">Answer</label>

    <!-- <div class="input_fields_wrap"> -->
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required/><input type="checkbox" name="correct[]" value="1">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="2">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="3">Correct<br>
             <input class="form-control" name="answer[]" id="answer" value="" type="text" placeholder="Enter Answer" required /><input type="checkbox" name="correct[]" value="4">Correct
             
              <!-- <button class="add_field_button btn btn-primary">Add More Fields</button>
             </div> -->
       </div>

       <div class="col-sm-4">
       </br></br>
       
            <!--   <p><a href="#" class='remove'>Delete Question</a></p> -->

        </div>
        </div>
        </div>
      

    </fieldset>
  </div>
</div>
<div class="container">
<!-- <p><a href="#" class='addsection1'>Add Question</a></p> -->
<input class="btn btn-primary" type="submit" value="Save">
</div>
</form>
</div>





<script src="{{ asset('/js/jquery.js') }}"></script>  
<script src="{{ asset('/js/apps.js') }}"></script>  
<!-- <script src="{{ asset('/js/app1.js') }}"></script>  
<script src="{{ asset('/js/app2.js') }}"></script>   -->
</body>
</html>
