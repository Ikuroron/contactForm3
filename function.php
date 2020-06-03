<?php

function h ($str) {
  $result = htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  return $result;
}