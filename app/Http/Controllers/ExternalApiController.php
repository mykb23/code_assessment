<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ExternalApi as ExternalResource;
use GuzzleHttp\Client;
use Illuminate\Http\Resources\Json\JsonResource;
use stdClass;

class ExternalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $client = new Client();
        $response = $client->request(
            "GET",
            "https://www.anapioficeandfire.com/api/books",
            [
                'query' => ['name' => $name]
            ]
        );
        // dd($response);
        if ($response->getStatusCode() == 200) {
            $body =  $response->getBody()->getContents();
            $arr_body = json_decode($body);
            // dd($arr_body);
            // dd($exData);
            // $arr_tag = $arr_body[0];
            if ($arr_body) {
                // dd($arr_body);
                foreach ($arr_body as $key => $value) {
                    $exData = $value;
                }
                # code...
                return (new ExternalResource($exData))->additional([
                    'status_code' =>  200,
                    'status' => 'success'
                ]);
            } else {
                // return new ExternalResource([]);

                return (new ExternalResource($arr_body))->additional([
                    "status_code" => 200,
                    "status" => "success"
                ]);
            }

            // if ($body) {
            //     $obj = new stdClass();
            //     foreach ($arr_body as $key => $value) {
            //         $obj = $value;
            //         // dd($obj);
            //     }
            //     // dd($obj);
            //     return (new ExternalResource($obj))->additional([
            //         "status_code"=>200,
            //         "status"=>"success"
            //     ]);
            // }else {
            // }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
