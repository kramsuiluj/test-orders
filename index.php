<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Orders</title>
</head>
<body>
    
    <div class="form-container">

        <form action="index.php" method="POST" id="form1">
        
            <section>
                <label for="">Name</label><br>
                <input type="text" name="name">
            </section>

            <section>
                <label for="">Date</label><br>
                <input type="date" name="sdate">
            </section>

            <section>
                <label for="">Numbers</label><br>
                <input type="tel" name="nums">
            </section>

            <section>
                <br>
                <button form="form1" name="save">SAVE</button>
            </section>

        </form>

    </div>

    <hr>

    <h2>Outputs:</h2>

    <div class="output-container">
    
    </div>

</body>
</html>