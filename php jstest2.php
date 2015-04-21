<html>
<head>
<style type="text/css">
  body 
  {
    font-size:16px;
    font-family:Helvetica;
    color:#dddddd;
    background-color:#111111;
  }
  .codebox
  {
    background-color:#222222;
    border-color:#444444;
    border-style:solid;
    border-width:1px;
    margin:auto;
    width:550px;
    padding:25px;
    margin-top:25px;
  }
  a 
  {
    color:#778899;
  }
</style>

<script>
function revealit3() {
  var $str='[protocol] '
+location.protocol
+' [host] '
+location.host
+' [port] '
+(location.port?location.port:'x')
+' [pathname] '
+location.pathname
+' [search] '
+(location.search?location.search:'x')
+' [hash] '+(location.hash?location.hash:'x');

	//void(alert(str));
  return $str;
};
</script>

</head>

<body>

<?
print "<p>below we call js script i hope</p>";
?>





<script type="text/javascript">

var $stuff=revealit3();

   window.dothis = 
function() {
	var $h = document.getElementById('pete');
	if($h) {
        $h.innerHTML = 'hi there <br>'; }

$h.appendChild(document.createTextNode(' AND wow man '+$stuff));

//$h.appendChild(document.createTextNode($stuff));

}

</script>


<p id="pete" class="codebox">ho
</p>

<script type="text/javascript">
window.dothis();
</script>

<p></p>

<p>
<a href="" onClick="javescript:void(alert('yo'))">click for fun</a>
</p>

<p> </p>

<p>
<a href="" onClick="javescript:void(alert(revealit3()))">and this!</a>
</p>

<p> &nbsp; </p>

<p id="john"></p>

<script type="text/javascript">
var da = new Date;
document.getElementById("john").innerHTML = 'date: '+ da.toDateString() + ' at ' + da.toTimeString();
</script>



</body>
</html>
 

