[javascript]
$(document).ready(function(){
$("#demosMenu").change(function(){
window.location.href = $(this).find("option:selected").attr("id") + ‘.html’;
});
});</p>
<p style="text-align: left;">[/javascript]