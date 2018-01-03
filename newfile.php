<?php

function addlead() {
    
    var error;
    //collect variables
    var fname = document.getElementById
    var lname = $("#last_name").val();
    var mail = $("#email").val();

if (!fname.checkValidity()) {
    alert("alert");
    error += "Please enter a first name";
    $("#errors").append("hi");
} else {
    fname = $("input[name='first_name']").val();
}


//ajax request
$.ajax({
    type: "POST",
    url: "<?php echo base_url('index/insert');?>",
    data: {first_name:fname,
    last_name:lname,
    email:mail},
    datatype: "JSON",
    success: function(data) {
        
        var response = JSON.parse(data);
        console.log(response);
        $("#message").html(response);
        $("#message").addClass("alert alert-success");
    },
    error: function(err) {
        alert(err);
    }
});
