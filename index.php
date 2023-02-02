<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $contacts = [
        [
            "Name" => "Galym" ,
            "Number" => "27637",
            "Job" => 'IT'
        ],
        [
            "Name" => "Alisher" ,
            "Number" => "1232",
            "Job" => 'CSSE'
        ],
        [
            "Name" => "Nursultan" ,
            "Number" => "8522",
            "Job" => 'IS'
        ],
        [
            "Name" => "Ali" ,
            "Number" => "2134",
            "Job" => 'IS'
        ]
    ];


    ?>

    <table>
        <tbody>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Number
                </th>
                <th>
                    Job
                </th>
            </tr>

            <?php
                foreach ($contacts as $key => $item) {


            ?>

            <tr>
                <td><?php echo $contacts[$key]["Name"] ?></td>
                <td><?php echo $contacts[$key]["Number"] ?></td>
                <td><?php echo $contacts[$key]["Job"] ?></td>
            </tr>

            <?php 
                }
            ?>

        </tbody>
    </table>
    
    <table>
        <tbody>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Number
                </th>
                <th>
                    Job
                </th>
            </tr>

            <?php
                foreach ($contacts as $key => $item) {
            ?>

            <tr>
                <td><?php echo $item["Name"] ?></td>
                <td><?php echo $item["Number"] ?></td>
                <td><?php echo $item["Job"] ?></td>
            </tr>

            <?php 
                }
            ?>
            
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Number
                </th>
                <th>
                    Job
                </th>
            </tr>

            <?php
                foreach ($contacts as $item) {
            ?>

            <tr>
                <td><?= $item["Name"] ?></td>
                <td><?= $item["Number"] ?></td>
                <td><?= $item["Job"] ?></td>
            </tr>

            <?php 
                }
            ?>
            
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Number
                </th>
                <th>
                    Job
                </th>
            </tr>
            <?php foreach ($contacts as $item): ?>
 
                <tr>
                    <td><?= $item["Name"] ?></td>
                    <td><?= $item["Number"] ?></td>
                    <td><?= $item["Job"] ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>