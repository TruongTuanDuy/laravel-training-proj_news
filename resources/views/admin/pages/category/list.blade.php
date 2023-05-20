<div class="x_content">
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title">#</th>
                    <th class="column-title">Slider Info</th>
                    <th class="column-title">Trạng thái</th>
                    <th class="column-title">Tạo mới</th>
                    <th class="column-title">Chỉnh sửa</th>
                    <th class="column-title">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @if (count($item) > 0)
                    <tr class="odd pointer">
                        <td>3</td>
                        <td width="40%">
                            <p><strong>Name:</strong> Khóa học lập trình Frontend Master</p>
                            <p><strong>Description:</strong> Khoa học sẽ giúp bạn trở thành một chuyên gia Frontend với
                                đầy
                                đủ các kiến thức về HTML, CSS, JavaScript, Bootstrap, jQuery, chuyển PSD thành HTML ...
                            </p>
                            <p><strong>Link:</strong> https://zendvn.com/khoa-hoc-lap-trinh-frontend-master/</p>
                            <p><img src="http://proj_news.xyz/images/slider/rEpDUQCxe4.jpeg"
                                    alt="Khóa học lập trình Frontend Master" class="zvn-thumb" /></p>
                        </td>
                        <td><a href="http://proj_news.xyz/admin123/slider/change-status-active/1" type="button"
                                class="btn btn-round btn-success">Kích hoạt</a></td>
                        <td>
                            <p><i class="fa fa-user"></i> admin</p>
                            <p><i class="fa fa-clock-o"></i> 15/04/2019</p>
                        </td>
                        <td>
                            <p><i class="fa fa-user"></i> admin</p>
                            <p><i class="fa fa-clock-o"></i> 08/07/2019</p>
                        </td>
                        <td class="last">
                            <div class="zvn-box-btn-filter">
                                <a href="http://proj_news.xyz/admin123/slider/form/1" type="button"
                                    class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="http://proj_news.xyz/admin123/slider/delete/1" type="button"
                                    class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip"
                                    data-placement="top" data-original-title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6" class="text-center">
                            Dữ liệu đang được cập nhật
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
