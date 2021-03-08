<?php

use Components\Application;

$defaultPath = 'views/website/sections/';

include( Application::getAppPath($defaultPath . 'headline') );
include( Application::getAppPath($defaultPath . 'testimonial') );
include( Application::getAppPath($defaultPath . 'targets') );
include( Application::getAppPath($defaultPath . 'modules') );
include( Application::getAppPath($defaultPath . 'bonus') );
include( Application::getAppPath($defaultPath . 'investiment') );
include( Application::getAppPath($defaultPath . 'maciel_lemos') );
include( Application::getAppPath($defaultPath . 'faq') );
