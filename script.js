$(document).ready(function () {

    $("#regForm").submit(function (e) {

        let name = $("#fullname").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let gender = $("#gender").val();
        let address = $("#address").val();

        if (name == "" || email == "" || phone == "" || gender == "" || address == "") {
            alert("Please fill all fields!");
            e.preventDefault();
        }

        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Phone number must be 10 digits!");
            e.preventDefault();
        }

    });
});

