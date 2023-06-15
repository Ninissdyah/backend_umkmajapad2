<!--FOOTER-->
<section class="footer">
    <div class="box-footer">
        <img class="logo" src="{{ asset('/storage/logo footer.png')}}" alt="iniGambar">
    </div>
    <div class="box-container">
        <div class="sample">
            <h3>Address</h3>
            <div class="box-row">
                <i class="bi-geo-alt"></i>
                <a href="#"> Depok, Kabupaten Sleman,<br>
                Daerah Istimewa Yogyakarta,<br>
                Indonesia </a>
            </div>
        </div>

        <div class="sample">
            <h3>Contact Us</h3>
            <div class="box-row">
                <i class="bi-envelope"></i>
                <a href="#">umkmAja.gmail.com </a>
            </div>
            <div class="box-row">
                <i class="fas fa-phone"></i>
                <a href="#">+6281234567890</a>
            </div>
            <div class="box-row">
                <i class="fas fa-phone"></i>
                <a href="#">+6282341234768 </a>
            </div>
        </div>

        <div class="sample">
            <h3>Send Your Message!</h3>
                <div class="box-send">
                    <form method="GET" action="{{route('buku.search')}}">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" name="kata" class="form-control" placeholder="Cari...">
                        </div>
                        <button class="btn-send btn-submit">Send</button>
                    </form>
                </div>
        </div>
    </div> 
    <div class="box-credit">
        <p>UMKMAja!</p>
        <i class="fab fa-facebook fa-2x"></i>
        <i class="fab fa-instagram fa-2x"></i>
        <i class="fab fa-twitter fa-2x"></i>
    </div>
</section>
<!--END FOOTER-->