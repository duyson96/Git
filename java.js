function onclick() {
	if(document.form1.txtma.value == ""){
		alert("không được bỏ trống");
		document.form1.txtma.focus();
		return false;
	}
	return true;
}