@extends('layouts.main')
@push('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.8;
            color: #333;
        }

        .overview-section {
            margin-bottom: 40px;
        }

        .overview-section h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .overview-section p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hero-section h2 {
            color: white;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 15px;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .hero-section p {
            font-size: 1.05em;
            line-height: 1.8;
            text-align: justify;
        }

        .content-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #3498db;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .content-card h2 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 1.6em;
            border-bottom: none;
        }

        .content-card p {
            margin-bottom: 12px;
            color: #555;
        }

        .highlight-text {
            background-color: #fff9e6;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #f39c12;
            margin-bottom: 20px;
        }

        .mission-vision {
            background-color: #e8f4f8;
            padding: 25px;
            border-radius: 8px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .mission-vision p {
            margin-bottom: 10px;
            font-size: 1.05em;
            font-weight: 500;
        }
    </style>
@endpush
@section('left-bar')
    @include('includes.left-bars.about')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">About</h2>

            <div class="hero-section">
                <h2>Overview</h2>

                <p>TerraVeritas Publishing is a global open-access publisher of peer-reviewed online journals, dedicated to
                    promoting academic excellence by publishing high-quality, original research from emerging authors and
                    established scholars alike. As part of an intellectual collective of researchers, scholars, industry
                    experts, and scientists, we are committed to exploring the depths of knowledge and uncovering new
                    frontiers across diverse disciplines.</p>

                <p>We publish multidisciplinary research in Science, Technology, Management, Education, Social Sciences, and
                    beyond. Our esteemed Editorial and Advisory Board comprise distinguished members from renowned
                    institutions, universities, and government organizations worldwide, ensuring rigorous academic
                    standards.</p>

                <p>Our mission is to be a leading provider of cutting-edge knowledge, facilitating rapid yet meticulous peer
                    review and streamlined publication processes to minimize delays between Submission and Acceptance. All
                    our research publications are Open Access, enabling unrestricted global dissemination of scientific
                    discoveries and innovations—free from economic or legal barriers.</p>

                <p>We actively distribute groundbreaking research from our prestigious authors to international libraries,
                    academic institutions, and R&D organizations, striving to set new benchmarks in scholarly publishing. By
                    sharing original, insightful, and engaging findings, we aim to advance global education and improve
                    lives through freely accessible knowledge.</p>

                <div class="mission-vision">
                    <p><strong>Our Vision:</strong> To empower every nation with open-access research, foster educational
                        growth and enhance quality of life worldwide.</p>
                </div>
            </div>

            <div class="overview-section">
                <div class="content-card">
                    <h2>Our Company</h2>

                    <p>TerraVeritas Publishing is one of the fastest-growing academic publishers, committed to making
                        high-quality research accessible to all. We cover a broad spectrum of disciplines and subjects,
                        publishing open-access research and hosting hundreds of journal articles online.</p>
                </div>

                <div class="content-card">
                    <h2>Our Purpose</h2>

                    <p>Our purpose is to drive human progress through the power of knowledge. We value diverse perspectives
                        and are committed to shaping a better future for all through our work. We believe knowledge empowers
                        people to think critically, act confidently, and reach their full potential. By providing trusted
                        information, we support learners, researchers, and innovators, helping to advance discovery and
                        enrich lives. We unite a wide range of voices, ideas, and insights to publish ideas and facts that
                        make a difference.</p>
                </div>

                <div class="content-card">
                    <h2>Our Authors</h2>

                    <p>We work alongside top authors and researchers to bring ideas to life. Our diverse network of experts
                        exchanges and challenges insights that advance their disciplines. Become part of a prestigious
                        journal collection showcasing the work of the world's influential thinkers and scholars.</p>
                </div>

                <div class="content-card">
                    <h2>Our People</h2>

                    <p>We are looking for partners with exceptional talent to drive meaningful change in the world. At
                        TerraVeritas Publishing, we welcome skilled individuals from all backgrounds to help shape our
                        growth and evolution. Our mission is to cultivate an inclusive, empowering environment where every
                        team member can succeed. No matter who you are, there's a place for you here.</p>
                </div>

                <div class="content-card">
                    <h2>Our Impact</h2>

                    <p>We aim to be a driving force for positive change—promoting knowledge, equity, and sustainability in
                        all aspects of our work. Guided by a clear purpose, we thoughtfully evaluate our social, economic,
                        and environmental impact. Whether through the content we publish, the policies we implement, or the
                        partnerships we build, we're dedicated to closing gaps, broadening access to information, and
                        supporting a more just future. To bring these values to life, we've launched focused initiatives
                        where everyone can succeed.</p>
                </div>
            </div>


        </div>
    </div>
@endsection
