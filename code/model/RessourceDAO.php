<?php

class Ressource {
    private $ressourceID;
    private $ressourceName;
    private $ressourceType;
    private $ressourcePath;
    private $ressourceUpdate;
    private $resourceFirstUploadDate;
    private $ressourceAuthorID;

    // Constructeur pour initialiser les propriétés
    public function __construct($ressourceName, $ressourceType, $ressourcePath, $ressourceUpdate, $resourceFirstUploadDate, $ressourceAuthorID) {
        $this->ressourceName = $ressourceName;
        $this->ressourceType = $ressourceType;
        $this->ressourcePath = $ressourcePath;
        $this->ressourceUpdate = $ressourceUpdate;
        $this->resourceFirstUploadDate = $resourceFirstUploadDate;
        $this->ressourceAuthorID = $ressourceAuthorID;
    }

    // Getters et setters pour chaque propriété
    public function getRessourceID() {
        return $this->ressourceID;
    }

    public function setRessourceID($ressourceID) {
        $this->ressourceID = $ressourceID;
    }

    public function getRessourceName() {
        return $this->ressourceName;
    }

    public function setRessourceName($ressourceName) {
        $this->ressourceName = $ressourceName;
    }

    public function getRessourceType() {
        return $this->ressourceType;
    }

    public function setRessourceType($ressourceType) {
        $this->ressourceType = $ressourceType;
    }

    public function getRessourcePath() {
        return $this->ressourcePath;
    }

    public function setRessourcePath($ressourcePath) {
        $this->ressourcePath = $ressourcePath;
    }

    public function getRessourceUpdate() {
        return $this->ressourceUpdate;
    }

    public function setRessourceUpdate($ressourceUpdate) {
        $this->ressourceUpdate = $ressourceUpdate;
    }

    public function getResourceFirstUploadDate() {
        return $this->resourceFirstUploadDate;
    }

    public function setResourceFirstUploadDate($resourceFirstUploadDate) {
        $this->resourceFirstUploadDate = $resourceFirstUploadDate;
    }

    public function getRessourceAuthorID() {
        return $this->ressourceAuthorID;
    }

    public function setRessourceAuthorID($ressourceAuthorID) {
        $this->ressourceAuthorID = $ressourceAuthorID;
    }

}

?>
