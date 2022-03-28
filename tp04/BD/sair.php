<?php
session_start();
unset($_SESSION['utilizador']);
header('Location: entrada.php');