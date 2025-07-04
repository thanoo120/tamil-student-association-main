<footer>
    <div class="footer-top">
        <div class="pt-exebar text-center">
            {{-- <a href="/"><i class="fa fa-facebook social-link px-auto py-1"></i></a>
            <a href="/"><i class="fa fa-instagram social-link px-auto py-1"></i></a>
            <a href="/"><i class="fa fa-twitter social-link px-auto py-1"></i></a>
            <a href="/"><i class="fa fa-linkedin social-link px-auto py-1"></i></a> --}}
        </div>
        <div class="container">
            <div id="contact" class="row">
                <div class="col-md-12 col-sm-12 footer-col-4">
                    <div class="widget">
                        <h5 class="footer-title">தொடர்புகள்</h5>
                        <div class="subscribe-form m-b20">
                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">பெயர் | Name</label>
                                            <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" placeholder="உங்கள் பெயரை உள்ளிடவும்">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">விடயம் | Subject</label>
                                            <input type="text" class="form-control" value="{{old('subject')}}" name="subject" id="subject" placeholder="உங்கள் விடயத்தை உள்ளிடவும்">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">மின்னஞ்சல் | Email</label>
                                            <input type="email" class="form-control" name="email"  value="{{old('email')}}"id="email" placeholder="உங்கள் மின்னஞ்சலை உள்ளிடவும்">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">தொலைபேசி இல | Phone</label>
                                            <input type="text" class="form-control" name="phone"  value="{{old('phone')}}"id="phone" placeholder="உங்கள் தொலைபேசி இலக்கத்தை உள்ளிடவும்">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="message" class="form-label">குறுஞ்செய்தி | Message</label>
                                            <input type="text" class="form-control" name="message"  value="{{old('message')}}"id="message" placeholder="உங்கள் குறுஞ்செய்தியை உள்ளிடவும்">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-dark mt-2"><i class="mdi mdi-content-save"></i> அனுப்புக | Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"><script>document.write(new Date().getFullYear())</script> © TSA - Developed By <a class="text-danger" href="https://wa.me/+94775428041/?text=Hello, Saru!">TSA
                </a>.</div>
            </div>
        </div>
    </div>
</footer>