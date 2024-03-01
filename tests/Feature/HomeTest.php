<?php

it('greets the user if thet are signed out', function () {
    $this->get('/')->assertSee('Bookfriends')->assertSee('Sign up to get started');
});

it('shows authenticated menu items if the user is signed in', function () {
    
});

