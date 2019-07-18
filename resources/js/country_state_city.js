	
<script type="text/javascript">
	$(document).ready(function(){
		$("#country").change(function(){
			var country_id=$(this).val();
			// alert(country_id);
			$.ajax({ 
				type:"GET",
				url:"{{url('/getStateList')}}?country_id="+country_id,
				success:function(data)
				{	
					//console.log('in loop',data);
					if(data){
						$("#state").empty();
						$("#state").append('<option>Select</option>');
						$.each(data,function(k,v){
                  	 $("#state").append('<option value="'+v.state_code+'">'+v.state_name+'</option>');
                  	});
					}else{
						$("#state").empty();
					}
				}
			});
		});
		$("#state").change(function(){
			var state_id=$(this).val();
			 $.ajax({ 
			 	type:"GET",
			 	url:"{{url('/getCityList')}}?state_id="+state_id,
			 	success:function(data)
			 	{	
				  	$("#state").append('<option>Select</option>');
				  	$.each(data,function(k,v){
                   	 $("#city").append('<option value="'+v.city_code+'">'+v.city_name+'</option>');
                 });

				  }
				});
			});
	});
</script> 