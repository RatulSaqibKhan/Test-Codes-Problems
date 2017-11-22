<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .block {
            display: block;
        }

        input {
            width: 50%;
            display: inline-block;
        }

        span {
            display: inline-block;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="row container col-md-12" id='TextBoxesGroup'>
    <div class="col-md-2 TextBoxDiv1">
        <input type="file">
    </div>
    <i class="btn btn-sm btn-success fa fa-plus-square" id='addButton'></i>
    <i class="btn btn-sm btn-danger fa fa-trash" id='removeButton'></i>
</div>
</body>
<script>
    $(document).ready(function () {

        var counter = 2;

        $("#addButton").click(function () {

            if (counter > 4) {
                alert("Only 4 textboxes allow");
                return false;
            }

            var newTextBoxDiv = $(document.createElement('div'))
                .attr("class", 'col-md-2 TextBoxDiv' + counter );
            newTextBoxDiv.after().html('<input type="file">');

            newTextBoxDiv.appendTo("#TextBoxesGroup");


            counter++;
        });

        $("#removeButton").click(function () {
            if (counter == 2) {
                alert("No more textbox to remove");
                return false;
            }

            counter--;

            $(".TextBoxDiv" + counter).remove();

        });
    });
</script>

</html>

