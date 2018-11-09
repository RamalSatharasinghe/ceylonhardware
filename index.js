function my_func(){
	var temp1 = document.sign.name1.value;
	var temp2 = document.sign.name2.value;
	var temp3 = document.sign.pass1.value;
	var temp4 = document.sign.pass2.value;
	var temp5 = document.sign.mail.value;
	var temp6 = document.sign.num.value;
	var temp7 = document.sign.add.value;
	var temp8 = document.sign.occu.value;
	
	if(temp1==""||temp2==""||temp3==""||temp4==""||temp5==""||temp6==""||temp7==""||temp8=="")
	{
		alert("Incomplete form");
		return false;
	}
}