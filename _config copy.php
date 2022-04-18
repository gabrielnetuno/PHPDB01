<?php

/**
 * Gera conteúdo sempre em UTF-8.
 * DEVE SER sempre a primeira linha de código.
 */
header('Content-Type: text/html; charset=utf-8');

/**
 * Dados de conexão com o banco de dados.
 */
$db = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'vitugo'
);

/**
 * Linha de conexão com o banco de dados.
 */
$conn = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);
