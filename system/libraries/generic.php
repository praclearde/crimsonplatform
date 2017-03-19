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

   use Crimson\System\Interfaces;

   class Generic implements Interfaces\Generic {

      private $array_key;
      private $array_value;
      private $uri;
      private $uri_query;
      private $uri_query_array;

      public function compareStrings($string1, $string2) {

         return (strcmp($string1, $string2) === 0 ? true : false);

      }

      public function decodeBase64String($string) {

         return base64_decode($string, true);

      }

      public function encodeStringToBase64($string) {

         return base64_encode($string);

      }

      public function returnUriPath() {

         $this->uri  = $_SERVER['REQUEST_URI'];
         return substr($this->uri, 0, (stripos($this->uri, '?') == true ? stripos($this->uri, '?') : strlen($this->uri)));

      }

      public function returnUriQueryArray() {

         $this->uri        = $_SERVER['REQUEST_URI'];
         $this->uri_query  = ltrim(substr($this->uri, stripos($this->uri, '?'), strlen($this->uri)), '?');

         foreach (explode('&', $this->uri_query) as $this->array_key => $this->array_value) {

            $this->uri_query_array[] = explode('=', $this->array_value);

         }

         return $this->uri_query_array;

      }

   }