<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script type="text/javascript " src="<?= BASE_URL . "/assets/js/grid.js"  ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Employee Manager - Dashboard</title>

</head>

<body class="min-vh-100 position-relative pb-5">
    <?php include(ASSETS . "/html/header.html"); ?>
    <main class="position-relative container-sm p-5 w-100">
        <h1 class="display-6 m-0">Dashboard</h1>
        <hr />  
        <div id="jsGrid"></div>
        <div><?= json_encode($this->employee) ?></div>
    </main>
    <?php include(ASSETS . "/html/footer.html"); ?>
</body>

</html>