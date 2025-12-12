<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\AboutContent;
use App\Models\FooterContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::all();
        return view('dashboard.content.index', compact('contents'));
    }

    /**
     * Show the form for editing about page.
     */
    public function editAbout()
    {
        $about = AboutContent::first() ?? new AboutContent();
        return view('edit.editabout', compact('about'));
    }

    /**
     * Update about content.
     */
    public function updateAbout(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'founded_year' => 'required|string',
            'active_users' => 'required|string',
            'materials' => 'required|string',
            'free_access' => 'required|string',
            'story_title' => 'required|string',
            'story_content' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'value1_title' => 'required|string',
            'value1_desc' => 'required|string',
            'value2_title' => 'required|string',
            'value2_desc' => 'required|string',
            'value3_title' => 'required|string',
            'value3_desc' => 'required|string',
            'testimonial_text' => 'required|string',
            'founder_name' => 'required|string',
            'founder_position' => 'required|string',
            'founder_linkedin' => 'nullable|string',
            'founder_twitter' => 'nullable|string',
            'collaboration_title' => 'required|string',
            'collaboration_desc' => 'required|string',
        ]);

        $about = AboutContent::first();
        if ($about) {
            $about->update($validated);
        } else {
            AboutContent::create($validated);
        }

        return redirect()->back()->with('success', 'Konten About berhasil diperbarui!');
    }

    /**
     * Show the form for editing footer.
     */
    public function editFooter()
    {
        $footer = FooterContent::first() ?? new FooterContent();
        return view('edit.editfooter', compact('footer'));
    }

    /**
     * Update footer content.
     */
    public function updateFooter(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'facebook_url' => 'nullable|string|url',
            'twitter_url' => 'nullable|string|url',
            'instagram_url' => 'nullable|string|url',
            'linkedin_url' => 'nullable|string|url',
            'youtube_url' => 'nullable|string|url',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'address' => 'nullable|string',
            'copyright_text' => 'required|string',
        ]);

        $footer = FooterContent::first();
        if ($footer) {
            $footer->update($validated);
        } else {
            FooterContent::create($validated);
        }

        return redirect()->back()->with('success', 'Konten Footer berhasil diperbarui!');
    }
}
