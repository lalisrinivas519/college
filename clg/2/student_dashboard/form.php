<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
   <?php include("php_include/head.php")?>
</head>
<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <?php include("php_include/header.php")?>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <?php include("php_include/sidebar.php")?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Form Elements</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Input Example</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="basicInput" class="form-label">Basic input</label>
                                <input type="text" class="form-control" id="basicInput">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithPlaceholder" class="form-label">Input with placeholder</label>
                                <input type="text" class="form-control" id="inputWithPlaceholder" placeholder="Placeholder">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithValue" class="form-label">Input with value</label>
                                <input type="text" class="form-control" id="inputWithValue" value="Input value">
                            </div>
                            <div class="col-sm-6">
                                <label for="readonlyPlainTextInput" class="form-label">Readonly plain text input</label>
                                <input type="text" class="form-control-plaintext" id="readonlyPlainTextInput" value="Readonly input" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label for="readonlyInput" class="form-label">Readonly input</label>
                                <input type="text" class="form-control" id="readonlyInput" value="Readonly input" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label for="disabledInput" class="form-label">Disabled input</label>
                                <input type="text" class="form-control" id="disabledInput" value="Disabled input" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithIcon" class="form-label">Input with icon</label>
                                <div class="input-group-with-icon">
                                    <span class="input-icon">
                                        <i class="fa-light fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control ps-0" id="inputWithIcon" placeholder="example@info.com">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputWithIconRight" class="form-label">Input with icon right</label>
                                <div class="input-group-with-icon">
                                    <input type="email" class="form-control pe-0" id="inputWithIconRight" placeholder="example@info.com">
                                    <span class="input-icon">
                                        <i class="fa-light fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="inputDate" class="form-label">Input date</label>
                                <input type="date" class="form-control" id="inputDate">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputTime" class="form-label">Input time</label>
                                <input type="time" class="form-control" id="inputTime">
                            </div>
                            <div class="col-sm-6">
                                <label for="inputPassword" class="form-label">Input password</label>
                                <input type="password" class="form-control" id="inputPassword" value="password">
                            </div>
                            <div class="col-sm-6">
                                <label for="colorPicker" class="form-label">Color Picker</label>
                                <input type="color" class="form-control form-control-color w-100" id="colorPicker" value="#0D99FF">
                            </div>
                            <div class="col-sm-6">
                                <label for="datalistExample" class="form-label">Datalist example</label>
                                <input type="text" class="form-control" list="datalistOptions" id="datalistExample">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                            </div>
                            <div class="col-sm-6">
                                <label for="roundedInput" class="form-label">Rounded input</label>
                                <input type="text" class="form-control rounded-pill" id="roundedInput">
                            </div>
                            <div class="col-sm-6">
                                <label for="floatingInput" class="form-label">Floating label</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Floating label">
                                    <label for="floatingInput">Floating label</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="exampleTextarea" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleTextarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>File Input</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-sm-6">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="col-sm-6">
                                <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                <input class="form-control" type="file" id="formFileDisabled" disabled>
                            </div>
                            <div class="col-sm-6">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                            <div class="col-sm-6">
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-lg-6">
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Input Sizing</h5>
                    </div>
                    <div class="panel-body">
                        <p class="fs-14 pb-1 mb-10">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm.</code></p>
                        <input class="form-control form-control-sm mb-10" type="text" placeholder=".form-control-sm">
                        <input class="form-control mb-10" type="text" placeholder="Default input">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                    </div>
                </div>
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Input Group Sizing</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel mb-25">
                    <div class="panel-header">
                        <h5>Multiple Inputs & Addons</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text">First and last name</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                    <input type="text" aria-label="Last name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
            </div>
            
            
        </div>

        <!-- footer start -->
        <?php include("php_include/footer.php")?>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/jquery.uploader.min.js"></script>
    <script src="assets/vendor/js/dropzone.min.js"></script>
    <script src="assets/vendor/js/ckeditor.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dropzone-init.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

</html>