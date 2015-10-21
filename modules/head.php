<?php include_once "paths.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $css["style"] ?>">
    <link rel="stylesheet" href="<?php echo $css["grid"] ?>">
    <link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
    <title><?php if(isset($title)){echo $title;} ?></title>
    <style><?php if(isset($style)){echo $style;} ?></style>
</head>
<body>