@foreach ($itemsCategory as $item)
    @if ($item['display'] == 'list')
        @include('news.pages.home.child-index.category_list')
    @elseif($item['display'] == 'grid')
        @include('news.pages.home.child-index.category_grid')
    @endif
@endforeach

{{-- <div class="world">
    <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
        <div>
            <div class="section_title">Số hóa</div>
        </div>
        <div class="section_bar"></div>
    </div>
    <div class="row world_row">
        <div class="col-lg-11">
            <div class="row">
                <div class="col-lg-6">
                    <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                        <div class="post_image"><img src="images/article/nt1QxhKUXM.jpeg"
                                alt="images/article/nt1QxhKUXM.jpeg" class="img-fluid w-100">
                        </div>
                        <div class="post_content">
                            <div class="post_category cat_technology ">
                                <a href="the-loai/so-hoa-6.html">Số hóa</a>
                            </div>
                            <div class="post_title"><a
                                    href="bai-viet/huawei-noi-lenh-cam-se-khien-my-tut-hau-ve-5g-22.html">Huawei
                                    nói lệnh cấm sẽ khiến Mỹ tụt hậu về 5G</a></div>
                            <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                    <div class="post_author_name"><a href="#">Lưu Trường Hải
                                            Lân</a></div>
                                </div>
                                <div class="post_date"><a href="#">16/05/2019</a></div>
                            </div>
                            <div class="post_text">
                                <p>Huawei khẳng định sắc lệnh mới của Mỹ sẽ chỉ càng khiến quá
                                    trình triển khai công nghệ 5G ở nước này thêm chậm chạp và
                                    đắt đỏ.
                                    Hãng công nghệ Trung Quốc tự nhận là "người dẫn đầu không ai
                                    sánh kịp về công nghệ 5G", nên việc bị...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                        <div class="post_image"><img src="images/article/aiC6j6fWZY.png"
                                alt="images/article/aiC6j6fWZY.png" class="img-fluid w-100"></div>
                        <div class="post_content">
                            <div class="post_category cat_technology ">
                                <a href="the-loai/so-hoa-6.html">Số hóa</a>
                            </div>
                            <div class="post_title"><a
                                    href="bai-viet/asus-ra-mat-zenfone-6-voi-camera-lat-tu-dong-23.html">Asus
                                    ra mắt Zenfone 6 với camera lật tự động</a></div>
                            <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                    <div class="post_author_name"><a href="#">Lưu Trường Hải
                                            Lân</a></div>
                                </div>
                                <div class="post_date"><a href="#">16/05/2019</a></div>
                            </div>
                            <div class="post_text">
                                <p>Với thiết kế màn hình tràn viền hoàn toàn không tai thỏ,
                                    camera chính 48 megapixel trên Zenfone 6 có thể lật từ sau
                                    ra trước biến thành camera selfie.
                                    Zenfone 6 là một trong những smartphone có viền màn hình
                                    mỏng nhất trên thị trường với tỷ lệ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
                        <div class="post_image"><img src="images/article/9jOZGc7BJK.png"
                                alt="images/article/9jOZGc7BJK.png" class="img-fluid w-100"></div>
                        <div class="post_content">
                            <div class="post_category cat_technology ">
                                <a href="the-loai/so-hoa-6.html">Số hóa</a>
                            </div>
                            <div class="post_title"><a
                                    href="bai-viet/apple-co-the-khong-nang-cap-ios-13-cho-iphone-se-6-12.html">Apple
                                    có thể không nâng cấp iOS 13 cho iPhone SE, 6</a></div>
                            <div class="post_info d-flex flex-row align-items-center justify-content-start">
                                <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                    <div class="post_author_name"><a href="#">Lưu Trường Hải
                                            Lân</a></div>
                                </div>
                                <div class="post_date"><a href="#">10/05/2019</a></div>
                            </div>
                            <div class="post_text">
                                <p>Những mẫu iPhone ra mắt từ 2014 và iPhone SE có thể không
                                    được lên đời hệ điều hành iOS 13 ra mắt tháng 6 tới.
                                    Theo&nbsp;<em>Phone Arena</em>, hệ điều hành iOS 13 sắp
                                    trình làng tại hội nghị WWDC 2019 sẽ không hỗ trợ một loạt
                                    iPhone đời cũ của Apple. Trong đó,...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="home_button mx-auto text-center"><a href="the-loai/so-hoa-6.html">Xem
                        thêm</a></div>
            </div>
        </div>
    </div>
</div>
<div class="technology">
    <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
        <div>
            <div class="section_title">Xe - Ô tô</div>
        </div>
        <div class="section_bar"></div>
    </div>
    <div class="technology_content">
        <div class="post_item post_h_large">
            <div class="row">
                <div class="col-lg-5">
                    <div class="post_image"><img src="images/article/g2c7mYXBPW.png" alt="images/article/g2c7mYXBPW.png"
                            class="img-fluid w-100"></div>
                </div>
                <div class="col-lg-7">
                    <div class="post_content">
                        <div class="post_category cat_technology ">
                            <a href="the-loai/xe-o-to-7.html">Xe - Ô tô</a>
                        </div>
                        <div class="post_title"><a href="bai-viet/hinh-dung-ve-honda-jazz-the-he-moi-13.html">Hình
                                dung về Honda Jazz thế hệ mới</a></div>
                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                <div class="post_author_name"><a href="#">Lưu Trường Hải
                                        Lân</a>
                                </div>
                            </div>
                            <div class="post_date"><a href="#">12/05/2019</a></div>
                        </div>
                        <div class="post_text">
                            <p>Thế hệ thứ tư của mẫu hatchback Honda tiết chế bớt những đường
                                nét gân guốc, thể thao để thay bằng nét trung tính, hợp mắt
                                người dùng hơn.&nbsp;
                                Những hình ảnh đầu tiên về Honda Jazz (Fit tại Nhật Bản) thế hệ
                                mới bắt đầu xuất hiện trên đường thử. Dù chưa...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post_item post_h_large">
            <div class="row">
                <div class="col-lg-5">
                    <div class="post_image"><img src="images/article/9fbeUKTBpU.png" alt="images/article/9fbeUKTBpU.png"
                            class="img-fluid w-100"></div>
                </div>
                <div class="col-lg-7">
                    <div class="post_content">
                        <div class="post_category cat_technology ">
                            <a href="the-loai/xe-o-to-7.html">Xe - Ô tô</a>
                        </div>
                        <div class="post_title"><a
                                href="bai-viet/bmw-i8-roadster-xe-mui-tran-dan-duong-o-formula-e-19.html">BMW
                                i8 Roadster - xe mui trần dẫn đường ở Formula E</a></div>
                        <div class="post_info d-flex flex-row align-items-center justify-content-start">
                            <div class="post_author d-flex flex-row align-items-center justify-content-start">
                                <div class="post_author_name"><a href="#">Lưu Trường Hải
                                        Lân</a>
                                </div>
                            </div>
                            <div class="post_date"><a href="#">10/05/2019</a></div>
                        </div>
                        <div class="post_text">
                            <p>Dịp cuối tuần qua, BMW giới thiệu chiếc xe dẫn đường, làm nhiệm
                                vụ đảm bảo an toàn tại giải đua xe Formula E. Giải đua tương tự
                                giải F1, nhưng toàn bộ xe đua sử dụng động cơ điện.
                                i8 Roadster Safety Car dựa trên chiếc i8 Roadster tiêu chuẩn,
                                nhưng có những thay đổi để trở...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="home_button mx-auto text-center"><a href="the-loai/xe-o-to-7.html">Xem
                    thêm</a></div>
        </div>
    </div>
</div> --}}
