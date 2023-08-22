<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\Facades\Image;

class uploadImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $req, Closure $next): Response
    {
        if ($req->hasFile('thumbnail_image')) {
            $image = $req->file('thumbnail_image');
            $input['imagename'] = 'images';
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->path())->resize(550, 750);
            $img->save($input['imagename'] . '/' . $imageName);
            $url =  URL::to($input['imagename'] . '/' . $imageName);
            session(['url_image' => $url]);
        }
        return $next($req);
    }
}
