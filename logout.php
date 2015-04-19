<?php
session_start();

/* Kat Pfeiffer */

if(session_destroy()) 
{
header("Location: home.php"); 
}
