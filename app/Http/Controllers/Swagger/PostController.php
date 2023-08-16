<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema (
 *                     @OA\Property(property="title", type="string", example="Some title"),
 *                     @OA\Property(property="content", type="string", example="Some content"),
 *                     @OA\Property(property="author", type="string", example="Some author"),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="content", type="string", example="Some content"),
 *                 @OA\Property(property="author", type="string", example="Some author"),
 *             ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="content", type="string", example="Some content"),
 *                 @OA\Property(property="author", type="string", example="Some author"),
 *             )),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Запись",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="content", type="string", example="Some content"),
 *                 @OA\Property(property="author", type="string", example="Some author"),
 *             ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema (
 *                     @OA\Property(property="title", type="string", example="Some title"),
 *                     @OA\Property(property="content", type="string", example="Some content"),
 *                     @OA\Property(property="author", type="string", example="Some author"),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="content", type="string", example="Some content"),
 *                 @OA\Property(property="author", type="string", example="Some author"),
 *             ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @Oa\JsonContent(
 *             @OA\Property(property="message", type="string", example="done"),
 *         ),
 *     ),
 * ),
 */
class PostController extends Controller
{
    //
}
