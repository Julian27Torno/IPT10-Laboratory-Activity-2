<?php


function get_registrants_data($file)
{
    $registrants = [];
    if (file_exists($file) && is_readable($file)) {
        $registrants = array_map('str_getcsv', file($file));
    }
    return $registrants;
}

$registrants = get_registrants_data('registrations.csv');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrants</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" /> 
</head>
<body>

<h1>Registrants</h1>

<table>
    <thead>
        <tr>
            <th>Complete Name</th>
            <th>Birthday</th> 
            <th>Contact Number</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Complete Address</th>
            <th>Program</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Agree</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($registrants as $registrant): ?>
        <tr>
            <td><?php echo isset($registrant[0]) ? htmlspecialchars($registrant[0]) : ''; ?></td> 
            <td><?php echo isset($registrant[1]) ? htmlspecialchars($registrant[1]) : ''; ?></td> 
            <td><?php echo isset($registrant[2]) ? htmlspecialchars($registrant[2]) : ''; ?></td> 
            <td><?php echo isset($registrant[3]) ? htmlspecialchars($registrant[3]) : ''; ?></td> 
            <td><?php echo isset($registrant[4]) ? htmlspecialchars($registrant[4]) : ''; ?></td> 
            <td><?php echo isset($registrant[5]) ? htmlspecialchars($registrant[5]) : ''; ?></td> 
            <td><?php echo isset($registrant[6]) ? htmlspecialchars($registrant[6]) : ''; ?></td> 
            <td><?php echo isset($registrant[7]) ? htmlspecialchars($registrant[7]) : ''; ?></td> 
            <td><?php echo isset($registrant[8]) ? htmlspecialchars($registrant[8]) : ''; ?></td> 
            <td><?php echo isset($registrant[9]) ? htmlspecialchars($registrant[9]) : ''; ?></td> 
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



</body>
</html>
