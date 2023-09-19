<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function deposit()
        {

            let deposit_amt = prompt("please enter a amt to deposit","");
            $.ajax({
                data:{
                    "deposit":deposit_amt,
                    "action":"deposit"
                },
                url:"8-BankAccount.php",
                success:function(result){

                    $("#show-deposit").html(result);
            }})
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
   <button onclick="deposit()">CLICK</button>
        <div id="show-deposit"></div>
</body>
</html>
