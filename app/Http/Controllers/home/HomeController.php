<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function serviceDetails($slug)
    {
        $services = [
            'gaming-logo-branding' => [
                'title' => 'Gaming Logo Branding',
                'content' => "
                    <h2 class='sec-title page-title h3'>We give the best Services</h2>
                        <p class='>
                        Gaming Logo & Branding is more than just design – it’s the visual identity that defines your gaming presence, builds recognition, and creates a strong connection with your audience. From streamers and esports teams to gaming companies, a well-crafted logo and consistent branding help you stand out in a competitive industry. 
                        </p>
                        <p class='mb-30'>
                        Our branding strategies focus on delivering unique, memorable, and impactful designs that reflect your personality and style. Whether it’s a custom gaming logo, Twitch overlays, or complete brand packages, we ensure that your identity communicates professionalism, creativity, and authenticity.
                        </p>

                        <h3 class='sec-title page-title mt-35'>Solutions We Offer</h3>
                        <p class='mb-30'>
                        Our Gaming Logo & Branding services include professional logo design, custom Twitch overlays, animated banners, esports team branding, and complete visual identity packages. By blending creativity with strategy, we craft designs that are not only visually striking but also help you build credibility and loyalty. 
                        With the right branding, gamers, streamers, and businesses can establish a strong digital presence, increase visibility, and create long-lasting impressions.
                        </p>
                ",
            ],
            'twitch-overlays-design' => [
                'title' => 'Twitch Overlays Design',
                'content' => "
                    <h2 class='sec-title page-title h3'>We give the best Services</h2>
                    <p class=''>Twitch overlays design is one of the most essential elements for streamers who want to build a professional and engaging channel. A well-crafted overlay not only enhances the visual appeal of your stream but also helps you establish a strong brand identity. From webcam frames and alerts to chat boxes and animated transitions, overlays keep your stream looking polished and interactive.</p>
                    <p class='mb-30'>Custom Twitch overlays are designed to reflect your unique personality, theme, or brand. They create a consistent look that helps you stand out from thousands of other streamers. Whether you’re a casual gamer or a full-time content creator, a great overlay design can attract more viewers, encourage subscriptions, and elevate the overall experience for your audience.</p>

                    <h3 class='sec-title page-title mt-35'>Solutions We Offer</h3>
                    <p class='mb-30'>We provide a wide range of Twitch overlay design solutions tailored to your streaming needs. Our services include static and animated overlays, personalized webcam frames, interactive alerts, and fully customized branding kits. By focusing on clean layouts, vibrant visuals, and smooth animations, we help you create a stream setup that leaves a lasting impression on your viewers. With our Twitch overlays, you get both functionality and creativity, ensuring your channel looks professional, engaging, and unforgettable.</p>
                ",
            ],
            'animated-overlays' => [
                'title' => 'Animated Overlays',
                'content' => "
                    <h2 class='sec-title page-title h3'>We give the best Services</h2>
                    <p class=''>Animated overlays are one of the most engaging ways to enhance live streams, gaming content, or digital broadcasts. They add movement, style, and a professional look that keeps audiences captivated. Whether you are a gamer, streamer, or content creator, using animated overlays helps your channel stand out and creates a memorable visual identity.</p>
                    <p class='mb-30'>These overlays can include animated alerts, transitions, lower thirds, and interactive elements that align with your brand. By incorporating motion graphics, you not only entertain your viewers but also strengthen your personal or business branding, making your content feel more premium and polished.</p>
                    <h3 class='sec-title page-title mt-35'>Solutions We Offer</h3>
                    <p class='mb-30'>Our animated overlay solutions are designed to meet the needs of streamers and creators across platforms like Twitch, YouTube, and Facebook Gaming. From custom-made transitions and stream alerts to full overlay packages, we focus on delivering designs that boost engagement and viewer retention. With high-quality motion graphics, vibrant effects, and tailored branding, we help elevate your streaming experience to the next level.</p>
                ",
            ],
            '2d-3d-vtuber-models' => [
                'title' => '2d 3d Vtuber Models',
                'content' => "
                    <h2 class='sec-title page-title h3'>We give the best Services</h2>
                    <p class=''>Our 2D & 3D Vtuber model creation service is designed to bring your virtual identity to life with stunning precision and creativity. Whether you’re looking for a sleek 2D anime-style avatar or a fully rigged 3D character for streaming, gaming, or social platforms, we craft models that perfectly capture your personality and brand. Each model is tailored with custom expressions, detailed animations, and fluid movements to keep your audience engaged and entertained.</p>
                    <p class='mb-30'> From concept design and illustration to rigging and live integration, we cover every step to ensure your Vtuber model is unique, expressive, and ready for performance. Our goal is to deliver characters that not only look amazing but also perform smoothly across platforms like Twitch, YouTube, TikTok, and VRChat. With a balance of creativity and technical expertise, we turn your ideas into a virtual reality.</p>
                    <h3 class='sec-title page-title mt-35'>Solutions We Offer</h3>
                    <p class='mb-30'>We offer complete solutions for Vtubers at every stage of their journey. Our 2D Vtuber models include custom illustrations, Live2D rigging, and facial tracking compatibility, making them ideal for streamers who prefer a lightweight yet expressive design. For creators seeking a more immersive experience, our 3D Vtuber models are built with advanced rigs, physics-based hair and clothing, and VR-ready features that allow full-body tracking. Whether you want a simple digital persona or a highly detailed character with advanced motion capabilities, our services give you the tools to stand out in the Vtuber community.</p>
                ",
            ],
            'custom-illustrations-art' => [
                'title' => 'Custom Illustrations Art',
                'content' => "
                    <h2 class='sec-title page-title h3'>We give the best Services</h2>
                    <p class='>
                    Custom Illustrations & Art are powerful tools for businesses, brands, and individuals looking to stand out in today’s visually driven world. From personalized character designs to detailed digital artwork, these creative solutions help bring unique ideas to life. High-quality custom illustrations not only capture attention but also communicate messages in a way that stock images or generic visuals simply cannot. They reflect creativity, originality, and the essence of your brand or personal vision.
                    </p>
                    <p class='mb-30'>
                    Whether you need artwork for marketing campaigns, websites, social media, or personal projects, custom illustrations can elevate your storytelling and enhance engagement. Investing in professional art ensures that your content remains authentic, memorable, and perfectly aligned with your identity.
                    </p>

                    <h3 class='sec-title page-title mt-35'>Solutions We Offer</h3>
                    <p class='mb-30'>
                    Our illustration and art services include a wide range of creative solutions such as character design, concept art, portraits, vector graphics, and digital painting. We also provide custom artwork for branding, book covers, game design, merchandise, and social media content. Each piece is crafted to match your vision with attention to detail and originality. By combining creativity with modern design tools, we ensure artwork that enhances your brand presence, boosts audience engagement, and leaves a lasting impression.
                    </p>

                ",
            ],
        ];

        if (!isset($services[$slug])) abort(404);

        return view('home.service', [ 'service' => $services[$slug] ]);
    }
    public function contactSend(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'number'  => 'nullable|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);
        // dd($request->all());

        $data = $request->only('name', 'email', 'number', 'subject', 'message');

        try {
            Mail::send('emails.contact', [
                'name'    => $data['name'],
                'email'   => $data['email'],
                'number'  => $data['number'],
                'subject' => $data['subject'],
                'user_message' => $data['message'],
            ], function ($m) use ($data) {
                $m->from('info@funixdigital.com', 'Funix Digital')
                ->replyTo($data['email'], $data['name'])
                ->to('info@funixdigital.com')
                ->subject('New Contact Form: ' . $data['subject']);
            });
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: '.$e->getMessage());
            return back()->with(['status' => 'error', 'message' => 'Something went wrong. Please try again later.']);
        }
        return back()->with(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
    }
}
