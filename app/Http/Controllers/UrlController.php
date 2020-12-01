<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Urls;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    public function storeUrl(Request $request) {

        $submitted_url = $request->url;
        $prior = DB::table('urls')->where('url', $submitted_url)->first();
        if (!empty($prior)) {
            return response()->json([
                'status' => '200',
                'result' => $prior,
            ]);
        }

        $url = new Urls();
        $url->url = $submitted_url;
        $url->shorten = 'N/A';
        $url->save();

        return response()->json([
            'status' => '200',
            'result' => $url,
        ]);
    }

    public function getUrls(Request $request) {
        $urls = Urls::all();
        if (empty($urls)) {
            return response()->json([
                'status' => '200',
                'message' => 'No Results Found',
            ]);
        }
        return $urls;
    }

    public function getURL(Request $request, $id) {
        $url = DB::table('urls')->find($id);
        return redirect($url->url);
    }
}
