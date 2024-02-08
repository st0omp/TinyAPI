<?php

namespace St0omp\TinyApi\Controller;

class Home {

    /*
        @api
        @params void
        @returns void
        @todo Full implementation
        Default api response
    */
    public function getIndex(){
        echo "Nothing here";
    }

    /*
        @api
        @params void
        @returns void
        @todo Full implementation
        Retrieves and send back a message
    */
    public function getMessage(){
        echo "Here you go, your message!";
    }

    /*
        @api
       @params void
        @returns void
        @todo Full implementation
        Creates a new message
    */
    public function postMessage(){
        echo "Waouh this is a new message!";
    }

    /*
        @api
        @params void
        @returns void
        @todo Full implementation
        Updates a message
    */
    public function putMessage(){
        echo "Ok let's updated message!";
    }

    /*
        @api
        @params void
        @returns void
        @todo Full implementation
        Deletes a message
    */
    public function deleteMessage(){
        echo "Oh no you want to delete this!";
    }
}