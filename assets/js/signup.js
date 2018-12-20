function checkForm(form){
    var re=/^[\w ]+$/;
    if(!re.test(form.fname.value)){
       alert("Error: Input contains invalid characters!");
        form.fname.focus();
        return false;
       }
    var phonen=/^[0-9]{10}$/;
    if(!phonen.test(form.phone.value)){
        alert("Enter valid phone number");
        form.phone.focus();
        return false;
        }
    if(!form.phone.value.isInteger()){
       alert("Enter Numbers Only");
        form.phone.focus();
        return false;
       }
}