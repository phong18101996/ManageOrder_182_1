<!DOCTYPE html>
<html>
<head>
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
{{--popup --}}
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>
{{--main content--}}

<nav class="navbar navbar-inverse">

    <div class="container-fluid fix-border">

        <div class="navbar-header">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            {{--<a class="navbar-brand" href="#">WebSiteName</a>--}}
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>

</nav>
<div id="content">
<div class="container">
    <div class="title-data">
        <h2>Chi Tiết Đơn Hàng</h2>
    </div>
    <div class="col-sm-12 data">
        <div class="row">
            <div class="">

                <div class="col-sm-2 sub-function">
                    <a>
                        <span class="label-success">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới
                        </span>
                    </a>
                </div>
                <div class="col-sm-4 sub-function"  >
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm">

                    </form>


                    {{--<button type="submit" class="btn btn-success" >Submit</button>--}}
                </div>
                <div class="col-sm-4 sub-function" >
                    <p class="select-count count-title">
                        <span class="glyphicon glyphicon-cog"></span> Tùy Chọn Hiển Thị
                    </p>
                    <p class="select-count">
                    <select>
                        <option value="">Hiển thị tất cả</option>
                        <option value="">Hiển thị 10 </option>
                        <option value="">Hiển thị 50</option>
                        <option value="">Hiển thị 100</option>
                    </select>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4>Có 200 Đơn hàng</h4>
                </div>
                <div class="col-sm-6 ">

                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>


                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th> Mã Đơn Hàng</th>
                        <th> Sản Phẩm</th>

                        <th>Người Nhận</th>
                        <th>Trạng Thái Đơn Hàng</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td><a><span class="label-warning"> <span class="glyphicon glyphicon-edit"></span>Cập Nhật</span></a> </td>
                        <td><a><span class="label-danger"><span class="glyphicon glyphicon-remove-circle"></span>Xóa</span> </a></td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td>john@example.com</td>
                        <td><a><span class="label-warning"> <span class="glyphicon glyphicon-edit"></span>Cập Nhật</span></a> </td>
                        <td><a><span class="label-danger"><span class="glyphicon glyphicon-remove-circle"></span>Xóa</span> </a></td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td>john@example.com</td>
                        <td><a><span class="label-warning"> <span class="glyphicon glyphicon-edit"></span>Cập Nhật</span></a> </td>
                        <td><a><span class="label-danger"><span class="glyphicon glyphicon-remove-circle"></span>Xóa</span> </a></td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6 ">

                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>

</div>
</div>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "150px";
        document.getElementById("content").style.marginLeft = "150px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("content").style.marginLeft= "0";
    }
</script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</html>