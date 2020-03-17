<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title></title>
	</head>
	<body>
		<form id="form" method="POST" action="save_data.php">
			<input type="text" name="text_field[]">
			<button type="submit">SUBMIT</button>
		</form>
		<button onclick="add_field()">ADD FIELD</button>
		<script>
			function add_field(){
			    
				var x = document.getElementById("form");

	            // create an input field to insert
				var new_field = document.createElement("input");

				// set input field data type to text
				new_field.setAttribute("type", "text");

				// set input field name 
				new_field.setAttribute("name", "text_field[]");

                // select last position to insert element before it
				var pos = x.childElementCount;
				
				// insert element
				x.insertBefore(new_field, x.childNodes[pos]);
			}
		</script>
	</body>
</html>
