<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
<style>
    .well a i {
        font-size: 21px;
        margin-left: 10px;
        color: #ff3300;
    }
</style>
<script>
    $(document).ready(function() {
        $("#change").click(function() {
            $("#change").toggleClass('fa fa fa-thumbs-up');
        });
    });

    $(function() {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function() {
            $('.offcanvas-collapse').toggleClass('open')
        })
    })
</script>
</body></html><script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/flot/jquery.flot.js"></script>
</div></div>
<footer id="main-footer">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="py-4">
                    <h1 class="h3">
                        <span class="brand">Yeneta</span>
                    </h1>
                    <p>copyright &copy;2018</p>
                    <span class="brand">Natnael Getenew production</span>
                    <br>
                    <p>
                        <span class="brand">Yeneta</span>
                        logo, Go gojo &infinity Zema are trademarks of Gojo Group &trade;All Rights Reserved
                    </p>
                    <hr>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn brand" data-toggle="modal" data-target="#contactmodal">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn brand" data-toggle="modal" data-target="#contactmodal">Terms</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo site_url(); ?>blog" target="blank" class="btn brand">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    @media(max-width: 760px) {
        body {
            font-size:12px;
        }

        .btn {
            padding: 5px;
        }

        h1 {
            font-size: 16px;
        }
    }
</style>
</body></html>
