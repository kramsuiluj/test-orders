<?php 

require_once 'db/conn.php';

$notice = ['empty-fields' => '', 'saved' => ''];

if (isset($_POST['save'])) {

    if (empty($_POST['name']) || empty($_POST['sdate']) || empty($_POST['nums'])) {

        $notice['empty-fields'] = 'All fields are required to continue.';

    } else {

        $name = htmlspecialchars($_POST['name']);
        $sdate = htmlspecialchars($_POST['sdate']);
        $nums = htmlspecialchars($_POST['nums']);

        $isSuccess = $crud->save($name, $sdate, $nums);

        if ($isSuccess) {

            $notice['saved'] = 'Your inputs has been saved successfully.';

        } else {

            $notice['saved'] = 'There was an error while saving your inputs. Please try again.';

        }

    }

}

if (isset($_POST['byID'])) {

    $results = $crud->defaultOrder();

    // foreach($results as $result) {

    //     echo $result['name'] . '<br>';
    //     echo $result['sdate'] . '<br>';
    //     echo $result['nums'] . '<br>';
    //     echo '<br>';

    // }

} else if (isset($_POST['byName'])) {

    $results = $crud->byName();

    // foreach($results as $result) {

    //     echo $result['name'] . '<br>';
    //     echo $result['sdate'] . '<br>';
    //     echo $result['nums'] . '<br>';
    //     echo '<br>';

    // }

} else if (isset($_POST['byDate'])) {

    $results = $crud->byDate();

    // foreach ($results as $result) {

    //     echo $result['name'] . '<br>';
    //     echo $result['sdate'] . '<br>';
    //     echo $result['nums'] . '<br>';
    //     echo '<br>';

    // }

} else if (isset($_POST['byNum'])) {

    $results = $crud->byNum();

    // foreach ($results as $result) {

    //     echo $result['name'] . '<br>';
    //     echo $result['sdate'] . '<br>';
    //     echo $result['nums'] . '<br>';
    //     echo '<br>';

    // }

} else {

    $results = $crud->defaultOrder();

    // foreach($results as $result) {

    //     echo $result['name'] . '<br>';
    //     echo $result['sdate'] . '<br>';
    //     echo $result['nums'] . '<br>';
    //     echo '<br>';

    // }

}


?>



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

            <section>
            <br>
                <button form="form1" name="byID">Sort by ID</button>
                <button form="form1" name="byName">Sort by Name</button>
                <button form="form1" name="byDate">Sort by Date</button>
                <button form="form1" name="byNum">Sort by Number</button>
            </section>

        </form>

    </div>

    <hr>

    <h2>Outputs:</h2>

    <div class="output-container">

        <?php foreach ($results as $result) { ?>

            <?php echo $result['name'] . '<br>'; ?>
            <?php echo $result['sdate'] . '<br>'; ?>
            <?php echo $result['nums'] . '<br><br>'; ?>

        <?php } ?>

    </div>

</body>
</html>