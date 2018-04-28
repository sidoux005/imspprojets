<script>

		$(function(e)
		{
					$(".form_prix").on("submit",function(e)
					{
						e.preventDefault();
						
						$id_pro = $(this).children("input[name='id_pro']").val();
						$user = $(this).children("input[name='user']").val();
						$prix = $(this).children("input[name='prix']").val();
						
						var div = $(this).children(".message");
								
						
								
						$.post("traiterPropositionPrix.php",{"id_pro":$id_pro, "user":$user,"prix":$prix, "action":"proposer_prix"}, function(data,status)
							{
								//var class = (data.code_erreur === 1)?"alert-danger":"alert-success";
								//alert(data.code_erreur);
								
								div.append("<p class='alert alert-info'>"+data.msg+"</p>").show(1000).delay(5000).hide(500);
								
								
								
							},'json'
							);
						
						
					});
			
		});

</script>