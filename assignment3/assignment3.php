<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
        var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
        var $ConNoRegEx = /^([0-9]{10})$/;

        $(document).ready(function () {

            $("#TxtName").blur(function () {
                $("#TxtNameValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#TxtNameValidation").html("(*) Name required..!!");
                }
                else {
                    if (!$(this).val().match($FNameLNameRegEx)) {
                        $("#TxtNameValidation").html("(*) Invalid name..!!");
                    }
                }
            });

            $("#TxtName").keypress(function (e) {
                $("#TxtNameValidation").empty();
                var Flag = ((e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 121));
                if (Flag == false) {
                    $("#TxtNameValidation").html("Invalid Input..!!");
                }
                return Flag;
            });

            $("#TxtContactNo").blur(function () {
                $("#TxtContactNoValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#TxtContactNoValidation").html("(*) Contact no. required..!!");
                }
                else {
                    if (!$(this).val().match($ConNoRegEx)) {
                        $("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
                    }
                }
            });

            $("#TxtContactNo").keypress(function (e) {
                $("#TxtContactNoValidation").empty();
                var Flag = (e.which >= 48 && e.which <= 57);
                if (Flag == false) {
                    $("#TxtContactNoValidation").html("Invalid Input..!!");
                }
                return Flag;
            });


            $("#TxtEmailId").blur(function () {
                $("#TxtEmailIdValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#TxtEmailIdValidation").html("(*) Email id required..!!");
                }
                else {
                    if (!$(this).val().match($EmailIdRegEx)) {
                        $("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
                    }
                }
            });

            $("#TxtContactMsg").blur(function () {
                $("#TxtContactMsgValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#TxtContactMsgValidation").html("(*) Contact message required..!!");
                }
                else {
                    if ($("#TxtContactMsg").val().length > 300) {
                        $("#TxtContactMsgValidation").html("(*) Invalid contact message..!!");
                    }
                }
            });

            var TxtNameFlag = false, TxtContactNoFlag = false, TxtEmailIdFlag = false, TxtContactMsgFlag = false;

            $("#feedbackForm").submit(function () {
                $("#TxtNameValidation").empty();
                if ($("#TxtName").val() == "" || $("#TxtName").val() == null) {
                    $("#TxtNameValidation").html("(*) Name required..!!");
                    TxtNameFlag = false;
                }
                else {
                    if (!$("#TxtName").val().match($FNameLNameRegEx)) {
                        $("#TxtNameValidation").html("(*) Invalid name..!!");
                        TxtNameFlag = false;
                    }
                    else {
                        TxtNameFlag = true;
                    }
                }
                $("#TxtContactNoValidation").empty();
                if ($("#TxtContactNo").val() == "" || $("#TxtContactNo").val() == null) {
                    $("#TxtContactNoValidation").html("(*) Contact no. required..!!");
                    TxtContactNoFlag = false;
                }
                else {
                    if (!$("#TxtContactNo").val().match($ConNoRegEx)) {
                        $("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
                        TxtContactNoFlag = false;
                    }
                    else {
                        TxtContactNoFlag = true;
                    }
                }
                $("#TxtEmailIdValidation").empty();
                if ($("#TxtEmailId").val() == "" || $("#TxtEmailId").val() == null) {
                    $("#TxtEmailIdValidation").html("(*) Email id required..!!");
                    TxtEmailIdFlag = false;
                }
                else {
                    if (!$("#TxtEmailId").val().match($EmailIdRegEx)) {
                        $("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
                        TxtEmailIdFlag = false;
                    }
                    else {
                        TxtEmailIdFlag = true;
                    }
                }
                if (TxtNameFlag == true && TxtContactNoFlag == true && TxtEmailIdFlag == true) {
                    $("input,textarea").val("");
                    alert("Form submitted successfully..!!");
                }
                else {
                    alert("Invalid Input..!!");
                }
            });

        });

    </script>
    <style>
        body{
            background-image: url("feedback");
            background-position: center;
            background-size: cover;
        }
        .container {
            font-weight: bold;
            width: 600px;
            height: 300px;
            padding: 50px;
            border: 1px solid red;
            background-color: silver;
            
        }

        #BtnSubmit {
            text-align: left;
            font-weight: bold;
            color: blue;
        }

        small {
            color: red;
        }

        #d1 {
            height: 100%;
        }
    </style>

</head>

<body>
    <div id="d1">
        <center>
            <h1>Feedback Form </h1>
            <hr />
            <form id="feedbackForm" name="form1" method="post" action="post.php">
                <div class="container">
                    <h2>How do you rate your overall experience?</h2>
                    <input type="radio" id="good" style="text-align: left;" value="Good">
                    <label for="good">Good</label>
                    <input type="radio" id="average" style="text-align: left;" value="Average">
                    <label for="">Average</label>
                    <input type="radio" id="bad" style="text-align: left;" value="Bad">
                    <label for="">Bad</label>
                    <hr />
                    <div>
                        <label for="TxtName">Name:</label>
                        <input type="text" id="TxtName" name="Name" autofocus placeholder="enter the name here.." maxlength="40" />
                        <small id="TxtNameValidation"></small>
                        <hr />
                    </div>
                    <div>
                        <label for="TxtContactNo">ContactNo:</label>
                        <input type="text" id="TxtContactNo" name="phone" placeholder="enter the contact no. here.."
                            maxlength="10" />
                        <small id="TxtContactNoValidation"></small>
                        <hr />
                    </div>
                    <div>
                        <label for="TxtEmailId">EmailId:</label>
                        <input type="text" id="TxtEmailId" name="Emailid" placeholder="enter the email id here.." maxlength="50" />
                        <small id="TxtEmailIdValidation"></small>
                        <hr />
                    </div>
                    <div>
                        <label for="TxtFeedback">Feedback:</label>
                        <textarea rows="5" id="TxtFeedback" name="Feedback" placeholder="enter  here.." maxlength="300"
                            style="width: 600;"></textarea>
                        <hr />
                    </div>
                </div>
                <hr />
                <div>
                    <button id="BtnSubmit">Submit</button>
                </div>
            </form>
        </center>

    </div>

</body>

</html>
