<?php
require_once('./controllers/AgentController.php');
if(isset($_GET['action']) && $_GET['action']== 'liste'){
    listeAgents();
}elseif(isset($_GET['action']) && $_GET['action'] == 'create'){
    addAgent();
}elseif (isset($_GET['action']) && $_GET['action'] == 'update'){
    updateAgent($_POST);
}elseif (isset($_GET['action']) && $_GET['action'] == 'edit'){
    if(isset($_GET['id']) && $_GET['id'] > 0){
        $id = $_GET['id'];
        editAgent($id);
    }
}elseif (isset($_GET['action']) && $_GET['action'] == 'delete'){
    if(isset($_GET['id']) && $_GET['id'] > 0){
        $id = $_GET['id'];
        supprimerAgent($id);
    }
} else{
    require('view/homePage.php');
}