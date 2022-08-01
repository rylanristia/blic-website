@extends('layouts.frontend')

@section('title')
    Home - Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded">
            <h1 class="white">Hi, Bluetizen!</h1>
            <p>Welcome to our IT club at Budi Luhur University</p>
        </div>
    </div>

    <div class="section-who-we-are">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <h3 class="mb-4">Who we are?</h3>
                    <p class="pe-3">Budi Luhur Information Technology Club or commonly known as BLIC was established
                        since end of August 2021. BLIC was established with the aim of being a center for developing the
                        potential of
                        Budi Luhur University students in the field of Information Technology</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ url('./images/universitasbudiluhur.jpeg') }}" alt="" class="image-who-we-are">
                </div>
            </div>
        </div>
    </div>

    <div class="section-division">
        <div class="container mt-3 mb-3">
            <h3 class="text-center mb-2">Our division</h3>
            <p class="text-center mb-5">We have various division that you could learn and discuss with.</p>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Web programming</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, explicabo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Mobile programming</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, explicabo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>UI/UX</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, explicabo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Data mining</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, explicabo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="">
                        <div class="card px-5 py-5">
                            <h4>Cyber security</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, explicabo.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="most-fav-book-section">
        <div class="section-faq">
            <div class="accordion-1">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-6 mx-auto text-center">
                            <h3>Frequently Asked Questions</h3>
                            <p>A lot of people don't appreciate the moment until it's passed. I'm not trying my hardest,
                                and I'm not trying to do </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="accordion" id="accordionRental">
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            How do I order?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionRental" style="">
                                        <div class="accordion-body text-sm opacity-8">
                                            We’re not always in the position that we want to be at. We’re constantly
                                            growing. We’re constantly making mistakes. We’re constantly trying to
                                            express ourselves and actualize our dreams. If you have the opportunity to
                                            play this game
                                            of life you need to appreciate every moment. A lot of people don’t
                                            appreciate the moment until it’s passed.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How can i make the payment?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            It really matters and then like it really doesn’t matter. What matters is
                                            the people who are sparked by it. And the people who are like offended by
                                            it, it doesn’t matter. Because it's about motivating the doers. Because I’m
                                            here to follow my dreams and inspire other people to follow their dreams,
                                            too.
                                            <br>
                                            We’re not always in the position that we want to be at. We’re constantly
                                            growing. We’re constantly making mistakes. We’re constantly trying to
                                            express ourselves and actualize our dreams. If you have the opportunity to
                                            play this game of life you need to appreciate every moment. A lot of people
                                            don’t appreciate the moment until it’s passed.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How much time does it take to receive the order?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            The time is now for it to be okay to be great. People in this world shun
                                            people for being great. For being a bright color. For standing out. But the
                                            time is now to be okay to be the greatest you. Would you believe in what you
                                            believe in, if you were the only one who believed it?
                                            If everything I did failed - which it doesn't, it actually succeeds - just
                                            the fact that I'm willing to fail is an inspiration. People are so scared to
                                            lose that they don't even try. Like, one thing people can't say is that I'm
                                            not trying, and I'm not trying my hardest, and I'm not trying to do the best
                                            way I know how.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can I resell the products?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            I always felt like I could do anything. That’s the main thing people are
                                            controlled by! Thoughts- their perception of themselves! They're slowed down
                                            by their perception of themselves. If you're taught you can’t do anything,
                                            you won’t do anything. I was taught I could do everything.
                                            <br><br>
                                            If everything I did failed - which it doesn't, it actually succeeds - just
                                            the fact that I'm willing to fail is an inspiration. People are so scared to
                                            lose that they don't even try. Like, one thing people can't say is that I'm
                                            not trying, and I'm not trying my hardest, and I'm not trying to do the best
                                            way I know how.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3">
                                    <h5 class="accordion-header" id="headingFifth">
                                        <button class="accordion-button border-bottom font-weight-bold text-sm"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth"
                                            aria-expanded="false" aria-controls="collapseFifth">
                                            Where do I find the shipping details?
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h5>
                                    <div id="collapseFifth" class="accordion-collapse collapse"
                                        aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                                        <div class="accordion-body text-sm opacity-8">
                                            There’s nothing I really wanted to do in life that I wasn’t able to get good
                                            at. That’s my skill. I’m not really specifically talented at anything except
                                            for the ability to learn. That’s what I do. That’s what I’m here for. Don’t
                                            be afraid to be wrong because you can’t learn anything from a compliment.
                                            I always felt like I could do anything. That’s the main thing people are
                                            controlled by! Thoughts- their perception of themselves! They're slowed down
                                            by their perception of themselves. If you're taught you can’t do anything,
                                            you won’t do anything. I was taught I could do everything.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-section">
        <div class="container">
            <div class="card px-4 py-4 white bg-primary-dark">
                <div class="row">
                    <div class="col-md-8 col-sm-6 d-flex align-items-center">
                        <div class="card-body">
                            <h5 class="white">Have something to tell?</h5>
                            Send us message about what you think or you need.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label white" aria-autocomplete="none">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Write your name">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label white">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
