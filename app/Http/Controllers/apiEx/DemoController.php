<?php

/** @noinspection ALL */

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\BasicController;
use App\Models\Registration\Employer;
use App\Models\Repository\DocumentCategory;
use App\Models\Repository\DocumentFile;
use App\Models\Repository\DocumentFileType;
use App\Models\Repository\DocumentRepository;
use App\Models\Repository\DocumentSubCategory;
use App\Models\Repository\DocumentType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ConfigurationController extends BasicController
{

    public function addDocumentType(Request $request): \Illuminate\Http\JsonResponse
    {
        $clientId = config('params.paths.e-office-clientId');
        $clientSecret = config('params.paths.e-office-clientSecret');
        $url = config('params.paths.e-office-token-url');
        $urlRepo = config('params.paths.repository') . 'external/settings/add-document-type';
        $token = DocumentRepository::getAccessToken($clientId, $clientSecret, $url);
        try {
            $payload = [
                'name' => $request->document_type_name,
                'mapperId' => $request->mapper_id,
                'externalSystem' => $request->system
            ];
            print_r($payload);
            die();
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token['access_token'],
            ])->post(
                $urlRepo,
            );
            dd($response->v);
            $record = $response->json();
            $documentCategory = new DocumentType();
            $documentCategory->mapper_id = $request->mapper_id;
            $documentCategory->document_type = $request->document_type_name;
            $documentCategory->source = $request->source;
            $documentCategory->category = $request->category;
            $documentCategory->reference_id = $record['data'];
            $documentCategory->save();
            return $this->sendResponse($record, 'Successfully');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), 'Error processing the request.');
        }
    }

    #create document category
    public function addDocumentCategory(Request $request): \Illuminate\Http\JsonResponse
    {
        $clientId = config('params.paths.e-office-clientId');
        $clientSecret = config('params.paths.e-office-clientSecret');
        $url = config('params.paths.e-office-token-url');
        $urlRepo = config('params.paths.repository') . 'external/settings/add-document-category';
        $token = DocumentRepository::getAccessToken($clientId, $clientSecret, $url);
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token['access_token'],
            ])->post($urlRepo, [
                'name' => $request->category_name,
                'externalSystem' => $request->externalSystem
            ]);
            $record = $response->json();
            $documentCategory = new DocumentCategory();
            $documentCategory->category_name = $request->category_name;
            $documentCategory->system = $request->externalSystem;
            $documentCategory->reference_id = $record['data'];
            $documentCategory->save();
            return $this->sendResponse($record, 'Successfully');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), 'Error processing the request.');
        }
    }

    #create document sub category
    public function addDocumentSubCategory(Request $request): \Illuminate\Http\JsonResponse
    {
        $clientId = config('params.paths.e-office-clientId');
        $clientSecret = config('params.paths.e-office-clientSecret');
        $url = config('params.paths.e-office-token-url');
        $urlRepo = config('params.paths.repository') . 'external/settings/add-document-sub-category';

        $token = DocumentRepository::getAccessToken($clientId, $clientSecret, $url);

        //get category uid
        $category = DocumentCategory::find($request->category_id);

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token['access_token'],
            ])->post($urlRepo, [
                'name' => $request->sub_category_name,
                'documentCategoryUid' => $category['reference_id']
            ]);
            $record = $response->json();
            $documentCategory = new DocumentSubCategory();
            $documentCategory->sub_category_name = $request->sub_category_name;
            $documentCategory->category_id = $request->category_id;
            $documentCategory->system = $request->system;
            $documentCategory->reference_id = $record['data'];
            $documentCategory->save();
            return $this->sendResponse($record, 'Successfully');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), 'Error processing the request.');
        }
    }

    #create document file type
    public function addFileType(Request $request): \Illuminate\Http\JsonResponse
    {
        $clientId = config('params.paths.e-office-clientId');
        $clientSecret = config('params.paths.e-office-clientSecret');
        $url = config('params.paths.e-office-token-url');
        $urlRepo = config('params.paths.repository') . 'external/settings/add-file-type';
        $token = DocumentRepository::getAccessToken($clientId, $clientSecret, $url);

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token['access_token'],
            ])->post($urlRepo, [
                'name' => $request->file_type_name,
                'externalSystem' => $request->system
            ]);
            $record = $response->json();
            $documentCategory = new DocumentFileType();
            $documentCategory->file_type_name = $request->file_type_name;
            $documentCategory->system = $request->system;
            $documentCategory->reference_id = $record['data'];
            $documentCategory->save();
            return $this->sendResponse($record, 'Successfully');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), 'Error processing the request.');
        }
    }
}
