<?php 


function modifierAgent($nom,$salaire,$prime,$commission,$id)
{
    $database = dbConnect();

    $statement = $database->prepare(
        "UPDATE  agent set nom =?, salaire =?, prime =?, commission =? WHERE id =?"
    );
    $affectedLines = $statement->execute([$nom,$salaire,$prime,$commission,$id]);

    return ($affectedLines > 0);

}

function AjouterAgent($nom,$salaire,$prime,$commission)
{
    $database = dbConnect();
    $statement = $database->prepare(
        'INSERT INTO agent(nom, salaire, prime, commission) VALUES(?, ?, ?, ?)'
    );
    $affectedLines = $statement->execute([$nom,$salaire,$prime,$commission]);

    return ($affectedLines > 0);
}

function getAgents() {
    // Connexion à la base de données
    $database = dbConnect();
    // On récupère les lignes de la table classe 
    $statement = $database->query(
    "SELECT * FROM agent "
    ); 

    $agents = [];
    while(($row = $statement->fetch())) {
        $agent = [
            'id' => $row['id'],
            'nom' => $row['nom'],
            'salaire' => $row['salaire'],
            'prime' => $row['prime'],
            'commission' => $row['commission'],
        ];

        $agents[] = $agent;
    } 
    
    return $agents;
}

function getAgent($id){
    $database = dbConnect();
    $statement = $database->prepare(
        'SELECT * FROM agent WHERE id = ?'
    );

    $statement->execute([$id]);

    $row = $statement->fetch();

    $agent = [
        'id' => $row['id'],
        'nom' => $row['nom'],
        'salaire' => $row['salaire'],
        'prime' => $row['prime'],
        'commission' => $row['commission'],
    ];

    return $agent;
}

function deleteAgent($id){
    $database = dbConnect();
    $statement = $database->prepare(
        'DELETE  FROM agent WHERE id = ?'
    );

    $statement->execute([$id]);

}
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=agent;charset=utf8', 'root', '');

        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}