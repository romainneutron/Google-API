<?php
/**
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google;
use Google\IO\HttpRequest;

/**
 * Abstract IO class
 *
 * @author Chris Chabot <chabotc@google.com>
 */
interface IO
{
    /**
     * An utility function that first calls $this->auth->sign($request) and then executes makeRequest()
     * on that signed request. Used for when a request should be authenticated
     * @param \Google\IO\HttpRequest $request
     * @return HttpRequest $request
     */
    public function authenticatedRequest(HttpRequest $request);

    /**
     * Executes a apIHttpRequest and returns the resulting populated httpRequest
     * @param \Google\IO\HttpRequest $request
     * @return HttpRequest $request
     */
    public function makeRequest(HttpRequest $request);

    /**
     * Set options that update the transport implementation's behavior.
     * @param $options
     */
    public function setOptions($options);

}
