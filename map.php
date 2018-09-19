<html>
<head>

    <link href="css/block.css" rel="stylesheet">
</head>
<body>

<div id="block">
    <?php for ($floor = 1; $floor <= 5; $floor++): ?>
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


</body>
</html>