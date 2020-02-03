<style>
    html, body {
        overflow-x: hidden;
        /* Prevent scroll on narrow devices */
    }

    @media (max-width: 991.98px) {
        .offcanvas-collapse {
            position: fixed;
            top: 56px;
            /* Height of navbar */
            bottom: 0;
            left: 100%;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            visibility: hidden;
            background-color: #343a40;
            transition-timing-function: ease-in-out;
            transition-duration: .3s;
            transition-property: left, visibility;
        }

        .offcanvas-collapse.open {
            left: 0;
            visibility: visible;
        }
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, .75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-underline .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
        color: #6c757d;
    }

    .nav-underline .nav-link:hover {
        color: #007bff;
    }

    .nav-underline .active {
        font-weight: 500;
        color: #343a40;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, .5);
    }

    .bg-orange {
        background-color: #f57004;
    }

    .border-bottom {
        border-bottom: 1px solid #e5e5e5;
    }

    .box-shadow {
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
    }

    .lh-100 {
        line-height: 1;
    }

    .lh-125 {
        line-height: 1.25;
    }

    .lh-150 {
        line-height: 1.5;
    }
</style>
<div class="container">
    <div class="py-5 text-center">
        <h2>Create Examination on YeneYeneta Exam platform</h2>
        <p class="lead">In this trial version of YeneYeneta Exams you can create as many questions you want this version is valid upto 2 months.</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Exams</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="filter exams..">
                </div>
            </form>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Biology Exam</h6>
                        <small class="text-muted">biology</small>
                    </div>
                    <span class="text-muted">edit</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Maths Exam</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">edit</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Maths Exam</h6>
                        <small>Brief</small>
                    </div>
                    <span class="text-success">edit</span>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Create Exam</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="examname">Exam name</label>
                        <input type="text" class="form-control" id="examname" placeholder="" value="" required>
                        <div class="invalid-feedback">Valid exam name is required.
                </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="examsubject">Exam subject name</label>
                        <input type="text" class="form-control" id="examsubject" placeholder="" value="" required>
                        <div class="invalid-feedback">Valid Subject name is required.
                </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ExamDescription">
                        Exam Description <span class="text-muted">(Optional)</span>
                    </label>
                    <textarea type="email" class="form-control" id="ExamDescription" placeholder="some description for your exam..."></textarea>
                    <div class="invalid-feedback">Please enter a valid Description for your exam.
              </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Exam Status</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="Public" name="Examstatus" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="Public">
                            Public <span class="text-muted">Public mean any one who like can see it.</span>
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="Private" name="Examstatus" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="Private">
                            Private <span class="text-muted">Private mean only you can see and it and it is safe.</span>
                        </label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Create Exam</button>
            </form>
        </div>
    </div>
    <style>
        .container {
            max-width: 960px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .border-top-gray {
            border-top-color: #adb5bd;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .lh-condensed {
            line-height: 1.25;
        }
    </style>
    <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        }
        )();
    </script>
