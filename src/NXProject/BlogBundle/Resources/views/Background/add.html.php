<html>
<head>
	<title>博客后台</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	<script>
		$(document).ready(function() {
			var categoryId = $("#form_category").val();
			if(categoryId != 0) {
				initTags(categoryId);	
			}

			$("#form_category").change(function() {
				var categoryId = $("#form_category").val();
				if(categoryId != 0) {
					initTags(categoryId);	
				}
			});
		});

		function initTags(categoryId) {
			$.ajax({
				type: "post",
				url: "http://symfony2.dev/api/getTags",
				data: {"categoryId": categoryId},
				success: function(result) {
					if(result.status == 1) {
						$("#form_tags").empty();
						$("#form_tags").append('<option value="0">请选择</option>');
						for(var tag in result.data) {
							$("#form_tags").append('<option value="' + tag + '">' + result.data[tag] + '</option>');
						}
					}
				},
				dataType: "json",
			});
		}
	</script>
</head>
<body>
<form action="" method ="post">
	<?php echo $view['form']->start($form); ?>
    <?php echo $view['form']->errors($form); ?>
		
	<?php echo $view['form']->row($form['title']); ?>
	<?php echo $view['form']->row($form['category']); ?>
	<?php echo $view['form']->end($form); ?>
	<input type="submit" value="添加"/>
</form>
</body>
</html>
