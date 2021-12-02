<?php

// Get the product data

$profilePic = filter_input(INPUT_POST, 'profilePic', FILTER_VALIDATE_INT);
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_VALIDATE_INT);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_VALIDATE_FLOAT);
$bio = filter_input(INPUT_POST, 'bio', FILTER_VALIDATE_FLOAT);
$bday = filter_input(INPUT_POST, 'bday', FILTER_VALIDATE_FLOAT);
$jobTitle = filter_input(INPUT_POST, 'jobTitle', FILTER_VALIDATE_INT);
$gender = filter_input(INPUT_POST, 'gender', FILTER_VALIDATE_INT);
$lookingFor = filter_input(INPUT_POST, 'lookingFor', FILTER_VALIDATE_INT);
$relationshipType = filter_input(INPUT_POST, 'relationshipType', FILTER_VALIDATE_INT);
$instagram = filter_input(INPUT_POST, 'instagram', FILTER_VALIDATE_FLOAT);
$twitter = filter_input(INPUT_POST, 'twitter', FILTER_VALIDATE_FLOAT);
$spotify = filter_input(INPUT_POST, 'spotify', FILTER_VALIDATE_FLOAT);



// Validate inputs
    require_once('connDB.php');

    // Add the product to the database  
    $query = 'INSERT INTO profileInfo (picture,firstName, lastName, bio, age, jobTitle, sex, lookingForSex, relationType, instagram, twitter, spotify) VALUES (:profilePic, :firstName, :lastName, :bio, :bday, :jobTitle, :gender, :lookingFor, :relationshipType, :instagram, :twitter, :spotify)';

    $statement = $conn->prepare($query);
    $statement->bindValue(':profilePic', $picture);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':bio', $bio);
    $statement->bindValue(':bday', $bday);
    $statement->bindValue(':jobTitle', $jobTitle);
    $statement->bindValue(':gender', $sex);
    $statement->bindValue(':lookingFor', $lookingForSex);
    $statement->bindValue(':relationshipType', $relationType);
    $statement->bindValue(':instagram', $instagram);
    $statement->bindValue(':twitter', $twitter);
    $statement->bindValue(':spotify', $spotify);







    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('browse.php');