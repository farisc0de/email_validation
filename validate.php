<?php
    function isValid($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $domain = strtolower(substr($email, strpos($email, '@') + 1));
        $providers = ['gmail.com', 'hotmail.com', 'outlook.com', 'msn.com', 'outlook.sa', 'aol.com', 'protonmail.com'];
        return (filter_var($email, FILTER_VALIDATE_EMAIL) && in_array($domain, $providers) && checkdnsrr($domain) != false);
    }
?>
