<?php

enum RequestMethod: string {
    
    case GET = 'GET';
    case POST = 'POST';

    public function isGet() {
        return $this === RequestMethod::GET;
    }

    public function isPost() {
        return $this === RequestMethod::POST;
    }

}
