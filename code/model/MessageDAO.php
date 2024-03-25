<?php

class Message {
    private $messageID;
    private $expeditorName;
    private $expeditorFirstName;
    private $expeditorLastName;
    private $expeditorMail;
    private $submissionDate;
    private $object;
    private $message;
    private $isRead;
    private $isClient;
    private $clientID;

    public function __construct($expeditorName, $expeditorFirstName, $expeditorLastName, $expeditorMail, $submissionDate, $object, $message, $isRead, $isClient, $clientID) {
        $this->expeditorName = $expeditorName;
        $this->expeditorFirstName = $expeditorFirstName;
        $this->expeditorLastName = $expeditorLastName;
        $this->expeditorMail = $expeditorMail;
        $this->submissionDate = $submissionDate;
        $this->object = $object;
        $this->message = $message;
        $this->isRead = $isRead;
        $this->isClient = $isClient;
        $this->clientID = $clientID;
    }

    public function setMessageID($messageID) {
        $this->messageID = $messageID;
    }

    public function setExpeditorName($expeditorName) {
        $this->expeditorName = $expeditorName;
    }

    public function setExpeditorFirstName($expeditorFirstName) {
        $this->expeditorFirstName = $expeditorFirstName;
    }

    public function setExpeditorLastName($expeditorLastName) {
        $this->expeditorLastName = $expeditorLastName;
    }

    public function setExpeditorMail($expeditorMail) {
        $this->expeditorMail = $expeditorMail;
    }

    public function setSubmissionDate($submissionDate) {
        $this->submissionDate = $submissionDate;
    }

    public function setObject($object) {
        $this->object = $object;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setIsRead($isRead) {
        $this->isRead = $isRead;
    }

    public function setIsClient($isClient) {
        $this->isClient = $isClient;
    }

    public function setClientID($clientID) {
        $this->clientID = $clientID;
    }

    // Getters
    public function getMessageID() {
        return $this->messageID;
    }

    public function getExpeditorName() {
        return $this->expeditorName;
    }

    public function getExpeditorFirstName() {
        return $this->expeditorFirstName;
    }

    public function getExpeditorLastName() {
        return $this->expeditorLastName;
    }

    public function getExpeditorMail() {
        return $this->expeditorMail;
    }

    public function getSubmissionDate() {
        return $this->submissionDate;
    }

    public function getObject() {
        return $this->object;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getIsRead() {
        return $this->isRead;
    }

    public function getIsClient() {
        return $this->isClient;
    }

    public function getClientID() {
        return $this->clientID;
    }

}

?>
