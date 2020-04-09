<?php
  // to  redirect page easily//
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }