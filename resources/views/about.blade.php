@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.about')
@endsection
@section('content')
    <style>
        h1,
        h2,
        h3,
        h4,
        p,
        ul li,
        td,
        label {
            font-size: 12px !important;
        }

        p,
        ul li {
            text-align: justify;
        }
    </style>
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">About</h2>

            <div class="hero-section" id="overview">
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
                <div class="content-card" id="our-company">
                    <h2>Our Company</h2>

                    <p>TerraVeritas Publishing is one of the fastest-growing academic publishers, committed to making
                        high-quality research accessible to all. We cover a broad spectrum of disciplines and subjects,
                        publishing open-access research and hosting hundreds of journal articles online.</p>
                </div>

                <div class="content-card" id="our-purpose">
                    <h2>Our Purpose</h2>

                    <p>Our purpose is to drive human progress through the power of knowledge. We value diverse perspectives
                        and are committed to shaping a better future for all through our work. We believe knowledge empowers
                        people to think critically, act confidently, and reach their full potential. By providing trusted
                        information, we support learners, researchers, and innovators, helping to advance discovery and
                        enrich lives. We unite a wide range of voices, ideas, and insights to publish ideas and facts that
                        make a difference.</p>
                </div>

                <div class="content-card" id="our-authors">
                    <h2>Our Authors</h2>

                    <p>We work alongside top authors and researchers to bring ideas to life. Our diverse network of experts
                        exchanges and challenges insights that advance their disciplines. Become part of a prestigious
                        journal collection showcasing the work of the world's influential thinkers and scholars.</p>
                </div>

                <div class="content-card" id="our-people">
                    <h2>Our People</h2>

                    <p>We are looking for partners with exceptional talent to drive meaningful change in the world. At
                        TerraVeritas Publishing, we welcome skilled individuals from all backgrounds to help shape our
                        growth and evolution. Our mission is to cultivate an inclusive, empowering environment where every
                        team member can succeed. No matter who you are, there's a place for you here.</p>
                </div>

                <div class="content-card" id="our-impact">
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