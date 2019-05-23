<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>evenementen pagina</h3>
    <table>
      <thead>

          <?php foreach ($events as $event): ?>
          <tr>
          <td><?php echo $event['evenement_id']?></td>




          </tr>
        <?php endforeach; ?>

      </thead>
    </table>

  </body>
</html>
