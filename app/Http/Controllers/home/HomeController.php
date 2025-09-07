<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blogDetails($slug)
    {
        $blogs = [
            'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025' => [
                'title' => 'Best Twitch Overlays and Logos to Level Up Your Stream in 2025',
                'img' => 'assets/img/blog/392-300-Best-Twitch-Overlays-and-Logos-to-Level-Up-Your-Stream-in-2025.png',
                'content' => "
                    <p>If you’re a gamer, you already know that streaming is more than just gameplay—it’s about building your brand. A strong Twitch logo, eye-catching overlays, and clean banners make your channel stand out and help viewers remember you.</p>
                    <p>Why overlays matter?</p>
                    <p>They create a professional look.</p>
                    <p>Keep your stream organized.</p>
                    <p>Build trust with your audience.</p>
                    <p>Animated vs. Static Overlays:</p>
                    <p>Animated overlays bring energy and movement to your stream.</p>
                    <p>Static overlays are clean, lightweight, and simple.</p>
                    <p>Logos & Banners:</p>
                    <p>Your Twitch logo is your identity. A good design should be memorable, scalable, and unique. Pair it with a banner that matches your brand, and you instantly look professional.</p>

                    <blockquote>
                        <p>Consistency across your logo, overlays, and banners makes your channel more recognizable and appealing to sponsors.</p>
                        <cite>💡 Pro Tip</cite>
                    </blockquote>
                ",
                'final-thoughts' => "
                    <h2 class='blog-title'>Final Thoughts</h2>
                    <p>At Funix, we help gamers and streamers craft logos, overlays, and banners that fit their unique style. Whether you want minimalist static designs or eye-catching animated graphics, we’ve got you covered.</p>
                ",
            ],
            'stream-branding-101-how-to-build-a-unique-twitch-channel' => [
                'title' => 'Stream Branding 101: How to Build a Unique Twitch Channel',
                'img' => 'assets/img/blog/392-300-Stream-Branding-101-How-to-Build-a-Unique-Twitch-Channel.png',
                'content' => "
                    <p>Why Branding Matters on Twitch</p>
                    <p>Streaming is more than just playing games—it’s about creating a recognizable identity. Your viewers should remember you not only for your gameplay but also for your unique look and style. That’s where stream branding comes in.</p>
                    <p>Key Elements of Stream Branding</p>

                    <h2 class='blog-title'>1. Logo</h2>
                    <p class='mb-30'>Your logo is the face of your channel. A great Twitch logo should be:</p>
                    <div class='checklist mb-35'>
                        <ul>
                            <li><i class='fas fa-check-circle'></i>Easy to use across all platforms</li>
                            <li><i class='fas fa-check-circle'></i>True to your personality or gaming style</li>
                        </ul>
                    </div>

                    <h2 class='blog-title'>2. Overlays</h2>
                    <p class='mb-30'>Overlays keep your stream organized while making it visually appealing. You can choose between:</p>
                    <div class='checklist mb-35'>
                        <ul>
                            <li><i class='fas fa-check-circle'></i>Static overlays → clean and minimal</li>
                            <li><i class='fas fa-check-circle'></i>Animated overlays → dynamic and eye-catching</li>
                        </ul>
                    </div>

                    <h2 class='blog-title'>3. Banners & Panels</h2>
                    <p class='mb-30'>These complete your Twitch profile. Matching colors, fonts, and styles help viewers instantly recognize your brand.</p>

                    <h2 class='blog-title'>4. Alerts & Transitions</h2>
                    <p class='mb-30'>Even small details like alerts and scene transitions add to your professional look.</p>

                    <h2 class='blog-title'>Tips for Building a Unique Channel</h2>
                    <p>Stay consistent with your colors and style.</p>
                    <p>Don’t copy others—find what reflects your personality.</p>
                    <p>Use overlays and logos that are scalable across different devices.</p>
                    <p>Update your branding as your channel grows.</p>
                ",
                'final-thoughts' => "
                    <h2 class='blog-title'>Final Thoughts</h2>
                    <p>Good branding builds trust, attracts new followers, and makes your channel stand out in a crowded Twitch space. Whether you need a custom logo, unique overlays, or a full stream branding package, Funix is here to help you design graphics that match your gaming identity.</p>
                ",
            ],
            'the-difference-between-static-and-animated-twitch-overlays' => [
                'title' => 'The Difference Between Static and Animated Twitch Overlays',
                'img' => 'assets/img/blog/392-300-The-Difference-Between-Static-and-Animated-Twitch-Overlays.png',
                'content' => "
                    <p>Don’t use extra PC resources</p>
                    <p>Easy to match with any game</p>

                    <h2 class='blog-title'>Best For:</h2>
                    <p class='mb-30'>Streamers who want a sleek, distraction-free design.</p>
                    
                    <p>Animated Overlays</p>
                    <p>Animated overlays include moving effects, transitions, or looping graphics.</p>
                    
                    <h2 class='blog-title'>Pros:</h2>
                    <p>Modern and dynamic look</p>
                    <p>Catch viewer attention quickly</p>
                    <p>Perfect for fast-paced or creative streams</p>
                    
                    <h2 class='blog-title'>Best For:</h2>
                    <p>Streamers who want a bold, eye-catching style that matches their energy.</p>
                    <p>Which One Should You Choose?</p>
                    <p>If you want simplicity and performance, go static.</p>
                    <p>If you want energy and flair, go animated.</p>
                    <p>Many streamers mix both—static for main layouts, animated for alerts or transitions.</p>
                ",
                'final-thoughts' => "
                    <h2 class='blog-title'>Final Thoughts</h2>
                    <p>Your overlays are a reflection of your brand. Whether you choose static, animated, or a mix of both, consistency is the key to standing out. At Funix, we design custom Twitch overlays tailored to your style—helping you look professional and unique on stream.</p>
                ",
            ],
        ];

        if (!isset($blogs[$slug])) abort(404);

        return view('home.blog', [ 'blog' => $blogs[$slug] ]);
    }
}
