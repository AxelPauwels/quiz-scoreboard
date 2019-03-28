<!--      ██████╗ ███████╗██╗   ██╗███████╗██╗      ██████╗ ██████╗ ██████╗ ███████╗██████╗     ██████╗ ██╗   ██╗               -->
<!--      ██╔══██╗██╔════╝██║   ██║██╔════╝██║     ██╔═══██╗██╔══██╗██╔══██╗██╔════╝██╔══██╗    ██╔══██╗╚██╗ ██╔╝               -->
<!--      ██║  ██║█████╗  ██║   ██║█████╗  ██║     ██║   ██║██████╔╝██████╔╝█████╗  ██║  ██║    ██████╔╝ ╚████╔╝                -->
<!--      ██║  ██║██╔══╝  ╚██╗ ██╔╝██╔══╝  ██║     ██║   ██║██╔═══╝ ██╔═══╝ ██╔══╝  ██║  ██║    ██╔══██╗  ╚██╔╝                 -->
<!--      ██████╔╝███████╗ ╚████╔╝ ███████╗███████╗╚██████╔╝██║     ██║     ███████╗██████╔╝    ██████╔╝   ██║                  -->
<!--      ╚═════╝ ╚══════╝  ╚═══╝  ╚══════╝╚══════╝ ╚═════╝ ╚═╝     ╚═╝     ╚══════╝╚═════╝     ╚═════╝    ╚═╝                  -->


<!--                 █████╗ ██╗  ██╗███████╗██╗         ██████╗  █████╗ ██╗   ██╗██╗    ██╗███████╗██╗     ███████╗             -->
<!--      ▄ ██╗▄    ██╔══██╗╚██╗██╔╝██╔════╝██║         ██╔══██╗██╔══██╗██║   ██║██║    ██║██╔════╝██║     ██╔════╝    ▄ ██╗▄   -->
<!--       ████╗    ███████║ ╚███╔╝ █████╗  ██║         ██████╔╝███████║██║   ██║██║ █╗ ██║█████╗  ██║     ███████╗     ████╗   -->
<!--      ▀╚██╔▀    ██╔══██║ ██╔██╗ ██╔══╝  ██║         ██╔═══╝ ██╔══██║██║   ██║██║███╗██║██╔══╝  ██║     ╚════██║    ▀╚██╔▀   -->
<!--        ╚═╝     ██║  ██║██╔╝ ██╗███████╗███████╗    ██║     ██║  ██║╚██████╔╝╚███╔███╔╝███████╗███████╗███████║      ╚═╝    -->
<!--                ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ ╚══════╝╚══════╝╚══════╝             -->

<!doctype html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Axel Pauwels">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Scoreboard</title>
    <!--CSS (custom css as last)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php echo stylesheet("bootstrap.css"); ?>
    <?php echo stylesheet("custom.css"); ?>
</head>

<body>
<div class="container main-container">
    <?= $myContent; ?>
</div>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo javascript("jquery-3.3.1.min.js"); ?>
<?php echo javascript("bootstrap.min.js"); ?>

<!--JS Custom-->
<script type="text/javascript">
    var site_url = '<?php echo site_url(); ?>';
    var base_url = '<?php echo base_url(); ?>';
</script>
<?php echo javascript("scoreboard.js"); ?>
</html>