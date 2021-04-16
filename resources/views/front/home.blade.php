@extends('front.layout.front')
@section('title', 'Home')
@section('content')
    <section>
        <div class="slider-row">
            <div class="slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mt-5 pt-5">
                            <div class="main-header-heading">
                                <h1>
                                    SAAS
                                </h1>
                                <h2>
                                    <strong>Digital Hub</strong> for
                                </h2>
                                <h2>
                                    Small Business
                                </h2>
                                <h2>
                                    <strong>Marketing</strong> &
                                </h2>
                                <h2>
                                    Social <strong>Management</strong>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="btn-btns">
                        <a href="{{ route('free-trial') }}" class="shadow-lg free-trial"> Free Trial
                            (30 Days) </a>
                        <a href="javascript:void(0)" class="feature shadow-lg"> FEATURED PACKAGES </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-02">
                        <h2>Platform Features & Capabilities</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-file-text"></i></h1>
                            <h3>Email Integration</h3>
                            <p>
                                Email Integration with MailChimp or Constant Contact
                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-line-chart"></i></h1>
                            <h3>Social Media Marketing</h3>
                            <p>
                                Social Media Managed in One Location,
                                Make content and push to all sites in one
                                sitting rather than multiple postings.
                                Save time and effort.
                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-comments-o"></i></h1>
                            <h3>Text Message Posting</h3>
                            <p>
                                Text Messaging, Send SMS to clients for
                                information and for advertising specials.
                                Ask your clients to review your company
                                and improve online reputation and results.

                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-file-text-o"></i></h1>
                            <h3>Article & Content</h3>
                            <p>
                                Article and content feed helping you
                                to create posting content. Develop your own
                                strategy and keep your clients up to date
                                with your business and with their passions.
                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-television"></i></h1>
                            <h3>Reputation Monitor</h3>
                            <p>
                                Online review sites and reputation monitored.
                                Receive alerts when a review is posted so you
                                can take immediate action to thank or defend,
                                as you deem necessary.
                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h1><i class="fa fa-calendar"></i></h1>
                            <h3>Content Posting</h3>
                            <p>
                                Calendaring for up to 30 days of content postings
                                and advertising. Set the content and strategy
                                in advance and let our platform post for you
                                during the upcoming month.
                            </p>
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="people">
                        <h1>
                            <b>Get more done in less time</b>
                        </h1>
                        <h5>
                            <b>Great Tools = Happy People</b>
                        </h5>
                        <p class="text-muted">
                            Schedule activities based on your sales scripts: calls, meetings, mailing,
                            and quotations. Get all the information you need, directly on the opportunity:
                            website pages viewed, mail received, etc.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="people">
                        <h1>
                            <b>Stay connected to your customers</b>
                        </h1>
                        <h5>
                            <b>Real-time messaging to enhance collaboration.</b>
                        </h5>
                        <p class="text-muted">
                            Get a quick overview of what’s going on in your team. see when a
                            colleague logs a call or sends a quote. Share ideas and files
                            in real-time and catch-up on things you missed
                            when you were away.
                        </p>
                        <p class="text-muted">
                            I am text block. Click edit button to change this text.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ asset('assets/front/images/proform/circle.png') }}" alt="">
                </div>
                <div class="col-lg-6 knowledge">
                    <h2>Real-time overview</h2>
                    <p>
                        Easily review your performances & next activities.
                    </p>
                    <p>
                        Know exactly how you perform compares to your monthlytargets.
                        Organize your work based on your scheduled next actions.
                    </p>
                    <h1>
                        Customer Support
                    </h1>
                    <p>
                        Our team is here to provide you with personalized and outstanding service.
                        We also offer a range of self-learning tools in our support center:
                    </p>
                    <ul>
                        <li>
                            <i class="fa fa-check-circle"></i> Knowledge base
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i> Community
                        </li>
                    </ul>
                    <br>
                    <p>
                        <a href="javascript:void(0)">Visit our support center <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
