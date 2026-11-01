<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use RuntimeException;

class PrivateImageStorage
{
    private const COLLECTIONS = ['agents', 'hostels', 'occupants'];
    private const EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    public function store(UploadedFile $file, string $collection): string
    {
        if (!in_array($collection, self::COLLECTIONS, true)) {
            throw new \InvalidArgumentException('Unsupported image collection.');
        }

        $extension = $file->guessExtension();
        if (!in_array($extension, self::EXTENSIONS, true)) {
            throw ValidationException::withMessages([
                'picture' => 'The picture must be a supported image.',
            ]);
        }

        $filename = Str::uuid() . '.' . $extension;
        $directory = 'private/uploads/' . $collection;
        if (!$file->storeAs($directory, $filename, 'local')) {
            throw new RuntimeException('Unable to store uploaded image.');
        }

        return 'private:' . $filename;
    }

    public function response(string $collection, string $filename)
    {
        if (!in_array($collection, self::COLLECTIONS, true)
            || !preg_match('/\A[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}\.(?:jpg|jpeg|png|gif|webp)\z/i', $filename)) {
            abort(404);
        }

        $path = 'private/uploads/' . $collection . '/' . $filename;
        $disk = Storage::disk('local');
        abort_unless($disk->exists($path), 404);

        return response()->file($disk->path($path), [
            'Cache-Control' => 'private, no-store',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }
}
