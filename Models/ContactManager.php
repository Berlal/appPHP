<?php

class ContactManager {
    private $dataFile = 'Data/contacts.json';

    public function getContacts() {
        if (!file_exists($this->dataFile)) {
            return [];
        }
        $json = file_get_contents($this->dataFile);
        return json_decode($json, true);
    }

    public function addContact($name, $email) {
        $contacts = $this->getContacts();
        $contacts[] = ['name' => $name, 'email' => $email];
        file_put_contents($this->dataFile, json_encode($contacts));
    }
}
