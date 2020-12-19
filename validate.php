<?php
    function isValid($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $domain = strtolower(substr($email, strpos($email, '@') + 1));
        $providers = ['gmail.com', 'hotmail.com', 'outlook.com', 'msn.com', 'outlook.sa', 'aol.com', 'protonmail.com'];
        $inarray = in_array($domain, $providers);
        return (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain) != false && $inarray);
    }
?>
