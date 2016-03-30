@extends('layouts.master')

@section('title', 'Web at Speed')

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
                            <i class="icon-php hidden"></i>

                            <div class="caption">PHP</div>
                        </li>
                        <li>
                            <i class="icon-java-bold hidden delay-01"></i>

                            <div class="caption">Java</div>
                        </li>
                        <li>
                            <i class="icon-grails-alt hidden delay-02"></i>

                            <div class="caption">Grails</div>
                        </li>
                        <li>
                            <i class="fa fa-star-o hidden delay-03"></i>

                            <div class="caption">Groovy</div>
                        </li>
                        <li>
                            <i class="icon-javascript hidden delay-04"></i>

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
                <div class="col-lg-7 text-center speedometer hidden">
                    {!! Html::image('img/speedometer.png') !!}
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
                <div class="col-lg-12 text-center">
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-television fa-5x"></i>
                        </li>
                        <li>
                            <i class="fa fa-desktop fa-5x"></i>
                        </li>
                        <li>
                            <i class="fa fa-laptop fa-5x"></i>
                        </li>
                        <li>
                            <i class="fa fa-tablet fa-5x"></i>
                        </li>
                        <li>
                            <i class="fa fa-mobile fa-5x"></i>
                        </li>
                        <li>
                            <i class="fa fa-check fa-5x"></i>
                        </li>
                    </ul>
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
                <div class="col-lg-4">
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
                <div class="col-lg-4">
                    <div class="bubble hidden">
                        Meeting the delivery date and the budget we completely rely on Torsten.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/malte-barth.jpg", 'Malte Barth', array('class' => 'circle')) !!}<br/>
                    Malte Barth<br/>
                    Advisor and Entrepreneur at <a href="http://rwy.be">Runway Capital</a>
                </div>
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/lars-fink.jpg", 'Dr. Lars Fink', array('class' => 'circle')) !!}<br/>
                    Dr. Lars Fink<br/>
                    Founder and Managing Partner at <a href="https://www.nextlevel.de">next level</a>
                </div>
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/dennis-kaemker.jpg", 'Dennis Kämker', array('class' => 'circle')) !!}<br/>
                    Dennis Kämker<br/>
                    Founder and Managing Partner at <a href="http://www.club-family.de">Club Family</a>
                </div>
            </div>
            <div class="row bubbles">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="bubble hidden">
                        We have successfully worked together with Torsten for the last years. In different
                        projects he took roles as requirements engineer, software architect or senior
                        developer.
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
                    {!! Html::image("img/andreas-durth.jpg", 'Andreas Durth', array('class' => 'circle')) !!}<br/>
                    Andreas Durth<br/>
                    CMO and Manager at <a href="http://www.studienkreis.de">Studienkreis</a>
                </div>
                <div class="col-lg-4 text-center caption">
                    {!! Html::image("img/mitja-dreu.jpg", 'Mitja Dreu', array('class' => 'circle')) !!}<br/>
                    Mitja Dreu<br/>
                    CTO at <a href="http://www.avenso.com">Avenso</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap colorful" id="headhunters">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Headhunters</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu
                        fugiat nulla pariatur.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="wrap" id="contact">
        <div class="container body-content">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                        esse cillum dolore eu
                        fugiat nulla pariatur.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection