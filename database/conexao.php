<?php

const HOST = "localhost";
const USER = "root";
const PASSWORD = "bcd127";
const DATABASE = "icatalogo";

//senha do web host: 2TbEFZRv!&GcM!WZHpx8
//nome do projeto: icatalogo-beatriz

// senha do bd no host: Uj84hF_e{[h+J]sv

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if ($conexao == false) {
    die(mysqli_connect_error());
}
