@extends('layouts.master')

@section('content')

    <!-- Slide1 -->
    <section class="slide1" style="size: cover;" >
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/slide3.png); background-repeat: no-repeat; background-size: cover;">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        </h2>

                       <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->

                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(images/slide4.png);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">

						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">

                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slide-04.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">

						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">

                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection