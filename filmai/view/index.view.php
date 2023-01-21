<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="accordion" id="accordionExample">
      <div class="accordion-item">
          <?php foreach($movies as $key => $value): ?>
          <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $key?>" aria-expanded="true" aria-controls="collapseOne">
                  <?=$movies[$key]['Title']?>
              </button>
          </h2>
          <div id="<?= $key?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <ul>
                      <li>Ranking: <?= $key?></li>
                      <li>Rating: <?=$movies[$key]['Rating']?></li>
                      <li>Votes: <?=$movies[$key]['Votes']?></li>
                  </ul>
              </div>
          </div>
          <?php endforeach;?>
      </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>