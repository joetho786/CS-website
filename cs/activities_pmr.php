<?php
include 'head.html';
?>

<head>
    <title>CS team - PG</title>
</head>

<body>
    <!--Navbar-->
    <?php
    include 'navbar.html';
    ?>
    <script>
        document.getElementById('nav-8').classList.add('active');
        document.getElementById('nav-8-1').classList.add('active');
        document.getElementById('nav-8').children[0].innerHTML += '<span class="sr-only">(current)</span>';
    </script>
    <div class="top-fixer-2"></div>
    <!--Section: Team v.1-->
    <section class="section team-section container">
        <div id="section-2">
            <div class="container text-center pt-1 mb-1">

                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">UG Acitvities</a>
                        </li>
                    </ul>
                </div>
                <div class="row flex-center mt-4">
                    <h3>
                        Freshanza
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Fresher’s organized by the UG team for the new batches. Students did organize various
                            competitions where the talent of new batches can be showcased. A virtual evening filled with
                            poetry, dance, music, laughter and lots of fun.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/freshenza22/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Gratitude day and Happiness day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>An evening full of fun and laughter. Students wrote messages of gratitude for their
                            classmates,
                            friends, seniors, mentors, and others. Postcards were given to students, where they
                            expressed
                            their gratitude. The evening was followed up by a poetry and open mic to showcase their
                            talent.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/gratitude22/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Connecto Patronum
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>An event which utilized the unique architecture of AirMeet. In an Airmeet, there are many
                            tables
                            (breakout rooms) and anyone can join any table to have a conversation with the people
                            already
                            sitting at the table. This is to promote conversations and encourage students to talk about
                            their
                            problems, interests and their lives with their peers. An initiative to encourage students to
                            make
                            interactions with others by helping them to share more and work on their growth.</p>
                    </div>

                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Interactive sessions with UG team and new students
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Interactive sessions were organized to discuss the experiences or challenges faced by the
                            students. A discussion to help each other and come up with the solutions to overcome
                            challenges.</p>
                    </div>

                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Building Meaningful Relationships During College Life
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Workshop and orientation was organized by YourDost to introduce students with the platform
                            and how
                            accessible it can be in their daily lives. Speaking to a counselor and seeking out
                            professional help by
                            sitting in the comfort of their room. YourDost platform is providing professional help to
                            students via text
                            messages, video calling or voice calling. Students can sign-up at the portal at any time of
                            their
                            requirement and access the facility.</p>
                        <p>During the second day of their orientation, Ms. Jyotsna Sodhi, Counseling Psychologist,
                            YourDost was
                            present throughout the day. She took a workshop on maintaining meaningful relationships, she
                            spoke
                            about setting the tone and staying aware about the red flags while being part of the
                            relationship. Later,
                            she was available for the individual counseling sessions. Students did sign up for the
                            individual sessions
                            with her.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/session/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Farewell of UG team
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Farewell was given to the students who were a part of the Student Wellbeing Team. The team
                            members
                            were recognized for their contributions and hard work and were given certificates as a token
                            of
                            appreciation. During the farewell, they were thanked for their dedication and commitment to
                            promoting a
                            culture of well-being within the student community. The students' efforts in organizing
                            various events and
                            initiatives that aimed to foster a supportive environment for their peers were applauded.
                            The farewell was
                            a heartfelt way of expressing gratitude and acknowledging the significant impact that the
                            team members
                            had on the student body.</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/ug_farewell22/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        CommuniFun: Cracking the Code of Engaging Communication
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>In the interactive meeting with the students titled "CommuniFun," students enthusiastically
                            participated and shared their challenges when it comes to initiating conversations with
                            colleagues or effectively expressing their emotions on specific topics. The session aimed to
                            provide practical solutions and enhance their communication skills. To make the learning
                            experience enjoyable, various fun games were incorporated, enabling students to grasp the
                            fundamental concepts of effective communication. By fostering a supportive and engaging
                            environment, participants gained valuable insights into overcoming communication barriers
                            and
                            expressing themselves confidently</p>

                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/CommuniFun/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>



                <div style="height:100px"></div>

                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">PG Acitvities</a>
                        </li>
                    </ul>
                    <!--pginfo-->

                    <!--Panel 1-->
                </div>
                <div class="row flex-center mt-4">
                    <h3>
                        Underneath the Stars
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>This event was conducted to celebrate Happiness Day, for which a movie screening was done
                            and the movie screened was “Chhichhore”. The message of the movie was to focus on your
                            efforts and work each day to excel your skills or talent. It also focused on the journey
                            through
                            which you learn multiple things rather than just focusing on the success of the
                            destination.
                            It
                            was
                            the IITJ’s first ever Open-air Movie Screening.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/open_air/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Importance of Mental Wellbeing during the Pandemic
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>The session was organized virtually to help students to deal with the ongoing stress for
                            dealing with
                            uncertain life situations. Agenda of the webinar was to focus on the mental, physical
                            and
                            emotional
                            well-being of the students. Tools were provided which they can use in their daily
                            routine
                            for a healthier
                            and happier lifestyle.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/mental_well/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Gratitude Day
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>Postcards were distributed to students to express their gratitude to each other and
                            cherish
                            the happy
                            moments they had at the campus. Evening was followed with fun and laughter by
                            reminiscing
                            the
                            memories and appreciating each other.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>

                <div class="row flex-center mt-4">
                    <h3>
                        Dusshera Celebration 'Good over Evil'
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>A bonfire to remember the victory of good over evil. Students gathered to share their
                            ideas
                            and stories to
                            initiate conversations. It was an evening full of laughter and storytelling about their
                            deeds to achieve or to
                            get their tasks done in life.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/dusshera/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-center mt-4">
                    <h3>
                        PG Orientation
                    </h3>
                    <div style="height:100px"></div>

                    <div style="text-align: left;">
                        <p>A week full of various activities for the fresh batches. Getting back on campus after
                            almost
                            2yrs,
                            and missing campus life, students seemed excited about the in-person orientation. Team
                            organised various activities like plantation drives, mini marathons, informal sessions,
                            interactive
                            sessions, to introduce the batches to their seniors, campus infrastructure, and campus
                            life.
                            Orientation week helped the students to make themselves comfortable with the campus life
                            and
                            clear out their doubts about their courses, academic life, co-curricular activities.
                            Also,
                            there were
                            various activities for students to showcase their talent. Students were also rewarded
                            with
                            the
                            prizes later on.</p>
                    </div>

                    <div style="height:50px"></div>
                </div>
                <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                    <div class="col-md-12">
                        <div class="mdb-lightbox">
                            <div class="row flex-center">
                                <?php
                                $dir = './images2/pg_orientation/';
                                $dir_open = opendir($dir);

                                while (false !== ($filename = readdir($dir_open))) {
                                    if ($filename != "." && $filename != "..") {
                                        $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                        echo $link;
                                    }
                                }

                                closedir($dir_open);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height:100px"></div>
                <div class="row flex-center nav-justified">
                    <ul id="gallery-nav" class="nav nav-tabs col tabs-4 blue darken-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pginfo" role="tab">Progressive Muscular
                                Relaxation (PMR)</a>
                        </li>
                    </ul>
                    <div class="tab-content text-justify">
                        <!--pginfo-->
                        <div class="tab-pane fade in show active" id="pmrinfo" role="tabpanel">
                            <div class="col-md-12">
                                <div class="mdb-lightbox">
                                    <div class="row flex-center">
                                        <?php
                                        $dir = './images2/pmr_img/';
                                        $dir_open = opendir($dir);

                                        while (false !== ($filename = readdir($dir_open))) {
                                            if ($filename != "." && $filename != "..") {
                                                $link = "<figure class=\"col-md-4 col-sm-6 col-6\">
                        <a href='$dir$filename' data-size=\"1600x1067\">
                            <img src=\"images/loader.gif\" data-src=\"$dir" . "$filename\" class=\"lazyload img-fluid\">
                        </a>
                    </figure>
                    ";
                                                echo $link;
                                            }
                                        }

                                        closedir($dir_open);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Panel 1-->
                    </div>
                    <div class="row flex-center mt-4">
                        <h3>
                            One step towards Calmness
                        </h3>
                        <div style="text-align: left;">
                            <h5><b>The Technique:</b></h5>
                            <p>Progressive Muscular Relaxation (PMR) is a medically proven technique to sooth and calm
                                your nerves. Well-known for it’s ease , this user friendly exercise can take care of
                                anxiety and it’s resultant fall-outs.</p>
                            <h5 class="mt-2"><b>How does PMR work:</b></h5>
                            <p>
                                PMR prompts you to enhance the awareness of your own bodily reactions and changes in
                                tense/ worrying situations. This follows the learning to, first releases muscular
                                tension and finally calming down / soothing of mind.
                                You achieve this by following a series of simple verbal instructions about small
                                muscles, with eyes closed and concentrating on own body. PMR can be done seating or
                                lying down position and ends with deep relaxation of body. It does not take more than 30
                                minutes of PMR for you to experience calming effect and mental peace.
                                A good PMR session underlines the principal of Mind-Body Relatedness; which shows that
                                we can unlearn the reflexive habits of tension/ anxiety responses to stressful
                                situations by re-instructing our mind and body.
                                The relaxed state of mind and body, achieved through PMR learning, leaves it’s positive
                                effect on our health, with better self-control and preparedness to face tensions in
                                life.
                                The ease of instructions can help you to master it on your own with regular practice. As
                                there are no copyrights for this, you can help your friends and family members too,
                                after mastering yourself.
                            </p>
                            <h5 class="mt-2"><b>Where can it help you:</b></h5>
                            <p>
                                Most of those situations when you become very tense, worry too much, anticipate bad
                                outcomes such as exam tensions, anxiety/ headaches before viva/ interview, stage fright,
                                speaking in front of class, strangers/ opposite gender and so forth.
                                PMR is also beneficial in improving disturbed sleep, poor appetite/ digestion, fatigue,
                                hypertensions , ulcers and other problems having origins with mental anxiety and
                                emotional disturbances.
                            </p>
                        </div>
                        <div class=" mt-3 md-5"
                            style="font-style: italic;font-weight: 700;font-family: 'Roboto';color: cornflowerblue;">
                            Learning Progressive Muscular Relaxation (PMR) is a positive step towards healthy life
                            style. Take the first step…..
                        </div>
                        <div style="height:150px"></div>
                    </div>

                </div>

    </section>


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/compiled.min.js"></script>

    <script type="text/javascript" src="js/lazysizes.min.js"></script>
    <!--Footer-->
    <?php
    include 'footer.html';
    ?>