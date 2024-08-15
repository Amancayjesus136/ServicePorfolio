<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log as ModelsLog;
use App\Models\Presentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PresentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $presentations = Presentacion::all();

            if ($presentations->isEmpty()) {
                return response()->json(['message' => 'No presentations found'], 404);
            }

            return response()->json([
                'message' => 'Presentations listed successfully',
                'data' => $presentations
            ], 200);

        } catch (\Exception $e) {
            ModelsLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'url' => request()->url(),
                'user_ip' => request()->ip(),
                'user_id' => auth()->check() ? auth()->id() : null,
            ]);

            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data['pre_estado'] = 1;

            $presentation = Presentacion::create($data);

            if ($request->hasFile('pre_imagen')) {
                $file = $request->file('pre_imagen');
                $fileName = $file->getClientOriginalName();

                $fotoPath = $file->storeAs('assets/presentations', $fileName, 'public');

                $presentation->pre_imagen = $fotoPath;
                $presentation->save();
            }

            return response()->json([
                'message' => 'Presentation created successfully',
                'data' => $presentation
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while processing your request.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $presentation = Presentacion::findOrFail($id);

            return response()->json([
                'message' => 'Presentation retrieved successfully',
                'data' => $presentation
            ], 200);

        } catch (\Exception $e) {
            ModelsLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'url' => request()->url(),
                'user_ip' => request()->ip(),
                'user_id' => auth()->check() ? auth()->id() : null,
            ]);

            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'pre_imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'pre_nombres' => 'required|string|max:255',
                'pre_titulo' => 'required|string|max:255',
                'pre_info' => 'nullable|string',
                'pre_informacion' => 'nullable|string',
            ]);

            $validatedData['pre_estado'] = 1;

            $presentation = Presentacion::findOrFail($id);

            if ($request->hasFile('pre_imagen')) {

                if ($presentation->pre_imagen && Storage::disk('public')->exists($presentation->pre_imagen)) {
                    $deleted = Storage::disk('public')->delete($presentation->pre_imagen);

                    if (!$deleted) {
                        return response()->json(['error' => 'Failed to delete old image'], 500);
                    }
                }

                $imagePath = $request->file('pre_imagen')->store('images', 'public');

                if (!$imagePath) {
                    return response()->json(['error' => 'Failed to store new image'], 500);
                }

                $validatedData['pre_imagen'] = $imagePath;
            }

            $presentation->update($validatedData);

            return response()->json([
                'message' => 'Presentation updated successfully',
                'data' => $presentation
            ], 200);

        } catch (\Exception $e) {
            ModelsLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'url' => request()->url(),
                'user_ip' => request()->ip(),
                'user_id' => auth()->check() ? auth()->id() : null,
            ]);

            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $presentation = Presentacion::findOrFail($id);

            if ($presentation->pre_imagen && Storage::disk('public')->exists($presentation->pre_imagen)) {
                $deleted = Storage::disk('public')->delete($presentation->pre_imagen);

                if (!$deleted) {
                    return response()->json(['error' => 'Failed to delete image'], 500);
                }
            }

            $presentation->delete();

            return response()->json(['message' => 'Presentation deleted successfully'], 204);

        } catch (\Exception $e) {
            ModelsLog::create([
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'url' => request()->url(),
                'user_ip' => request()->ip(),
                'user_id' => auth()->check() ? auth()->id() : null,
            ]);

            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }
}
