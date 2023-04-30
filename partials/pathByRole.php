<?php
    $portofolioPerformancePath = '';
    $onsiteSurveyPath = '';
    $timelinePath = '';
    $messagesPath = '';
    if ($user['rolenama'] == 'manager'){
      $portofolioPerformancePath = 'assets/img/manager/portofolio_performance.png';
      $onsiteSurveyPath = 'assets/img/manager/onsite_survey.png';
      $timelinePath = 'assets/img/manager/timeline.png';
      $messagesPath = 'assets/img/manager/messages.png';
    }else if ($user['rolenama'] == 'agent'){
      $portofolioPerformancePath = 'assets/img/agent/portofolio_performance.png';
      $onsiteSurveyPath = 'assets/img/agent/onsite_survey.png';
      $timelinePath = 'assets/img/agent/timeline.png';
      $messagesPath = 'assets/img/agent/messages.png';
    }
