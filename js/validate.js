    //SUBMITS==========================================================================
    var submits = {
        signupname: false,
        signupphonenumber: false,
        signupemail: false,
        signuppass: false,
        signupconfpass: false
    };

    function checkSubmits() {
        var check = false;
        for (var key in submits) {
            check = submits[key];
            if (check === false) {
                break;
            }
        }

        if (!check) {
            $("#spansubmit").css("display", "block");
            $("#spansubmit").css("color", "red");
            $("#spansubmit").html("      You should check out fields!");
        }

        if (check) {
            $("#spansubmit").css("display", "block");
            $("#spansubmit").css("color", "blue");
            $("#spansubmit").html("   You can submit now!");
        }
        return check;
    }

    $(document).ready(function () {
        //NAME VALIDATION============================================================================
        $("#signupname").change(function () {
            var span = $("#spansignupname");
            var value = $(this).val();
            var correctName = /^[a-zA-ZабвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ]+$/;
            var name = correctName.test(value);

            if (!name || value.length >= 20 || value.length <= 3) {
                span.html("   Please enter valid name. It must contain only english and russian letters. Without spaces. Min 4 and Max 20 letters!");
                span.css("color", "red");
                submits.signupname = false;
            }

            if (value.length > 3 && value.length <= 20 && name) {
                span.html("   Your name is valid. Thank you!");
                span.css("color", "green");
                submits.signupname = true;
            }

            checkSubmits();
        });

        // PHONE VALIDATION============================================================================
        $("#signupphonenumber").change(function () {
            var span = $("#spansignupphonenumber");
            var value = $(this).val();
            var correctNumber = /\+\d\d\d\d\d\d\d\d\d\d\d\d/;
            var number = correctNumber.test(value);
            if (!number) {
                span.html("   Your phone number isn't valid! It must be started with '+' and contain 12 numbers! Check it!");
                span.css("color", "red");
                submits.signupphonenumber = false;
            }

            if (number) {
                span.html("   Your phone number is valid. Thank you!");
                span.css("color", "green");
                submits.signupphonenumber = true;
            }

            if (value.length > 13) {
                span.html("   Your phone number isn't valid! It must be started with '+' and contain 12 numbers! Check it!");
                span.css("color", "red");
                submits.signupphonenumber = false;
            }

            checkSubmits();
        });

        // EMAIL VALIDATION============================================================================
        $("#signupemail").change(function () {
            var span = $("#spansignupemail");
            var value = $(this).val();
            var rE = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
            var result = rE.test(value);

            if (!result) {
                span.html("   Your email isn't valid. Check it!");
                span.css("color", "red");
                submits.signupemail = false;
            }

            if (result) {
                span.html("   Your email is valid. Thank you!");
                span.css("color", "green");
                submits.signupemail = true;
            }
            checkSubmits();
        });
        //PASSWORD VALIDATION============================================================================
        $("#signuppass").change(function () {
            var pass = $(this).val();
            var confpass = $("#signupconfpass").val();
            if (pass !== confpass) {
                $("#spansignupconfpass").html("   Please confirm your password!");
                $("#spansignupconfpass").css("color", "red");
                submits.signupconfpass = false;
            }

            if (pass.length <= 5) {
                $("#spansignuppass").html("   Your password should contain 6 symbols minimum!");
                $("#spansignuppass").css("color", "red");
                submits.signuppass = false;
            }

            if (pass.length > 5) {
                $("#spansignuppass").html("   The password is valid. Thank you!");
                $("#spansignuppass").css("color", "green");
                submits.signuppass = true;
            }

            if (pass === confpass && confpass > 5) {
                $("#spansignupconfpass").html("   Your password is confirmed. Thank you!");
                $("#spansignupconfpass").css("color", "green");
                submits.signupconfpass = true;
                submits.signuppass = true;
            }

            checkSubmits();
        });

        //CONFIRM PASSWORD VALIDATION============================================================================
        $("#signupconfpass").change(function () {
            checkSubmits();
            var confpass = $(this).val();
            var pass = $("#signuppass").val();

            if (confpass !== pass || confpass.length < 6) {
                $("#spansignupconfpass").html("   Please check your password! Remember it should contain min 6 symbols");
                $("#spansignupconfpass").css("color", "red");
                submits.signupconfpass = false;
            }

            if (confpass !== pass && confpass.length >= 6) {
                $("#spansignupconfpass").html("   Your password is confirmed. Thank you!");
                $("#spansignupconfpass").css("color", "green");
                submits.signupconfpass = true;
                submits.signuppass = true;
            }

            checkSubmits();
        });
    });


