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

   namespace Crimson\System\Libraries;

   use \DateTime;
   use \DateTimeZone;
   use Crimson\System\Interfaces;

   class Date implements Interfaces\Date {

      private function returnDateTimeObject($time, $timezone) {

         return new DateTime((!empty($time) ? $time : NULL), new DateTimeZone((!empty($timezone) ? $timezone : constant('SETTING_DATEANDTIME_TIMEZONE'))));

      }

      public function returnCurrentDateAndTime($timezone) {

         return $this->returnDateTimeObject(NULL, $timezone);

      }

      public function returnFormattedDateAndTime($time, $timezone, $format) {

         return $this->returnDateTimeObject($time, $timezone)->format((!empty($format) ? $format : constant('SETTING_DATEANDTIME_FORMAT')));

      }

      public function returnTimestamp($time, $timezone) {

         return $this->returnDateTimeObject($time, $timezone)->getTimestamp();

      }

   }