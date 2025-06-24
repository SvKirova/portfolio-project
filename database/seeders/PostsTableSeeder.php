<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
            'title' => 'Profession',
            'slug' => 'future-dream-profession',
            'body' => "<p>
As you may already know, there is no such thing as the IT professional job. If you are an undergraduate
IT professional, you have many options to choose from in the IT field. Almost every organization has to deal
with some form of IT. That is why the job market for IT-professionals is huge. You can work in many different
 areas after graduating. In this page you will learn more about my dream companies, their company culture and
 type of work. Some of my dream companies are Apple, Google and Microsoft. These companies are really popular
 in today's technology-driven world. Their mission is to create innovative products and cutting-edge technology
 that can help people in so many ways. I am looking for exactly that - the chance and ability to work with very
 talented colleagues and contribute to positive changes in society.
 Microsoft Corporation is an American multinational corporation and technology company headquartered in Redmond,
 Washington. Its best-known software products are the Windows line of operating systems, the Microsoft 365 suite
  of productivity applications, the Azure cloud computing platform and the Edge web browser. Its flagship hardware
   products are the Xbox video game consoles and the Microsoft Surface lineup of touchscreen personal computers.
  The American technology company Microsoft employs approximately 228,000 people in full-time positions worldwide.
  Around 60 percent of Microsoft's employees are located in the company's home country - the United States.
  Job roles include software engineers, product managers, data scientists, and cloud specialists. Their
  culture is founded in a growth mindset. I want to work at Microsoft because I see it as the perfect
  place for me to grow and continuously learn. The company's focus on a growth mindset really aligns
  with my personal goals — I want to constantly challenge myself, expand my skills, and contribute to
  projects that make a real difference. Microsoft gives me the opportunity to do just that, whether it
  is through working with cutting-edge technologies or collaborating with some of the brightest minds
  in the industry.
  Apple Inc. is an American multinational corporation and technology company headquartered and incorporated
  in Cupertino, California, in Silicon Valley. It is best known for its consumer electronics, software, and
  services. One of the most recognizable brands in the world, Apple created the first commercially successful
  personal computer and was also the first to bring the graphical user interface (GUI) into mass adoption.
  The company employed 164,000 full-time employees in 2022 and 154,000 employees in 2021. The number of employees
   increased by 6%. Apple fosters a culture of innovation, encouraging employees to think creatively and push
   boundaries. The company values new ideas and approaches, often prioritizing design and user experience in
   its products. Their job roles range from hardware and software engineers to product designers and retail
   specialists. I would want to work at Apple because of its focus on creating world-class, user-friendly
   products that shape how people interact with technology. The culture at Apple emphasizes problem-solving,
    innovation, and pushing boundaries, which aligns with my desire. Moreover, Apple's commitment to privacy
    and sustainability makes it a company I truly admire.
    Google LLC is an American multinational corporation and technology company focusing on online advertising,
     search engine technology, cloud computing, computer software, quantum computing, e-commerce, consumer
     electronics, and artificial intelligence (AI). It has been referred to as \"the most powerful company in
     the world\" and is one of the world's most valuable brands due to its market dominance, data collection,
     and technological advantages in the field of AI. Job roles at Google range from software engineers and
     product managers to data scientists and UX/UI designers. Google's employee count stands at 182,502,
     according to the latest data from the fourth quarter of 2023. This figure shows a slight decrease
     compared to the previous count of 182,381. I would want to work at Google because it represents a
     unique blend of innovation and opportunity. The chance to be at the forefront of technological advancements
     and contribute to impactful projects is incredibly motivating.</p>",
            'created_at' => '01-09-2024',
            'updated_at' => '01-09-2024'
            ],
            [
            'title' => 'First feedback',
            'slug' => 'first-feedback',
            'body' => "<p> Giving and receiving feedback is incredibly important and truly beneficial. During our
            first week at HZ UAS, we participated in an Over-the-shoulder code review with fellow students,
            following a structured four-step process. After the review, we had a checkpoint where we discussed
            common errors and defects identified during the process. I received very constructive and valuable
            feedback, which was helpful for improving my coding skills and code structure.
            In June, I received the following feedback concerning my \"Who am i\" questionnaire in the Learn
        Environment: \"Hi Svetlozara, Welcome and thank you for completing the Who am I questionnaire.
        I've been reviewing your answers and I noticed that you have no questions. That's good, and I
        wish you a pleasant summer and we see you next year. If there is anything else I can help you with,
        feel free to ask.\"
        During the Over-the-shoulder code review at the university, I received valuable feedback from my peers
         regarding the design choices I made - particularly in terms of the color palette and fonts. Some of
         the students pointed out that while my design was visually appealing, using a wide range of fonts
         and colors could potentially make the overall look feel a bit inconsistent and not that beautiful.
         They suggested that by limiting the number of fonts and colors, I could create a more professional
         and pretty aesthetic. This feedback has encouraged me to refine my approach to design, focusing on
         simplicity, detail and consistency for better visual harmony. Moreover, some of my classmates suggested
          that I can make a footer on every page of the website and put some useful links (my GitHub profile,
          my Email and the university's website) for the users in it.
          During the Pitch Day, I gathered some really helpful feedback too. While one of my classmates was
          reviewing my code structure and syntax, he saw that I didn't put the \"meta description\" tag that
           is used to define a description of a web page. Also, I received a suggestion to use the \"Beautify\"
            extension in Visual Studio Code to make my code structure prettier and more organized. Another
            person saw my file structure and advised me to rename some of the files so that the naming is more
            meaningful. This suggestion was made about my blog files. They were all named like: \"...-css.css\"
             (for example: \"dashboard-css.css\"). So he suggested renaming them to, for instance, \"...-style.css\"
              (\"dashboard-style.css\"). This way, the ending of the name of the file will be different from the
               file type and there won't be any confusion for the maintainer while searching for a file. Overall,
                I didn't receive any negative feedback - everything that my classmates and the teacher assistant
                 said was really beneficial for the future improvement of my website.</p>",
            'created_at' => '20-09-2024',
            'updated_at' => '20-09-2024'
            ],
            [
            'title' => 'Programming experience',
            'slug' => 'programming-experience',
            'body' => "<p> Programming has always been a fascinating and exciting field for me. My coding
            journey began in 2018 when I wrote my first C# program during my first year of high school.
             My IT teacher played a crucial role in this experience; her enthusiasm, guidance, and innovative
              teaching methods truly ignited my passion for coding. This early exposure laid the foundation
               for my continued exploration and love for the field, motivating me to delve deeper into various
                programming languages and technologies.
                A few years ago, I received a special gift from my boyfriend that profoundly changed my
                perspective. It was a flash drive with a single file on it—a batch (.bat) file labeled 'Open me.'
                Intrigued and somewhat confused, I followed his instructions to open it. When I double-clicked the
                file, a Command Prompt window appeared, displaying a series of questions. After answering them,
                the window closed automatically, revealing a previously hidden folder on the flash drive. I was
                captivated by how my responses had made the folder visible. This experience sparked a new level
                 of curiosity in me about programming and inspired me to envision the myriad types of software I
                 could learn to create.
                 A few months later, during an IT class at school, my teacher noticed my eagerness to expand
                 my knowledge and suggested I attend a specialized Web Design course. I enrolled, and from
                 that moment, everything began to align with my growing passion for coding. My interest in
                 programming has only deepened over time, and I continue to explore and learn with enthusiasm.
                 I have a little prior experience in programming. I completed the online course “Programming
                 Basics with JavaScript” by the Software University of Bulgaria (SoftUni) in July 2023.
                 This course provided me with a foundational understanding of JavaScript programming and basic
                 problem-solving skills.
                 Additionally, I have participated in some web development courses in my hometown, where I
                 learned the basics of HTML and CSS and created simple websites. These experiences have given
                  me a glimpse into the world of programming and web development and while I may not have
                  extensive expertise, I am eager to continue learning and growing in this field.
                  My high school education also introduced me to programming concepts through courses in
                  Mathematics, Informatics and ICT, where I gained exposure to languages like C#. While
                  my experience may be limited, I am enthusiastic about expanding my skills and pursuing
                  opportunities to further develop my abilities in programming and technology. </p>",
            'created_at' => '05-04-2024',
            'updated_at' => '07-04-2024'
            ],
            [
            'title' => 'Personal SWOT analysis',
            'slug' => 'swot-analysis',
            'body' => "<p> A personal SWOT analysis is a tool used to evaluate your career goals. SWOT stands
            for strengths, weaknesses, opportunities and threats. It considers all factors, whether positive,
            negative, external or internal. Internal factors are elements you bring to the analysis, such as
             strengths and weaknesses. External factors are elements outside of you, including opportunities
             and threats.
             Before the start of the academic year at HZ UAS, every student had to fill in a personal SWOT
             analysis. By doing that, each student can analyze their personal strengths and weaknesses as well
              as opportunities and possible threats for their studies. In this article, I will list my answers
               of the SWOT analysis questions and provide more detailed information about them.
               I am a dependable and organised person who can adapt to any situation and work alone or in a team.
               Critical thinking is one of my strongest assets. When faced with complex problems or challenging
               situations, I approach them with a clear and rational mindset, actively seeking out multiple perspectives
                and considering all available evidence before making decisions.
                I sometimes struggle with anxiety, which can make certain situations feel more challenging
                than they need to be. It is like having a constant worry in the back of my mind that can
                make it hard to relax or fully enjoy the present moment.
                My opportunities are: professional development and team collaboration.
                My threats are: burnout and stress. </p>",
            'created_at' => '20-04-2024',
            'updated_at' => '20-04-2024'
            ],
            [
            'title' => 'Study choice',
            'slug' => 'study-choice',
            'body' => "<p> I have been fascinated by programming for a long time and always knew I wanted to
             study something in that field. I chose ICT because it offers students and future software
             developers a wide range of opportunities when it comes to coding. For instance, an ICT graduate
              can become a computer programmer, software engineer, IT support specialist, IT security analyst,
               or systems designer, among many other options. This path allows me to focus on programming while
                also exploring different career directions, so I can discover what I enjoy most and pursue it
                further.
                There are so many reasons why I chose to study in the Netherlands. To begin with, the country
                is really internationally oriented - it welcomes students from over one hundred and sixty
                different countries. Secondly, the Netherlands is known for its high-quality education system.
                Dutch universities offer a wide variety of programs in various fields, innovative teaching
                methods and work-integrated learning. Moreover, the Netherlands is one of the happiest and
                safest countries. It has a robust and diversified economy and is a hub for technological
                innovation and research.
                One of the main reasons why I am interested in this university is that it offers practically-oriented
                education. Furthermore, HZ University of Applied Sciences is one of the most forward-looking
                Universities of Applied Sciences in the Netherlands. Another reason why I prefer this university is
                 the location. Middelburg is situated in a picturesque region. The city offers a peaceful atmosphere,
                 making it an ideal place for those seeking a quieter lifestyle. Additionally, I selected HZ University
                  of Applied Sciences because it will give me the opportunity to work in exciting real-life projects
                  for international companies and really apply my acquired knowledge into practice. In addition,
                  since 2011 HZ University of Applied Sciences has constantly been in the top three of Dutch
                  Universities of Applied Sciences.
                  After graduation, I am excited to keep learning about IT. There is always something new to explore,
                  and I am eager to dive into it. After I have completed the study program, I would like to become
                  an IT professional such as a web developer or software engineer. These roles would allow me to apply
                   the knowledge and skills I have gained during my studies to solve real-world problems and contribute
                    to technological innovation. My decision will depend on my interests, goals and the opportunities
                     available to me at the time of completion. </p>",
            'created_at' => '03-04-2024',
            'updated_at' => '03-04-2024'
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
