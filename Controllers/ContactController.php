<?php
require_once 'Models/ContactManager.php';

class ContactController {
    private $contactManager;

    public function __construct() {
        $this->contactManager = new ContactManager();
    }

    public function listContacts() {
        $contacts = $this->contactManager->getContacts();
        include 'Views/contactList.php';
    }

    public function addContact() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Traitement du formulaire
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->contactManager->addContact($name, $email);
            header('Location: /contacts');
            exit();
        }
        include 'Views/addContact.php';
    }
}
