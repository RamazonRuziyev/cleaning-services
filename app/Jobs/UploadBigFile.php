<?php

namespace App\Jobs;

use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;

class UploadBigFile implements ShouldQueue
{
    use Queueable;
    public $file;
    public $post;
    /**
     * Create a new job instance.
     */

    public function __construct($file , Post $post)
    {
        $this->file = $file;
        $this->post = $post;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        dd('job ishladi');
//        $path = Storage::putFile('public/photo', $this->file);
//        $this->post->update([
//            'photo' => $path
//        ]);
    }
}
