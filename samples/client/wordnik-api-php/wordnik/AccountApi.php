<?php
/**
 *  Copyright 2014 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class AccountApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * authenticate
	 * Authenticates a User
   * username, string: A confirmed Wordnik username (required)

   * password, string: The user's password (required)

   * @return AuthenticationToken
	 */

   public function authenticate($username, $password) {

  		//parse inputs
  		$resourcePath = "/account.{format}/authenticate/{username}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($password != null) {
  		  $queryParams['password'] = $this->apiClient->toQueryValue($password);
  		}
  		if($username != null) {
  			$resourcePath = str_replace("{" . "username" . "}",
  			                            $this->apiClient->toPathValue($username), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'AuthenticationToken');
  		return $responseObject;

      }
  /**
	 * authenticatePost
	 * Authenticates a user
   * username, string: A confirmed Wordnik username (required)

   * body, string: The user's password (required)

   * @return AuthenticationToken
	 */

   public function authenticatePost($username, $body) {

  		//parse inputs
  		$resourcePath = "/account.{format}/authenticate/{username}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($username != null) {
  			$resourcePath = str_replace("{" . "username" . "}",
  			                            $this->apiClient->toPathValue($username), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'AuthenticationToken');
  		return $responseObject;

      }
  /**
	 * getWordListsForLoggedInUser
	 * Fetches WordList objects for the logged-in user.
   * auth_token, string: auth_token of logged-in user (required)

   * skip, int: Results to skip (optional)

   * limit, int: Maximum number of results to return (optional)

   * @return array[WordList]
	 */

   public function getWordListsForLoggedInUser($auth_token, $skip=null, $limit=null) {

  		//parse inputs
  		$resourcePath = "/account.{format}/wordLists";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($skip != null) {
  		  $queryParams['skip'] = $this->apiClient->toQueryValue($skip);
  		}
  		if($limit != null) {
  		  $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
  		}
  		if($auth_token != null) {
  		 	$headerParams['auth_token'] = $this->apiClient->toHeaderValue($auth_token);
  		}
      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[WordList]');
  		return $responseObject;

      }
  /**
	 * getApiTokenStatus
	 * Returns usage statistics for the API account.
   * api_key, string: Wordnik authentication token (optional)

   * @return ApiTokenStatus
	 */

   public function getApiTokenStatus($api_key=null) {

  		//parse inputs
  		$resourcePath = "/account.{format}/apiTokenStatus";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($api_key != null) {
  		 	$headerParams['api_key'] = $this->apiClient->toHeaderValue($api_key);
  		}
      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'ApiTokenStatus');
  		return $responseObject;

      }
  /**
	 * getLoggedInUser
	 * Returns the logged-in User
   * auth_token, string: The auth token of the logged-in user, obtained by calling /account.{format}/authenticate/{username} (described above) (required)

   * @return User
	 */

   public function getLoggedInUser($auth_token) {

  		//parse inputs
  		$resourcePath = "/account.{format}/user";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($auth_token != null) {
  		 	$headerParams['auth_token'] = $this->apiClient->toHeaderValue($auth_token);
  		}
      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'User');
  		return $responseObject;

      }
  

}

