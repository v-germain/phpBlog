<?php

require_once('model/AdminManager.php');

function getReportedComment()
{
    $adminManager = new AdminManager();
    $getReportedComment = $adminManager->getReportedComment();

    require('view/frontend/adminView.php');
}