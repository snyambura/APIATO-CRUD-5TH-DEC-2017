<?php

/**
 * @apiGroup           Blog
 * @apiName            updateBlog
 *
 * @api                {PATCH} /v1/blogs/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('blogs/{id}', [
    'as' => 'api_blog_update_blog',
    'uses'  => 'Controller@updateBlog',
    'middleware' => [
      'auth:api',
    ],
]);
