<?php

function pr1($arr = null)
{
  //dump($arr);

  echo '<pre style="font-size: 12px;font-weight: bold;font-family: Tahoma">' . htmlspecialchars( print_r($arr, true) ). '</pre>';
  exit;
}

function pr($arr = null)
{

  //dump($arr);
  echo '<pre style="font-size: 12px;font-weight: bold;font-family: Tahoma">' . htmlspecialchars( print_r($arr, true) ). '</pre>';
}