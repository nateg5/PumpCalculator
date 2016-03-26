function getSchoolGrades()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("grade").innerHTML="<select name='grade'>" + xmlhttp.responseText + "</select>";
    }
  }
xmlhttp.open("GET","wp-content/themes/chalkboard/ajax/getSchoolGrades.php?school_id=" + document.getElementById("school").value + "",true);
xmlhttp.send();
}

function updateSubtotal(updateId, subtotalId, supplyId, oldQuantity, supplyPrice)
{
    newQuantity = document.getElementById(supplyId).value;
	
	if(isNaN(newQuantity) || newQuantity <= 0)
	{
	    newQuantity = "0";
		
		document.getElementById(supplyId).value = newQuantity;
	}
	
	document.getElementById(subtotalId).innerHTML = "$" + (newQuantity * supplyPrice).toFixed(2);
	
	subtotal = document.getElementById("subtotal").innerHTML.substring(1);
	
	subtotal -= (oldQuantity * supplyPrice);
	
	subtotal += (newQuantity * supplyPrice);
	
	document.getElementById("subtotal").innerHTML = "$" + subtotal.toFixed(2);
	
	document.getElementById(updateId).innerHTML = "<a href=\"javascript:updateSubtotal('" + updateId + "', '" + subtotalId + "', '" + supplyId + "', " + newQuantity + ", " + supplyPrice + ")\">Update</a>";
}