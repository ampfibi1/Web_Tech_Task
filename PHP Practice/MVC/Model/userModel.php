<?php

    function validateLogin($uname, $pass) {
        // Dummy validation logic (replace with actual database queries)
        if ($uname === "admin" && $pass === "admin") {
            return true; // Valid credentials
        }
        return false; // Invalid credentials
    }
?>