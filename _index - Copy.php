<!DOCTYPE html>
<html>
<head>
<script>
function loadXMLDoc(){
	var xmlhttp;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","ajax_info.txt",true);
	xmlhttp.send();
	document.getElementById("load-more").remove();
}
</script>
</head>
<body>
	<h2>Let AJAX change this text</h2>
	<p id="myDiv">Aenean vulputate eleifend tellus. Ut leo. Praesent adipiscing. In dui magna, posuere eget, vestibulum et, tempor auctor, justo...</p>
	<button id="load-more" type="button" onclick="loadXMLDoc()">Load more...</button>
</body>
</html>