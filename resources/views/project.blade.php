@extends('layouts.master')

@section('customStyle')

	<style type="text/css">

		#owl-demo .item{
		  background: #a1def8;
		  padding: 30px 0px;
		  display: block;
		  margin: 5px;
		  color: #FFF;
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  text-align: center;
		}


	</style>

@endsection


@section('content')

Project template

<div class="container">
	
	<div id="owl-demo" class="owl-carousel">
	</div>

</div>


@endsection


@section('javascript')

<script>
	$(document).ready(function() {
	 
	  $("#owl-demo").owlCarousel({
	    jsonPath : url('json/customData.json'),
	    jsonSuccess : customDataSuccess
	  });
	 
	  function customDataSuccess(data){
	    var content = "";
	    for(var i in data["items"]){
	       
	       var img = data["items"][i].img;
	       var alt = data["items"][i].alt;
	 
	       content += "<img src=\"" +img+ "\" alt=\"" +alt+ "\">";

	    }
	    $("#owl-demo").html(content);
	  }
	 
	});
</script>



@endsection