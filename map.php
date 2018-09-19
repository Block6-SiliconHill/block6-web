<html>
<head>

    <link href="css/block.css" rel="stylesheet">
</head>
<body>

<div id="block">
<?php for($floor = 1; $floor <= 1; $floor++): ?>
    <div class="block-floor" data-floor="<?php echo $floor; ?>">
        <div class="block-side block-east">
            <?php for($room = 19; $room >= 1; $room--): ?>
                <div class="block-room" data-room="<?php echo $room; ?>">
                    <div class="block-cupboard"></div>
                    <div class="block-door"></div>
                </div>
            <?php endfor; ?>
            <div class="block-stairs"></div>
            <div class="block-common"></div>
        </div>
        <div class="block-side block-west">
            <?php for($room = 42; $room >= 24; $room--): ?>
                <div class="block-room" data-room="<?php echo $room; ?>"><?php echo $room; ?></div>
            <?php endfor; ?>
            <div class="block-stairs"></div>
            <div class="block-common"></div>
        </div>
    </div>






<?php endfor; ?>

</div>



</body>
</html>