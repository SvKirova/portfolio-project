<x-layout.main
    description="I am Svetlozara Kirova, I am 19 years old, from Ruse, Bulgaria. Here you can find more information about my hobbies, what I really like to do in my free time and a little glimpse into my family."
    keywords="Characteristics of me, Profile"
    title="Portfolio | My profile">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css-files/profile-style.css') }}">
    @endpush

    <!-- Container in the top part of the page - contains an image of me and some personal information -->
    <div class="container">
        <img id="pic-in-container" src="{{ asset('images/profile-picture.png') }}" alt="profile-picture" width="600px"
             height="580px">
        <div class="text-in-container">
            <h1 id="about-me">-About Me-</h1>
            <hr>
            <h1 id="personal-info">Personal Information</h1>
            <hr>
            <ul>
                <li>Name: Svetlozara Kirova</li>
                <li>Age: 19</li>
                <li>Birthdate: 10/10/2005</li>
                <li>Hometown: Ruse, Bulgaria</li>
                <li>Previous education: Baba Tonka High School of Mathematics</li>
                <li>Previous profiles at school: Maths, IT, Informatics</li>
            </ul>
            <hr>
            <h1 id="characteristics">Characteristics of myself</h1>
            <hr>
            <ul>
                <li>I am honest and caring</li>
                <li>I am creative and inspired </li>
                <li>I am patient and persistent </li>
                <li>I am adaptable and ambitious</li>
                <li>I am open-minded and respectful </li>
            </ul>
            <hr>
        </div>
    </div>

    <!-- A collage and three paragraphs positioned next to each other -->
    <div class="information-about-me">
        <img id="collage" src="{{ asset('images/collage.png') }}" alt="collage" width="400px" height="580px">
        <div class="paragraphs">
            <p class="para"> I consider myself as a curious and dedicated person who values learning and growth. I
                enjoy tackling challenges and finding creative
                solutions. I strive to stay organized and manage my time effectively. I like problem-solving and
                that is one of the main reasons why i chose Maths and IT for my main profiles at school, and later
                ICT for my major. I also value collaboration and enjoy working with others. My aim is to continually
                improve and contribute positively, both in my personal projects
                and in group settings. </p>
            <p class="para"> Some of my hobbies are: reading books, coding &lt;/&gt; and crocheting. Also, I really
                enjoy spending time in nature, whether it is going on a picnic with friends
                or just taking a relaxing walk. Being outdoors helps me recharge and appreciate the simple things. I
                also love spending quality time with my family and making memories together. Traveling and exploring
                new places are big passions of mine too; I find excitement in discovering different cultures and
                landscapes. Each of these experiences adds a special touch to my life and keeps me inspired.</p>
            <p class="para">In the collage, you'll see a collection of cherished moments: my family, myself, a
                recent crochet project, and some wonderful new friends I've made here in the Netherlands. These
                snapshots capture the essence of what makes my life fulfilling and joyful.</p>
        </div>
    </div>
</x-layout.main>
