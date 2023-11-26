<div class="mb-5 banner-container d-flex align-items-center justify-content-center">
    <!-- <img src="{{url('/assets/banner.png')}}" alt="Banner Image"/>
    <div class="dots-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div> -->
    <div id="carouselExampleIndicators" style=" max-width: 1040px; max-height: 585px" class="carousel slide">
        <!-- Phần các chỉ số -->
        <div class=" dots-container carousel-indicators">
            <button   type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=" dot active" aria-current="true" aria-label="Slide 1"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="dot"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"  class="dot"></button>
        </div>
        <!-- Phần bao các slides -->
        <div class="carousel-inner" style="border-radius: 23px;">
            <div class="carousel-item active">
                <img src="{{url('/assets/banner.png')}}"  alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/banner.png')}}" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/banner.png')}}" alt="...">
            </div>
        </div>
        <!-- Phần điều khiển trái phải -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
