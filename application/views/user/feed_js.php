<script>
	var maxId =  $("a.more").attr("id");	
	$("a.more").click(function(){
		$(this).hide(5,function(){
			$("#loading").hide();
		});
		$.get(url,function(data,status){
			//alert(status);
			$("#loading").show('fast',function(){
				$("#more"+maxId).remove();
				$("#tagsul").append(data);
			});
		});
	});
	
</script>