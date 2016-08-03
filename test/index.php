<script src="jquery.js"></script>
<script src="template.js"></script>
<script>
$(function (){
	
	var tpl = $('#tpl').html();
	var a = template(tpl, {name: 'abc', title: '123'});
	$("#test").html(a);
});
</script>
<script id="tpl" type="text/html">
<ul>
    <li>{{name}}</li>
	<li>{{title}}</li>
</ul>
</script>

<div id="test">
</div>
