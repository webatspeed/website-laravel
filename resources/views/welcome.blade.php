@extends('layouts.master')

@section('title', 'Web at Speed')

@section('nav')
    @parent
    <svg class="hidden" xmlns="http://www.w3.org/2000/svg">
        <symbol id="shape-arrow-down" viewBox="288.1 406.4 19 29">
            <g>
                <polygon class="st0" points="297.6,433.9 291.1,427.4 292.6,426 297.6,431 302.6,426 304,427.4"></polygon>
                <rect x="296.6" y="401" class="st0" width="2" height="30"></rect>
            </g>
        </symbol>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150" height="115"
         viewBox="0 0 150 115" preserveAspectRatio="xMidYMid meet" class="hidden">
        <g id="shape-arrow-up">
            <rect id="svgEditorBackground" x="0" y="0" width="150" height="115"></rect>
            <path d="M7.754236221313477,10.100153923034668a140.25564575195312,140.25564575195312,0,0,1,137.50384521484375,101.00154113769531"
                  stroke="#CFF09E" id="e5_circleArc"></path>
            <line id="e6_line" x1="7.75423" y1="9.9229" x2="25.1194" y2="22.8582" stroke="#CFF09E"></line>
            <line id="e7_line" x1="7.754236347686344" y1="10.100154083204933" x2="28.66332725677725"
                  y2="1.5947611710323581" stroke="#CFF09E"></line>
        </g>
    </svg>
    <div class="wrap" id="splash">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 animated bounceInDown" id="logo">
                    {!! Html::image("img/logo_transparent_white.png") !!}
                </div>
                <div class="col-md-4 text-left arrow-up animated fadeIn">
                    <svg>
                        <use xlink:href="#shape-arrow-up"></use>
                    </svg>
                    <br/>
                    <span class="scribbled-note rotate-left">
                        A Faster Way for Your<br/>
                        Web and Mobile Applications
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 animated fadeIn delay-3">
                    <div class="arrow-down bounce">
                        <a href="#dev">
                        <span class="scribbled-note">
                            scroll down
                        </span>
                            <br/>
                            <svg>
                                <use xlink:href="#shape-arrow-down"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="wrap" id="dev">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Software Development for Hire</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        When it comes to web projects, saving time is often a key factor. We provide
                        software
                        development in the web field ranging from simple support through to overall project
                        management. In addition, this requires a thoughtful choice of technology. We
                        specialize in...
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="list-inline tech">
                        <li>
                            <i class="icon-php-alt hidden"></i>

                            <div class="caption">PHP</div>
                        </li>
                        <li>
                            <i class="icon-symfony hidden delay-01"></i>

                            <div class="caption">Symfony</div>
                        </li>
                        <li>
                            <i class="icon-laravel hidden delay-02"></i>

                            <div class="caption">Laravel</div>
                        </li>
                        <li>
                            <i class="fa fa-coffee hidden delay-03" aria-hidden="true"></i>

                            <div class="caption">Java</div>
                        </li>
                        <li>
                            <i class="icon-grails-alt hidden delay-04"></i>

                            <div class="caption">Grails</div>
                        </li>
                        <li>
                            <i class="fa fa-star hidden delay-05" aria-hidden="true"></i>

                            <div class="caption">Groovy</div>
                        </li>
                        <li>
                            <i class="fa fa-search hidden delay-06" aria-hidden="true"></i>

                            <div class="caption">Elasticsearch</div>
                        </li>
                        <li>
                            <i class="icon-javascript-alt hidden delay-07"></i>

                            <div class="caption">AngularJS</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap darker" id="startup">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 car hidden">
                    {!! Html::image('img/car.png') !!}
                </div>
                <div class="col-lg-5 pull-right">
                    <h2>Initiate Your Startup's Technology</h2>

                    <p>
                        Berlin has a vibrant startup community. Owing to their potential for growth, large
                        companies are often on the lookout to benefit from startups. We have experience handling
                        projects, whatever the size of the company, to ensure a dynamic internet environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap" id="usability">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Usability and Front-Ends</h2>

                    <p>
                        Developers are frequently asked this common question, "Do you do front-end or
                        back-end?"
                        Our answer is, “Both!” In the back-end you find the complexity of the application
                        while
                        the front-end is the interface to the user. The whole system exists to assist and to
                        extend user-friendliness. That's why no aspect can be neglected.
                    </p>
                </div>
                <div class="col-lg-7 text-center frontend hidden">
                    {!! Html::image('img/frontend.svg') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="wrap" id="devices">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Multiple Devices</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        Modern technology has brought us a wide range of devices: desktop computers, smart
                        phones, tablets with varying functions and utilizing different technology, often
                        involving great expense. We provide solutions that can be scaled over various
                        devices
                        saving you time all the while ensuring that the features remain uncompromised.
                    </p>
                </div>
                <div class="col-lg-12 text-center computers hidden">
                    {!! Html::image('img/computers.svg') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="wrap" id="customers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Customer's Opinion</h2>
                </div>
            </div>
            <div class="row bubbles">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="bubble hidden">
                        Torsten is an allrounder in terms of both front-end and back-end. His analytical skills, even
                        when it comes to highly complex features, are terrific and a great benefit for all IT ventures.
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bubble hidden">
                        We have successfully worked together with Torsten for the last years. In different
                        projects he took roles as requirements engineer, software architect or senior
                        developer.
                        He was always very reliable, fast and produced excellent results.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 text-center caption">
                    {!! Html::image("img/malte-barth.jpg", 'Malte Barth', array('class' => 'circle')) !!}<br/>
                    Malte Barth<br/>
                    Advisor and Entrepreneur at <a href="http://rwy.be">Runway Capital</a>
                </div>
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/lars-fink.jpg", 'Dr. Lars Fink', array('class' => 'circle')) !!}<br/>
                    Dr. Lars Fink<br/>
                    Founder and Managing Partner at <a href="https://www.beesec.de">bee security</a>
                </div>
            </div>
            <div class="row bubbles">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="bubble hidden">
                        Meeting the delivery date and the budget we completely rely on Torsten.
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bubble hidden">
                        Finally a developer who means 'done' when he says "it's done": not only did it look 'done',
                        it also worked 100% bug-free. And all that after being extraordinary fast - I can
                        enthusiastically recommend Torsten.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 text-center caption">
                    {!! Html::image("img/dennis-kaemker.jpg", 'Dennis Kämker', array('class' => 'circle')) !!}<br/>
                    Dennis Kämker<br/>
                    Founder and Managing Partner at <a href="http://www.club-family.de">Club Family</a>
                </div>
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/andreas-durth.jpg", 'Andreas Durth', array('class' => 'circle')) !!}<br/>
                    Andreas Durth<br/>
                    CMO and Manager at <a href="http://www.studienkreis.de">Studienkreis</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap colorful" id="headhunters">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-6 text-center cv hidden">
                    {!! Html::image('img/cv.png') !!}
                </div>
                <div class="col-lg-6 col-lg-offset-6">
                    <h2>Dear Headhunters</h2>
                    <p>
                        If your business is searching for IT experts sign up for the CV newsletter.
                        You'll never miss skill updates or new availability dates due to the emails we send
                        approximately three times a year.
                    </p>
                    <cv-newsletter></cv-newsletter>
                    <span class="scribbled-note rotate-left">
                        Encrypted Connection,<br/>
                        No Spam, Sign Off<br/>
                        Any Time
                    </span>
                    <svg>
                        <use xlink:href="#shape-arrow-up"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap" id="contact">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Content is King</h2>

                    <p>
                        Well, maybe a princeling at the moment. The company is under development.
                        We promise the result will be worth the anticipation!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection