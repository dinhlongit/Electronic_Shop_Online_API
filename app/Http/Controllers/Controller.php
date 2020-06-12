<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Do An Cong Nge Phan Mem",
 *         description="Link Luu Anh Cua San Pham :  http://nhom5.azurewebsites.net/public/upload/product/LUHIYYAYY4mAWkuKQS0kQtE2XyMX8iJCENHJFKwT.jpeg",
 *         termsOfService="http://swagger.io/terms/",
 *         @OA\Contact(
 *             email="apiteam@swagger.io"
 *         ),
 *         @OA\License(
 *             name="Apache 3.0",
 *             url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *         )
 *     ),
 *         @OA\Server(
 *         description="OpenApi serve 1",
 *         url="/public"
 *     ),
 *     @OA\ExternalDocumentation(
 *         description="Find out more about Swagger hihi",
 *         url="http://swagger.io"
 *     )
 * )
 */


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('cors');
    }
}
