<?php
require_once './Model/comentariosModel.php';
require_once './View/apiView.php';
class apiController{
    private $model;
    private $view;
    function __construct(){
        $this->model = new comentariosModel();
        $this->view = new apiView();
    }

    function getComents(){
        $coments = $this->model->getComents();
        return $this->view->response($coments, 200);
    }

    function getComent($params = []){
        $idComent = $params[":ID"];
        $coment = $this->model->getComent($idComent);
        if($coment){
            return $this->view->response($coment, 200);
        }else{
            return $this->view->response("El comentario con el id=$idComent no existe", 404);
        }
    }

    function deleteComent($params = null){
        $idComent = $params[":ID"];
        $coment = $this->model->getComent($idComent);

        if($coment){
            $coment = $this->model->deleteComent($idComent);
            return $this->view->response("La tarea con el id=$idComent fue borrada", 200);
        }else{
            return $this->view->response("La tarea con el id=$idComent no existe", 404);
        }
    }

    function addComent($params = null){
        $body = $this->getBody();

        $id = $this->model->addComent($body->Id_usuariofk, $body->Comentario, $body->Puntaje, $body->Id_librofk);
        if($id != 0){
            $this->view->response("La tarea se inserto con el id=$id", 201);
        }else{
            $this->view->response("La tarea no se pudo insertar", 500);
        }
    }

    function updateComent($params = null){
        $idComent = $params[":ID"];
        $body = $this->getBody();

        $coment = $this->model->getComent($idComent);
        if($coment){
            $this->model->updateComent($idComent, $body->Comentario, $body->Puntaje);
            $this->view->response("La tarea con el id=$idComent fue modificada", 200);
        }else{
            return $this->view->response("La tarea con el id=$idComent no existe", 404);
        }
    }

    private function getBody(){
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    

}