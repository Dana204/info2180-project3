<?php
    // define variables and set to empty values
    $title = $desc = $category = $company = $location = "";
    $titleErr = $descErr = $categoryErr = $categoryErr = $locationErr  = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["title"])) {
            $titleErr = "Job Title is required";
        } else {
            $title = test_input($_POST["title"]);
        }

        if (empty($_POST["desc"])) {
            $descErr = "Job Description is required";
        } else {
            $desc = test_input($_POST["desc"]);
        }

        if (empty($_POST["category"])) {
            $categoryErr = "Category is required";
        } else {
            $category = test_input($_POST["category"]);
        }

        if (empty($_POST["company"])) {
            $companyErr = "Company is required";
        } else {
            $company = test_input($_POST["company"]);
        }

        if (empty($_POST["location"])) {
            $locationErr = "Company is required";
        } else {
            $location = test_input($_POST["location"]);
        }
    }
?>