@extends('layoutClient.feType')
@section('content')
    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="untree_co-section">
            <div class="container">
                <div class="row text-center justify-content-center mb-5">
                    <div class="col-lg-7"><h2 class="section-title text-center">Chi tiết phòng</h2></div>
                </div>

                <div class="owl-carousel owl-3-slider">

                    <div class="item">
                        <a class="media-thumb" href="{{asset('images/Phòng Deluxe Giường Đôi22.jpg')}}" data-fancybox="gallery">

                            <img src="{{asset('images/Phòng Deluxe Giường Đôi22.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                    </div>

                    <div class="item">
                        <a class="media-thumb" href="{{asset('images/Phòng Deluxe Giường Đôi33.jpg')}}" data-fancybox="gallery">
                            <img src="{{asset('images/Phòng Deluxe Giường Đôi33.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                    </div>

                    <div class="item">
                        <a class="media-thumb" href="{{asset('images/Phòng Deluxe Giường Đôi44.jpg')}}" data-fancybox="gallery">
                            <img src="{{asset('images/Phòng Deluxe Giường Đôi44.jpg')}}" alt="Image" class="img-fluid">
                        </a>
                    </div>


                    <div class="item">
                        <a class="media-thumb" href="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" data-fancybox="gallery">
                            <img src="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" alt="Image" class="img-fluid">
                        </a>
                    </div>

                    <div class="item">
                        <a class="media-thumb" href="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" data-fancybox="gallery">
                            <img src="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" alt="Image" class="img-fluid">
                        </a>
                    </div>

                    <div class="item">
                        <a class="media-thumb" href="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" data-fancybox="gallery">
                            <img src="https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2020/11/28/Nam-2030-du-lich-ha-noi-phan-dau-tro-thanh-nganh-kinh-te-mui-nhon-cua-thu-do-19.jpg" alt="Image" class="img-fluid">
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <div class="container">
            <div>
                <a href="{{route('booking')}}" class="" >
                    <button type="submit" class="btn btn-primary btn-block" style="margin: 0px auto; width: 300px; height: 70px">Đặt phòng ngay</button>
                </a>
                <h3>Đánh giá:
                    <span class="text-success">4.5/5 </span><span><i class="icon-star"></i></span>
                </h3>
                <h3>Giá phòng: </h3>
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <h4> Giá ban đầu </h4>
                        <h5 class="text-primary">
                           1.489.000 VNĐ
                        </h5>

                    </div>
                    <div class="col-sm-6">
                        <h4>Giá hot trong ngày </h4>
                        <h5 class="text-danger">
                           791.000 VNĐ
                        </h5>
                    </div>
                </div>
                <div class="justify-content-center"> <h3 >Mô tả chi tiết</h3></div>
                <p>
                    <h4>1 giường đôi lớn</h4>
                    Tầm nhìn ra khung cảnh<br>
                    25 m²<br>
                    Hệ thống cách âm<br>
                    Minibar<br>
                    Phòng tắm riêng<br>
                    Điều hòa không khí<br>
                    TV màn hình phẳng<br>

                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Các tiện nghi được ưa chuộng nhất:</h3>
                    <p>
                        Xe đưa đón sân bay<br>
                        Phòng không hút thuốc<br>
                        WiFi miễn phí<br>
                        Phòng gia đình<br>
                        Lễ tân 24 giờ<br>
                        Thang máy<br>
                        Điều hòa nhiệt độ
                    </p>

                </div>
                <div class="col-sm-6">
                    <h3>Xung quanh có gì?</h3>
                    <p>
                        Vườn hoa Cửa Nam	-	        350 m<br>
                        Hang Trong Garden		-        400 m<br>
                        Nhà tù Lịch sử Hỏa Lò	   -     500 m<br>
                        Tay Son Park			  -      550 m<br>
                        Dong Kinh Nghia Thuc Square	 -   600 m<br>
                        Bảo tàng Lịch sử Quân sự 	-    650 m<br>
                        Công viên Lê Nin		 -       700 m<br>
                        Cột cờ Hà Nội			-        700 m<br>
                        Vườn Bể Cảnh			-        750 m<br>
                        Hoàng thành Huế		   -         800 m

                    </p>
                </div>
            </div>
            <div>
                <h3> Giới thiệu về khách sạn</h3>
                <b>
                    HANZ Hanoi de Maison Grand

                </b>
                <i>Địa chỉ: 106 Hàng Bông, Quận Hoàn Kiếm, Hà Nội, Việt Nam</i>
                <p>
                    HANZ Hanoi de Maison Grand cung cấp phòng nghỉ gắn máy điều hòa tại quận Hoàn Kiếm thuộc thành phố Hà Nội, cách Nhà Thờ Lớn 600 m. Chỗ nghỉ này nằm cách các điểm tham quan như Hoàng thành Thăng Long, Ô Quan Chưởng và trung tâm thương mại Tràng Tiền Plaza một quãng ngắn. Nơi đây có lễ tân 24 giờ, dịch vụ đưa đón sân bay, máy ATM và WiFi miễn phí trong toàn bộ khuôn viên
                </p>
                <p>
                    Mỗi phòng nghỉ tại HANZ Hanoi de Maison Grand đều được trang bị bàn làm việc, TV màn hình phẳng, phòng tắm riêng, ga trải giường và khăn tắm. Một số phòng nhìn ra thành phố. Các phòng được bố trí ấm đun nước và minibar.
                </p>
                <p>
                    Các điểm tham quan nổi tiếng gần chỗ nghỉ bao gồm Nhà hát múa rối nước Thăng Long, ga Hà Nội và Hồ Hoàn Kiếm. Sân bay gần nhất là sân bay quốc tế Nội Bài, nằm trong bán kính 24 km từ HANZ Hanoi de Maison Grand.
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <h4>Nhận phòng</h4>
                    <h5>
                       12:00
                    </h5>

                </div>
                <div class="col-sm-6">
                    <h4>Trả Phòng</h4>
                    <h5>
                       13:00
                    </h5>
                </div>
            </div>
            <div class="mt-5">
                <div>
                    <h3>Chính sách về trẻ em</h3>
                    <p>Phù hợp cho tất cả trẻ em.</p>
                </div>
                <div>
                    <h3>Không giới hạn độ tuổi</h3>
                    <p>Không có yêu cầu về độ tuổi khi nhận phòng</p>
                </div>
                <div>
                    <h3>Vật nuôi</h3>
                    <p>Vật nuôi không được phép.</p>
                </div>
            </div>

        </div>

        <div class="mb-5 justify-content-center"  style="margin: 0px auto; border: 1px solid black; width: 700px"; height="300px">
            <div class="owl-single dots-absolute owl-carousel">
                <img
                    src="{{asset('images/HANZ Hanoi de Maison Grand11.jpg')}}"
                    alt="Free HTML Template by Untree.co" class="img-fluid">
                <img
                    src="{{asset('images/HANZ Hanoi de Maison Grand33.jpg')}}"
                    alt="Free HTML Template by Untree.co" class="img-fluid">
                <img
                    src="{{asset('images/HANZ Hanoi de Maison Grand55.jpg')}}"
                    alt="Free HTML Template by Untree.co" class="img-fluid">
            </div>

        </div>
@endsection
