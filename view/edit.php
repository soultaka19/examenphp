<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>classe</title>
</head>
<body>

    <div class="container">
        <form action="index.php?action=update" method="post">
            <div class="row">
                <div class=" col-md-9 offset-md-2">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $agent['id'] ?>">
                        <label for="nom_classe" class="form-label">nom agent:</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $agent['nom'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="salaire" class="form-label">salaire:</label>
                        <input type="number" class="form-control" id="salaire" name="salaire" value="<?php echo $agent['salaire'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="prime" class="form-label">prime:</label>
                        <input type="number" class="form-control" id="prime" name="prime" value="<?php echo $agent['prime'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="commission" class="form-label">commission:</label>
                        <input type="number" class="form-control" id="commission" name="commission" value="<?php echo $agent['commission'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary" name="modifier">modifier</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>