<?php

   /*

      crimson platform
      Copyright (c) 2017 praclear. All rights reserved.

      Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
      associated documentation files (the "Software"), to deal in the Software without restriction,
      including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
      and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
      subject to the following conditions:

      The above copyright notice and this permission notice shall be included in all copies or substantial
      portions of the Software.

      THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
      LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
      NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
      WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
      SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

   */

   namespace Crimson\System\Core;

   // baseline
   define('ENVIRONMENT_BASELINE',                              realpath(dirname(basename($_SERVER['REQUEST_URI']))));

   // directory: modules
   define('ENVIRONMENT_DIRECTORY_MODULES',                     ENVIRONMENT_BASELINE.'/modules/');

   // directory: log
   define('ENVIRONMENT_DIRECTORY_LOGS',                        '/var/log/crimson/');

   // directory: system
   define('ENVIRONMENT_DIRECTORY_SYSTEM',                      ENVIRONMENT_BASELINE.'/system/');
   define('ENVIRONMENT_DIRECTORY_SYSTEM_CORE',                 ENVIRONMENT_DIRECTORY_SYSTEM.'core/');
   define('ENVIRONMENT_DIRECTORY_SYSTEM_DRIVERS',              ENVIRONMENT_DIRECTORY_SYSTEM.'drivers/');
   define('ENVIRONMENT_DIRECTORY_SYSTEM_INTERFACES',           ENVIRONMENT_DIRECTORY_SYSTEM.'interfaces/');
   define('ENVIRONMENT_DIRECTORY_SYSTEM_LIBRARIES',            ENVIRONMENT_DIRECTORY_SYSTEM.'libraries/');
   define('ENVIRONMENT_DIRECTORY_SYSTEM_MESSAGES',             ENVIRONMENT_DIRECTORY_SYSTEM.'messages/');

   // directory: uploads
   define('ENVIRONMENT_DIRECTORY_UPLOADS',                     ENVIRONMENT_BASELINE.'/uploads/');