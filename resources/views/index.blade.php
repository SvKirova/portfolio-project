<x-layout.main
    description="Hello! My name is Svetlozara Kirova. I am a first-year ICT student at HZ University of Applied Sciences. Here you can find my motivation and my CV that contains information about myself."
    keywords="Motives, ICT, HZ"
    title="Portfolio | Home">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/index-style.css') }}">
    @endpush

    <!-- Top part of the page -->
    <div id="up-section">
        <div class="greeting">
            <h1 id="hello-world">Hello world!</h1>
            <h2 id="who-am-i">I am Svetlozara Kirova, <br /> first-year ICT student at HZ UAS </h2>
            <button class="buttons" onclick="document.querySelector('#down-section').scrollIntoView({ behavior: 'smooth' });">Motives</button>
            <a href="{{ asset('cv.pdf') }}" target="_blank"><button class="buttons">My CV</button></a>
        </div>

        <div class="pic-of-me">
            <img src="{{ asset('images/pic-of-me.png') }}" alt="pic-of-me" width="450px" height="450px">
        </div>
    </div>

    <!-- Bottom part of the page -->
    <div id="down-section">
        <hr>
        <h1 id="my-motivation">My motivation</h1>
        <!-- Container for the two paragraphs and the image - for my motives -->
        <div class="content-container">
            <img id="pic-of-middelburg" src="{{ asset('images/middelburg.png') }}" alt="pic-of-middelburg" width="450px" height="450px">
            <div class="paragraphs">
                <p class="desire">I want to study <a href="https://hz.nl/en/study-programmes/it" target="_blank" class="desireLinks">Information and Communication Technology</a> at HZ UAS because:</p>
                <ul class="reasons">
                    <li>I desire to expand my knowledge in the field of ICT and acquire new technical and
                        professional skills;</li>
                    <li> I am willing to learn how to develop cutting-edge products and explore the world of
                        technology.</li>
                </ul>
                <p class="desire">I have a passion for programming and being part of the field of ICT will allow me
                    to contribute to positive changes in society. Moreover, software engineers are given the
                    opportunity to work remotely which provides flexibility in the work environment. I want to
                    achieve my goals in life and I believe that <a href="https://hz.nl/" target="_blank" class="desireLinks">HZ University of Applied Sciences</a> is the first step towards success.
                </p>
            </div>
        </div>
    </div>
</x-layout.main>
