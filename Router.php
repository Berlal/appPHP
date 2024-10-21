<?php

class Router {
    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        switch ($uri) {
            case '/':
                header("Location: /contacts");
                exit();
            case '/contacts':
                $controller = new ContactController();
                $controller->listContacts();
                break;
            case '/contacts/add':
                $controller = new ContactController();
                $controller->addContact();
                break;
            default:
                http_response_code(404);
                echo "404 Not Found";
                break;
        }
    }
}
