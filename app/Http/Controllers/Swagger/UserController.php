<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/auth/login",
 *     summary="Создание токена",
 *     tags={"User"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema (
 *                     @OA\Property(property="email", type="string", example="user@mail.ru"),
 *                     @OA\Property(property="password", type="string", example="password"),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="access_token", type="string", example="Some token"),
 *             @OA\Property(property="token_type", type="string", example="Some type token"),
 *             @OA\Property(property="expires_in", type="integer", example=3600),
 *         ),
 *     ),
 * ),
 *
 */
class UserController extends Controller
{
    //
}
