$(document).ready(function () {
  $("#error_handling").hide();


  /* Create */
  $("#btnSave").click(function (e) {
    let username = $("#username").val();
    let password = $("#password").val();
    let confirm_password = $("#confirm_password").val();
    let email = $("#email").val();
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();

    $.ajax({
      type: "POST",
      datatype: "JSON",
      url: "./_includes/process.inc.php",
      data: {
        username: username,
        password: password,
        confirm_password: confirm_password,
        email: email,
        first_name: first_name,
        last_name: last_name,
        isClicked: true,
      },
      success: function (response) {
        let data = JSON.parse(response);

        if (data.responseCode == 404) {
          $("#error_handling").show();
          $("#error_handling").html("Empty! Input all the fields");
        } else if (data.responseCode == 300) {
          $("#error_handling").show();
          $("#error_handling").html("Password doesn't match!");
        } else {
          window.location.href = "login.php";
        }
      },
      error: function (e) {
        console.log(e);
      },
    });
  });





  /* LOgin */
  
  $("#btnLogin").click(function (e) {
    let username = $("#username").val();
    let password = $("#password").val();

    $.ajax({
      type: "POST",
      datatype: "JSON",
      url: "./_includes/process.inc.php",
      data: {
        username: username,
        password: password,
        isLogin: true,
      },
      success: function (response) {

        let data = JSON.parse(response);        

        if (data.responseCode == 404) {
          $("#error_handling").show();
          $("#error_handling").html("Empty! Input all the fields");
        } else if (data.responseCode == 401) {
          $("#error_handling").show();
          $("#error_handling").html("Account not found");
        } else {
          window.location.href = "dashboard.php";
        } 
      },
      error: function (e) {
        console.log(e);
      },
    });
  });
});
