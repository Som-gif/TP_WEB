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

    // Getters and Setters
    // Add getters and setters for each property similar to the previous examples

}

?>
