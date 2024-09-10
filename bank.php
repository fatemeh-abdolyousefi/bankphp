<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pardakht</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cartnum {
            display: flex;
            gap: 5px;
        }
        .cartnump {
            margin: 5px;
            flex: 1;
            min-width: 0;
        }
        .buttonend {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .buttonitem {
            width: 150px;
        }
    </style>
</head>
<body dir="rtl">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <form class="row p-3 border border-primary rounded">
                <header style="background: #428bca;padding:15px" class="text-white p-2 mb-4">💳اطلاعات کارت</header>


                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="selectcart" class="form-label"><b>انتخاب کارت</b></label>
                    </div>
                    <div class="col-md-9">
                        <select id="selectcart" class="form-select">
                            <option selected>هیچکدام</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <!-- شماره کارت -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="cartnumber" class="form-label"><b>شماره کارت</b></label>
                    </div>
                    <div class="col-md-9 d-flex cartnum">
                        <input type="text" class="cartnump form-control" maxlength="4">
                        <input type="text" class="cartnump form-control" maxlength="4">
                        <input type="text" class="cartnump form-control" maxlength="4">
                        <input type="text" class="cartnump form-control" id="cartnumber" maxlength="4">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3"></div>
                    <div style="color:#599abb;background: #d9edf7;padding: 15px" class="col-md-9 text-center"><b>
                            درصورتی که رمز یکبار مصرف ندارید روی دکمه "درخواست رمز پویا" کلیک کنید
                        </b></div>
                </div>


                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <label for="secondpass" class="form-label"><b>رمز دوم</b></label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="text" id="secondpass" class="form-control" placeholder="ورود رمز">
                            <button class="btn text-white" style="background: #5cb85c;"><b>درخواست رمز پویا</b></button>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <label for="snumber" class="form-label"><b>شماره شناسایی دوم (CVV2)</b></label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="snumber" class="form-control">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <label for="month" class="form-label"><b>تاریخ انقضای کارت</b></label>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-text"><b>ماه</b></div>
                                    <input id="month" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-text"><b>سال</b></div>
                                    <input id="year" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-3">
                        <label for="code" class="form-label"><b>کد امنیتی</b></label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <img src="5936144651822155102.jpg" width="150px" height="42px">
                            <input id="code" class="form-control" type="text">
                            <div class="input-group-text">
                                <img src="ref.jpg" style="width: 30px">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-3">
                        <label for="email" class="form-label"><b>آدرس ایمیل (اختیاری)</b></label>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input id="email" class="form-control" type="text">
                            <div class="input-group-text">
                                <input type="checkbox" class="form-check-input" id="checkemail">
                                <label for="checkemail" class="form-check-label"><b>ذخیره</b></label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="col-md-9 mb-3">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label for="check" class="form-check-label"><b>ذخیره شماره کارت و تاریخ انقضا در سامانه‌های پرداخت سامان</b></label>
                    </div>
                </div>


                <div class="buttonend me-5">
                    <button class="btn text-white buttonitem" style="background:#428bca;"> ✓ پرداخت</button>
                    <button class="btn text-white buttonitem" style="background:#d9534f;"> ⃠ انصراف </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
