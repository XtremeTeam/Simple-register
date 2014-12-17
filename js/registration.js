
$(document).ready(function() {
$("#register").click(function() {
var username = $("#username").val();
var email = $("#email").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();
if (username == '' || email == '' || password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
username1: username,
email1: email,
password1: password
}, function(data) {
if (data == 'User Created Successfully.') {
$("form")[0].reset();
}
alert(data);
});
}
});
});