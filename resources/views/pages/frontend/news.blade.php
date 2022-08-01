@extends('layouts.frontend')

@section('title')
    News - Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded">
            <h1 class="white">News</h1>
        </div>
    </div>
    <div class="section-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card px-3 py-3 d-flex flex-row mb-4">
                        <img src="{{ url('./images/light-trafic.jpg') }}" alt="" height="100px" width="100px"
                            style="margin: 15px" class="rounded">
                        <div class="card-body">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci!</p>
                        </div>
                    </div>
                    <div class="card px-3 py-3 d-flex flex-row mb-4">
                        <img src="{{ url('./images/light-trafic.jpg') }}" alt="" height="100px" width="100px"
                            style="margin: 15px" class="rounded">
                        <div class="card-body">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci!</p>
                        </div>
                    </div>
                    <div class="card px-3 py-3 d-flex flex-row mb-4">
                        <img src="{{ url('./images/light-trafic.jpg') }}" alt="" height="100px" width="100px"
                            style="margin: 15px" class="rounded">
                        <div class="card-body">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci!</p>
                        </div>
                    </div>
                    <div class="card px-3 py-3 d-flex flex-row mb-4">
                        <img src="{{ url('./images/light-trafic.jpg') }}" alt="" height="100px" width="100px"
                            style="margin: 15px" class="rounded">
                        <div class="card-body">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci!</p>
                        </div>
                    </div>
                    <div class="card px-3 py-3 d-flex flex-row mb-4">
                        <img src="{{ url('./images/light-trafic.jpg') }}" alt="" height="100px" width="100px"
                            style="margin: 15px" class="rounded">
                        <div class="card-body">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci!</p>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 d-none d-sm-block">
                    <div class="card py-4 px-4">
                        <h5>category</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Technology</li>
                            <li class="list-group-item">Inovation</li>
                            <li class="list-group-item">Creative</li>
                            <li class="list-group-item">Learn and study</li>
                            <li class="list-group-item">Lorem ipsum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
