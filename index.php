<?php

require "vendor/autoload.php";

$vk = new VK();

echo "<pre>";

$vk->apps->deleteAppRequests();

echo "</pre>";
