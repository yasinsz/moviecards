@extends('frontend/layouts/app')

@section('content')

<!-- <section class="webdesigntuts-workshop">
    <form action="" method="">
        <input type="search" placeholder="Search for a movie title?">
        <button>Search</button>
    </form>
</section> -->

<div>
    <div class="relative d-flex justify-content-center">
        <input type="text" class="bg-danger rounded-full" width="64px" height="30px" placeholder="Search...">
    </div>

    <div class="popular-movies">
        <h6>Popular movies</h6>

        <div class="grid-container">
            <div class="grid-row">

                <div class=></div>
                <div class="movie">
                    <a href="#">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81iwrVUc5GL._AC_SY741_.jpg" width="140px" height="200px" alt="">
                    </a>
                    <div class="mt-2"></div>
                    <a href="#" class="text-lg mt-2 text-secondary">Parasite</a>
                    <div class="flex items-center text-secondary small">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            <path d="M0 0h24v24H0z" fill="none" /></svg>
                        <span>85%</span>
                        <span>|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="small">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>


            <div class="movie">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81iwrVUc5GL._AC_SY741_.jpg" width="140px" height="200px" alt="">
                </a>
                <div class="mt-2"></div>
                <a href="#" class="text-lg mt-2 text-secondary">Parasite</a>
                <div class="flex items-center text-secondary small">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        <path d="M0 0h24v24H0z" fill="none" /></svg>
                    <span>85%</span>
                    <span>|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="small">
                    Action, Thriller, Comedy
                </div>
            </div>

            <div class="movie">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81iwrVUc5GL._AC_SY741_.jpg" width="140px" height="200px" alt="">
                </a>
                <div class="mt-2"></div>
                <a href="#" class="text-lg mt-2 text-secondary">Parasite</a>
                <div class="flex items-center text-secondary small">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        <path d="M0 0h24v24H0z" fill="none" /></svg>
                    <span>85%</span>
                    <span>|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="small">
                    Action, Thriller, Comedy
                </div>
            </div>

            <div class="movie">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81iwrVUc5GL._AC_SY741_.jpg" width="140px" height="200px" alt="">
                </a>
                <div class="mt-2"></div>
                <a href="#" class="text-lg mt-2 text-secondary">Parasite</a>
                <div class="flex items-center text-secondary small">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        <path d="M0 0h24v24H0z" fill="none" /></svg>
                    <span>85%</span>
                    <span>|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="small">
                    Action, Thriller, Comedy
                </div>
            </div>


        </div>

    </div>
</div>

</div>

</div>





@endsection