<?php include 'data/tiles.php'; ?>
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

    <div class="container">

      <?php foreach($tiles as $tile_group): ?>

        <div class="tiles__group" <?php print $tile_group['group_span_string']; ?><?php print $tile_group['item_span_string']; ?>>

            <?php foreach($tile_group['items'] as $tile): ?>

              <div class="tiles__item-wrapper">
                <div class="tiles__item" style="background-color:<?php print $tile_group['color']; ?>;">
                  <?php print $tile['name']; ?>
                </div>
              </div>

            <?php endforeach; ?>

        </div>

      <?php endforeach; ?>

    </div>

    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
