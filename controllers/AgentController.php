<?php

require_once('model/agent.php');

function addAgent(){
    require('view/add.php');
}

function updateAgent(array $input)
{

    	$nom = $input['nom'];
    	$salaire = $input['salaire'];
        $prime = $input['prime'];
        $commission = $input['commission'];
		$id = $input['id'];

	$success =modifierAgent($nom,$salaire,$prime,$commission,$id);
	if (!$success) {
    	die('Impossible de modifier la classe !');

	} else {
    	header('Location: index.php?action=liste');
	}
}

function supprimerAgent($id){
	
	$delete = deleteAgent($id);

	header('Location: index.php?action=liste');
	
}



if(isset($_POST['valider'])){
    extract($_POST); 
    AjouterAgent($nom,$salaire,$prime,$commission);
}

function listeAgents() {
	$agents = getAgents();

	require('view/liste.php');
}

function editAgent($id){
	$agent = getAgent($id);

	require('view/edit.php');
}

