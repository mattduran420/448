<?php
require('functions.php');

if(session_destroy()) 
{
header("Location: home.php"); 
}
