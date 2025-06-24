<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            ['question' => 'How can you print a document from your laptop at HZ?',
            'answer' => '<ol>
                <li>Go to the HZ website and login with your username and password.</li>
                <hr>
                <li>Click on Choose File and select the file you want to print - repeating the step if you need
                    to
                    add more
                    documents.</li>
                <hr>
                <li>After selecting all documents, tick the Advanced option to choose whether you want
                    double-sided
                    or black
                    & white printing.</li>
                <hr>
                <li>Choose between the "HZ printer" / "HZ plotter". After requesting the print you must register
                    using
                    your HZ
                    pass on the TouchID next to the multifunctional printer and select "Print".</li>
                <hr>
                <li>In the menu, select the printer to which you requested the print.</li>
                <hr>
                <li>The print will be completed only if there is enough credit on your printing account.</li>
                <hr>
                <li> When everything is completed, press "Stop" on the TouchID, and lastly - "Logout".</li>
            </ol>'
            ],
            [
                'question'=>'How can you scan a document and send it to your laptop at HZ?',
                'answer' => '<ol>
                Scanning is free, however you should have at least €0.07 credit on your HZ pass to proceed with
                the scanning.<br><br>
                <li>Register using your HZ pass on the TouchID next to the multifunctional printer.</li>
                <hr>
                <li>In the TouchID menu, select option "Scanning - Scan".</li>
                <hr>
                <li>Lay the original sheet on the feeder or glass plate.</li>
                <hr>
                <li>Press "Scan and Send" -> "Scan to me" -> "Yes" -> "Start button"</li>
                <hr>
                <li>Once this is ready, choose "Start Sending".</li>
                <hr>
                <li>When everything is completed, press "Stop" on the TouchID, and lastly - "Logout".</li>
            </ol>'
            ],
            [
                'question'=>'How can you buy something on the HZ web shop?',
                'answer'=>'<p> Visit [link], pick your item of choice, place your order, go to your
                shopping cart and check out! </p>',
                'link'=>
                'https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097'
            ],
            [
                'question'=>'How can you book a project space?',
                'answer' => '<p>Visit [link], click on "Make a reservation", "Reserve a room".
                Pick the room you want to book and view the possible timeslots available.</p>',
                'link'=>'https://hzuniversity.topdesk.net/tas/public/ssp/'
            ],
            [
                'question'=>'What are the instructions to park your car at the HZ parking lot?',
                'answer' => '<p> After you reveal your HZ pass at the barriers, you can park in
                             the lot of the university. </p>'
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
