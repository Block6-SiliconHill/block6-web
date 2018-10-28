<html>
<head>

    <link href="css/block.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">


    <div id="block">
        <?php for ($floor = 0; $floor <= 5; $floor++): ?>
            <div class="block-floor" data-floor="<?php echo $floor; ?>">
                <div class="block-side block-east">
                    <div class="block-rooms">
                        <?php for ($room = 19; $room >= 1; $room--): ?>
                            <div class="block-room" data-room="<?php echo $room; ?>"></div>
                        <?php endfor; ?>
                    </div>

                    <div class="block-stairs"></div>
                    <div class="block-common"></div>
                </div>
                <center><?php echo 'patro' . $floor; ?></center>
                <div class="block-side block-west">
                    <div class="block-common"></div>
                    <div class="block-stairs"></div>
                    <div class="block-rooms">
                        <?php for ($room = 24; $room <= 42; $room++): ?>
                            <div class="block-room" data-room="<?php echo $room; ?>"></div>
                        <?php endfor; ?>
                    </div>


                </div>
            </div>


        <?php endfor; ?>

    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="script.js"></script>
</body>
</html>