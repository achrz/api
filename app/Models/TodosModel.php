<?php // app/Models/TodosModel.php

namespace App\Models;

use CodeIgniter\Model;

class TodosModel extends Model
{
    protected $baseURL = 'https://script.google.com/macros/s/AKfycbxfyFeMYI30GwWS1fc4sMQ5vBlFxVCyR4Od1fL30IjZfMr6x-M8A7-XFJD_3lsnRRGI/exec';
    // protected $baseURL = 'https://script.googleusercontent.com/macros/echo?user_content_key=XarAjW83rg4V_eLx7ruNqQnzlvW8ni_6XE1fbH0VNsNiKI6yvcnmXEp7ZDXUSXTZ93p9XC5GNKMgl6uOwDzcdyKufxpmeJEMm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnPtXjQ3-4DxNLSmajbR-iLuBz7MDS8ZLWTsTw7dIbhTanQGnLd3DJiL0HNq7_wczex4G0VPU5yAAWDDKRVLWh6km0gf0HLNCcQ&lib=MVGyf9jPOjOPXJQGfnVE27MFMXgYlHeH-';
    // protected $baseURL = 'https://jsonplaceholder.typicode.com/todos';

    public function getTodos()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $this->baseURL, ['allow_redirects' => true]);
        // echo ($response->getStatusCode());
        // exit;
        if ($response->getStatusCode() == 200) {
            // Decode JSON response
            $todos = json_decode($response->getBody(), true);

            return $todos;
        } else {
            // Handle error
            return [];
        }
    }
}
